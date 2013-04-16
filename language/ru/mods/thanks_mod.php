<?php
/**
*
* thanks_mod[Russian]
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
	'REMOVE_THANKS'				=> 'Отменить благодарность автору: ',
	'THANK_POST'				=> 'Поблагодарить за сообщение автора: ',
	'THANK_FROM'				=> 'от',
	'THANK_TEXT_1'				=> 'За это сообщение автора ',
	'THANK_TEXT_2'				=> ' поблагодарил',
	'THANK_TEXT_2pl'			=> ' поблагодарили - %d',
	'RECEIVED'					=> 'Поблагодарили',
	'THANKS'					=> 'раз.',
	'GIVEN'						=> 'Благодарил&nbsp;(а)',
	'GRATITUDES'				=> 'Благодарности',
	'FOR_MESSAGE'				=> ' за сообщение',
	'THANKS_LIST'				=> 'Показать/Скрыть список',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Благодарность за сообщение',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Благодарность за сообщение отменена',
	'THANKS_PM_MES_GIVE'		=> 'Благодарю за сообщение',
	'THANKS_PM_MES_REMOVE'		=> 'Отменяю благодарность за сообщение',
	'THANKS_INFO_GIVE'			=> 'Вы поблагодарили автора сообщения',
	'THANKS_INFO_REMOVE'		=> 'Вы отменили благодарность автору',
	'RETURN_POST'				=> 'Вернуться к сообщению',
	'THANKS_USER'				=> 'Лист благодарностей',
	'THANKS_BACK'				=> 'Вернуться к листу благодарностей',
	'JUMP_TO_FORUM'				=> 'Перейти в форум',
	'JUMP_TO_TOPIC'				=> 'Перейти в тему',
	'INCORRECT_THANKS'			=> 'Некорректные параметры запрошенного действия',
	'REMOVE_THANKS_CONFIRM'		=> 'Вы действительно хотите удалить благодарность?',
// Блок установки
	'THANKS_INSTALLED'			=> 'Thanks MOD успешно <strong>установлен</strong>.',
	'NO_FILES_MODIFIED'			=> 'Вы не внесли изменения в файлы в соответствии с инструкцией по установке мода.',
	'NOT_INSTALLED'				=> 'На вашей конференции не был установлен данный Thanks MOD.',
));
?>