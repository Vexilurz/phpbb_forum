<?php
/** 
*
* @package phpBB3
* @version $Id: recent.php,v 1.1.2 2007/08/21 23:21:39 rxu Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/

/* Config section */
$cfg_ignore_forums = ''; 		// ids of forums you don't want to display, separated by commas or empty
$cfg_only_forums = ''; 			// ids of forums you only want to display, separated by commas or empty
$cfg_nm_topics = 20;			// number of topics to output
$cfg_max_topic_length = 120; 	// max topic length, if more, title will be shortened
$cfg_show_replies = true; 		// show number of replies to topics
$cfg_show_first_post = false;	// show first posts of the recent topics
$cfg_show_attachments = false;	// show attachments in the first posts of recent topics
/* End of config */

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);

//
// Let's prevent caching
//
if (!empty($_SERVER['SERVER_SOFTWARE']) && strstr($_SERVER['SERVER_SOFTWARE'], 'Apache/2'))
{
	header ('Cache-Control: no-cache, pre-check=0, post-check=0');
}
else
{
	header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
}
header('Content-type: text/html; charset=UTF-8');
header('Expires: 0');
header('Pragma: no-cache');

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('common');

//
// Building URL
//
$board_path = generate_board_url();
$viewtopic_url = $board_path . '/viewtopic.' . $phpEx;

// Fetching forums that should not be displayed
$forums = implode(',', array_keys($auth->acl_getf('!f_read', true)));
$cfg_ignore_forums = (!empty($cfg_ignore_forums) && !empty($forums)) ? $cfg_ignore_forums . ',' . $forums : ((!empty($forums)) ? $forums : ((!empty($cfg_ignore_forums)) ? $cfg_ignore_forums : ''));

// Building sql for forums that should not be displayed
$sql_ignore_forums = (!empty($cfg_ignore_forums)) ? ' AND t.forum_id NOT IN(' . $cfg_ignore_forums .') ' : '';

// Building sql for forums that should only be displayed
$sql_only_forums = (!empty($cfg_only_forums)) ? ' AND t.forum_id IN(' . $cfg_only_forums .') ' : '';

// Fetching topics of public forums
$sql = 'SELECT t.topic_id, t.forum_id, t.topic_title, t.topic_last_post_id, t.topic_first_post_id, t.topic_replies, t.topic_replies_real, t.topic_last_post_time, p.post_id, p.post_text, p.bbcode_uid, p.bbcode_bitfield, p.post_attachment, p.post_approved
	FROM ' . TOPICS_TABLE . ' AS t, ' . POSTS_TABLE . ' AS p, ' . FORUMS_TABLE . " AS f
	WHERE t.forum_id = f.forum_id
		$sql_ignore_forums
		$sql_only_forums 
		AND p.post_id = t.topic_first_post_id
		AND t.topic_moved_id = 0
	ORDER BY t.topic_last_post_id DESC LIMIT $cfg_nm_topics";

$result = $db->sql_query($sql);

$recent_topics = $db->sql_fetchrowset($result);

