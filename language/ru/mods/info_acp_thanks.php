<?php
/**
*
* mod_thanks [Russian]
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
	'acl_f_thanks' 						=> array('lang' => 'Может благодарить за сообщения', 'cat' => 'misc'),
	'acl_u_viewthanks' 					=> array('lang' => 'Может просматривать лист благодарностей', 'cat' => 'misc'),
	'IMG_THANKPOSTS'					=> 'Поблагодарить за сообщение',
	'IMG_REMOVETHANKS'					=> 'Удалить благодарность',
	'THANKS_POSTLIST_VIEW'				=> 'Список благодарностей в сообщении',
	'THANKS_PROFILELIST_VIEW'			=> 'Списки благодарностей в профиле',
	'THANKS_NUMBER'						=> 'Число благодарностей в списке',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> 'Если включено, в сообщении будет отображаться список пользователей, поблагодаривших автора за сообщение.<br />Учтите, что данная опция будет эффективна, если в форуме разрешено право благодарить за сообщения.',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> 'Если включено, при просмотре профиля пользователя будут отображаться списки выданных и полученных благодарностей',
	'THANKS_NUMBER_EXPLAIN'				=> 'Максимальное число благодарностей, отображаемое в списках.<br /><strong>Внимание! Установление значения более 250 может замедлить работу конференции.</strong>',
	'ACP_THANKS'						=> 'Благодарности',
	'ACP_THANKS_SETTINGS'				=> 'Конфигурация благодарностей за сообщения',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> 'Здесь вы можете установить значения настроек функции благодарностей за сообщения',
	'THANKS_REFRESH_MSG'				=> 'Выполнение обновления может занять некоторое время',
	'THANKS_REFRESH'					=> 'Обновление счётчиков благодарностей',
	'REFRESH'							=> 'Обновить',
	'THANKS_REFRESHED_MSG'				=> 'Cчётчики благодарностей обновлены',
	'ACP_POST'							=> 'Всего сообщений',
	'ACP_THANKSPOST'					=> 'Было записей о сообщениях с благодарностями',
	'ACP_DELPOST'						=> 'Удалено записей о сообщениях',
	'REMOVE_THANKS'						=> 'Удаление благодарностей',
	'REMOVE_THANKS_EXPLAIN'				=> 'Если включено, пользователь может отменить выданную благодарность',
));
?>
