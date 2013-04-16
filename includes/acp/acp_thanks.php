<?php
/**
*
* @package acp
* @version $Id: acp_thanks.php,v 123 2009-06-11 10:02:51 Палыч$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_thanks
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$config_vars = array(
			'thanks_postlist_view'		=> 'THANKS_POSTLIST_VIEW',
			'thanks_profilelist_view'	=> 'THANKS_PROFILELIST_VIEW',
			'thanks_number'				=> 'THANKS_NUMBER',
			'remove_thanks'				=> 'REMOVE_THANKS'
		);

		$this->tpl_name = 'acp_thanks';
		$this->page_title = 'ACP_THANKS';
		$form_key = 'acp_thanks';
		add_form_key($form_key);

		$submit = request_var('submit', false);
		$refresh = request_var('refresh', false);

		if ($submit && check_form_key($form_key))
		{
			$config_vars = array_keys($config_vars);
			foreach ($config_vars as $config_var)
			{
				set_config($config_var, request_var($config_var, ''));
			}
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}
		else if($submit)
		{
				trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action));
		}
		else
		{	
			foreach ($config_vars as $config_var => $template_var)
			{
				$template->assign_var($template_var, (isset($_REQUEST[$config_var])) ? request_var($config_var, '') : $config[$config_var]);
			}
		}
		
		if ($refresh)
		{
			refresh();
		}
	}
}	
	
function refresh()
	{
		global $db, $user, $auth, $template;

		$posts_thanks = array();
		$posts_delete = array();
		$all_thanks_posts = $del_posts = $postmin = $maxid = 0; 
			
		$sql = 'SELECT DISTINCT post_id
			FROM ' . THANKS_TABLE;
		$result = $db->sql_query($sql);
			
		while ($row = $db->sql_fetchrow($result))
		{
			$posts_thanks[] = $row['post_id'];
			$all_thanks_posts++;
		}
		natsort ($posts_thanks);
			
		$sql = 'SELECT MAX(post_id) AS maxid
			FROM ' . POSTS_TABLE;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$maxid = $row['maxid'];
		$db->sql_freeresult($result);
			
		for ($i=1; $i < 200; $i++)
		{
			$postmax = 5000;
			$posts_posts = array();
			
			$sql = 'SELECT post_id
				FROM ' . POSTS_TABLE;
			$result = $db->sql_query_limit($sql, $postmax, $postmin);
			
			if (!$db->sql_fetchrow($result))
			{
				break;
			}
			$numberpost = 0;						
			while ($row = $db->sql_fetchrow($result))
			{
				$posts_posts[$row['post_id']] = $row['post_id'];
				$numberpost++;
			}
			
			$db->sql_freeresult($result);
			$max = end($posts_posts);
			$min = reset($posts_posts);
			
			for ($j=0; $j < $all_thanks_posts; $j++)
			{
				if ($posts_thanks[$j] > $min)
				{
					if ($posts_thanks[$j] < $max)
					{
						if (!isset($posts_posts[$posts_thanks[$j]]))
						{
							$posts_delete[] = $posts_thanks[$j];
							$del_posts++;
						}
					}
				}
			}
			UnSet($posts_posts);
			$posts = $postmin;
			$postmin = $postmin + $postmax - 1;
		}	

		for ($i=0, $end = count($posts_thanks); $i < $end; $i++)
		{
			if ($posts_thanks[$i] > $maxid)
			{
				$posts_delete[] = $posts_thanks[$i];
				$del_posts++;
			}
		}
	
		if(!empty($posts_delete))
		{
			$sql_where = 'post_id = '.$posts_delete[0];
			for ($i=1; $i < $del_posts; $i++)
			{
				$sql_where .= ' OR post_id = '.$posts_delete[$i];
			}		
			
			$sql = 'DELETE FROM ' . THANKS_TABLE ."
				WHERE " . $sql_where;
			$result = $db->sql_query($sql);
		}
		
		$all_posts = $posts + $numberpost + 1;
		$template->assign_vars(array(
			'POST'			=> $all_posts,
			'THANKSPOST'	=> $all_thanks_posts,
			'DELPOST'		=> $del_posts,
			));
	}
?>