//
// BEGIN ATTACHMENT DATA
//
if($cfg_show_first_post && $cfg_show_attachments)
{
	$attach_list = $update_count = array();
	foreach ($recent_topics as $post_attachment)
	{
		if ($post_attachment['post_attachment'] && $config['allow_attachments'])
		{
			$attach_list[] = $post_attachment['post_id'];

			if ($post_attachment['post_approved'])
			{
				$has_attachments = true;
			}
		}
	}

	// Pull attachment data
	if (sizeof($attach_list))
	{
		if ($auth->acl_get('u_download') )
		{
			$sql_attach = 'SELECT *
				FROM ' . ATTACHMENTS_TABLE . '
				WHERE ' . $db->sql_in_set('post_msg_id', $attach_list) . '
					AND in_message = 0
				ORDER BY filetime DESC, post_msg_id ASC';
			$result_attach = $db->sql_query($sql_attach);

			while ($row_attach = $db->sql_fetchrow($result_attach))
			{
				$attachments[$row_attach['post_msg_id']][] = $row_attach;
			}
			$db->sql_freeresult($result_attach);
		}
		else
		{
			$display_notice = true;
		}
	}
}
//
// END ATTACHMENT DATA
//
//$rowset = array();
foreach ( $recent_topics as $row )
{
	$topic_title = censor_text($row['topic_title']);
	$topic_title = (utf8_strlen($topic_title) > $cfg_max_topic_length) ? utf8_substr($topic_title, 0, $cfg_max_topic_length) . '&hellip;' : $topic_title;
	$topic_title = str_replace(array("\r\n", "\r", "\n"), '<br />', $topic_title);
	$topic_title = addslashes($topic_title);
	
	// Replies
	$replies = ($auth->acl_get('m_approve', $row['forum_id'])) ? $row['topic_replies_real'] : $row['topic_replies'];

	// Instantiate BBCode if need be
	if ($row['bbcode_bitfield'] !== '')
	{
		$bbcode = new bbcode(base64_encode($row['bbcode_bitfield']));
	}

	$message = $row['post_text'];

	// Parse the message
	$message = censor_text($message);

	// Second parse bbcode here
	if ($row['bbcode_bitfield'])
	{
		$bbcode->bbcode_second_pass($message, $row['bbcode_uid'], $row['bbcode_bitfield']);
	}

	$message = str_replace("\n", '<br />', $message);

	// Always process smilies after parsing bbcodes
	$message = smiley_text($message);
	
	// Parse attachments
	if ($cfg_show_first_post && $cfg_show_attachments && !empty($attachments[$row['post_id']]))
	{
		parse_attachments($row['forum_id'], $message, $attachments[$row['post_id']], $update_count);
	}
	
	$message = str_replace(array("\r\n", "\r", "\n"), '<br />', $message);
	$message = addslashes($message);
	$message = str_replace('./', $board_path . '/', $message);
	$tags = array('dl', 'dt', 'dd');
	$message = strip_selected_tags($message, $tags);
	
	$unread_topic = false;
	if ($user->data['user_id'] != ANONYMOUS) // wt: if not Anonymous
	{
		$tmpsql = 'SELECT ft.mark_time FROM ' . FORUMS_TRACK_TABLE . ' AS ft WHERE ft.forum_id = ' . $row['forum_id'] . ' AND ft.user_id = ' . $user->data['user_id'];
		$tmpresult = $db->sql_query($tmpsql);
		$mt_res = $db->sql_fetchrow($tmpresult);

		$unread_topic = $row['topic_last_post_time'] > $mt_res['mark_time'] ? true : false;
		$db->sql_freeresult($tmpresult);
	}
	
	if ($unread_topic)
	{
		$replies = '<font color=#CC0000>[' . $replies . ']&gt;</font> ';
	} else {
		$replies = '<font color=#00AA00>[' . $replies . ']</font> ';
	}
	
	$template->assign_block_vars('topicrow', array(
		'U_TOPIC' 		=> $viewtopic_url . '?f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;view=unread#unread',
		'TOPIC_TITLE' 	=> $topic_title,
		'TOPIC_REPLIES'	=> ($cfg_show_replies) ? $replies : '',
		'S_HAS_ATTACHMENTS'		=> ($cfg_show_first_post && $cfg_show_attachments && !empty($attachments[$row['post_id']])) ? true : false,
	));


	if ($cfg_show_first_post)
	{
		$template->assign_block_vars('topicrow.first_post_text', array(
			'TOPIC_FIRST_POST_TEXT' => ($cfg_show_first_post) ? $message : ''
		));
	}

	// Display not already displayed Attachments for this post, we already parsed them. ;)
	if ($cfg_show_first_post && $cfg_show_attachments && !empty($attachments[$row['post_id']]))
	{
		foreach ($attachments[$row['post_id']] as $attachment)
		{
			$attachment = str_replace(array("\r\n", "\r", "\n"), '<br />', $attachment);
			$attachment = str_replace('"./', '"' . $board_path . '/', $attachment);
			$tags = array('span', 'dt', 'dd');
			$attachment = strip_selected_tags($attachment, $tags);

			$template->assign_block_vars('topicrow.first_post_text.attachment', array(
				'DISPLAY_ATTACHMENT'	=>  $attachment)
			);
		}
	}

}
$db->sql_freeresult($result);
		
//
// Load template
//
$template->set_filenames(array(
	'body' => 'recent_body.html')
);

//
// Output
//
$template->display('body');

/**
* Works like PHP function strip_tags, but it only removes selected tags.
* Example: * strip_selected_tags('<b>Person:</b> <strong>Larcher</strong>', 'strong') => <b>Person:</b> Larcher
* by Matthieu Larcher 
* http://ru2.php.net/manual/en/function.strip-tags.php#76045
*/
function strip_selected_tags($text, $tags = array())
{
	$args = func_get_args();
	$text = array_shift($args);
	$tags = (func_num_args() > 2) ? array_diff($args,array($text)) : (array)$tags;
	foreach ($tags as $tag)
	{
		while(preg_match('/<'.$tag.'(|\W[^>]*)>(.*)<\/'. $tag .'>/iusU', $text, $found))
		{
			$text = str_replace($found[0],$found[2],$text);
		}
	}

	return preg_replace('/(<('.join('|',$tags).')(|\W.*)\/>)/iusU', '', $text);
}
?>