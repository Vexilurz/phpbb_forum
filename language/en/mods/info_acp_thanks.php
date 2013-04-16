<?php
/**
*
* mod_thanks [English]
*
* @package language
* @version $Id: info_acp_thanks.php 123 2009-06-11 10:02:51Палыч $
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'acl_f_thanks' 						=> array('lang' => 'Can thanks for posts', 'cat' => 'misc'),
	'acl_u_viewthanks' 					=> array('lang' => 'Can view list of thanks', 'cat' => 'misc'),
	'IMG_THANKPOSTS'					=> 'To thank for the message',
	'IMG_REMOVETHANKS'					=> 'To delete gratitude',
	'THANKS_POSTLIST_VIEW'				=> 'List thanks in topic',
	'THANKS_PROFILELIST_VIEW'			=> 'List thanks in profile',
	'THANKS_NUMBER'						=> 'Number of thanks in list',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> 'If this option is enabled, thanks info like who have thanked and how many thanks a user has received or given will be displayed when you view a topic. <br/> Please note that the thanks info will be displayed only if users have the right to thank for post in that forum.',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> 'If this option is enabled, complete thanks info including number of thanks and which posts a user received thanks from will be displayed.',
	'THANKS_NUMBER_EXPLAIN'				=> 'The maximum number of thanks displayed in either viewing topic or viewing profile. <br /> <strong> Remember that slow down will be noticed if this value is set over 250. </strong>',
	'ACP_THANKS'						=> 'Thanks for posts',
	'ACP_THANKS_SETTINGS'				=> 'Thanks Settings',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> 'Here you can install values of customisations of function of thanks for messages.',
	'THANKS_REFRESH_MSG'				=> 'Upgrade performance can take a few minutes',
	'THANKS_REFRESH'					=> 'Recount all thanks',
	'REFRESH'							=> 'Refresh',
	'THANKS_REFRESHED_MSG'				=> 'Counts refreshed',
	'ACP_POST'							=> 'Total number of posts',
	'ACP_THANKSPOST'					=> 'Total number of thanked posts',
	'ACP_DELPOST'						=> 'Deleted thanked posts',
	'REMOVE_THANKS'						=> 'Remove thanks',
	'REMOVE_THANKS_EXPLAIN'				=> 'If enabled users can remove thanks',
));
?>