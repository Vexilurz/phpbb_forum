<?php
/**
*
* thanks_mod[English]
*
* @package language
* @version $Id: thanks.php,v 123 2009-06-11 10:02:51Палыч $
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'REMOVE_THANKS'				=> 'To remove the thanks you gave: ',
	'THANK_POST'				=> 'To thank for the message of the author: ',
	'THANK_FROM'				=> 'from',
	'THANK_TEXT_1'				=> 'For this message the author ',
	'THANK_TEXT_2'				=> ' has received gratitude ',
	'THANK_TEXT_2pl'			=> ' has received thanks - %d',
	'RECEIVED'					=> 'Have&nbsp;thanks',
	'THANKS'					=> 'time',
	'GIVEN'						=> 'Has&nbsp;thanked',
	'GRATITUDES'				=> 'Gratitudes',
	'FOR_MESSAGE'				=> ' for post',
	'THANKS_LIST'				=> 'View/Close list',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Thanks for the message',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Remove thank',
	'THANKS_PM_MES_GIVE'		=> 'Thanks for the message',
	'THANKS_PM_MES_REMOVE'		=> 'Remove thank',
	'THANKS_INFO_GIVE'			=> 'You have just thanked for the message.',
	'THANKS_INFO_REMOVE'		=> 'You have just removed your thank.',
	'RETURN_POST'				=> 'Return',
	'THANKS_USER'				=> 'List of thanks',
	'THANKS_BACK'				=> 'Return',
	'JUMP_TO_FORUM'				=> 'Jump to forum',
	'JUMP_TO_TOPIC'				=> 'Jump to topic',
	'INCORRECT_THANKS'			=> 'Invalid thanks',
	'REMOVE_THANKS_CONFIRM'		=> 'Are you sure you want to remove your thanks?',
// Install block
	'THANKS_INSTALLED'			=> 'You have successfully <strong>installed</strong> Thanks MOD.',
	'NO_FILES_MODIFIED'			=> 'You haven\'t modified files in according to Thanks MOD installation instruction.',
	'NOT_INSTALLED'				=> 'You have not Thanks MOD installed.',
));
?>