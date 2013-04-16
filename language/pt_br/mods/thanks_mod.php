<?php
/**
*
* thanks_mod[Brazilian Portuguese]
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
	'REMOVE_THANKS'				=> 'Retirar os agradecimentos ao autor: ',
	'THANK_POST'				=> 'Agradecer ao autor pela mensagem: ',
	'THANK_FROM'				=> 'de',
	'THANK_TEXT_1'				=> 'Esta mensagem de ',
	'THANK_TEXT_2'				=> ' recebeu agradecimentos de',
	'THANK_TEXT_2pl'			=> ' foi agradecido - %d',
	'RECEIVED'					=> 'Foi Agradecido',
	'THANKS'					=> 'vez(es)',
	'GIVEN'						=> 'Agradeceu',
	'GRATITUDES'				=> 'Agradecimentos',
	'FOR_MESSAGE'				=> ' pela mensagem',
	'THANKS_LIST'				=> 'Ver/Fechar lista',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Agradecer pela mensagem',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Retirar agradecimento',
	'THANKS_PM_MES_GIVE'		=> 'Agradecer pela mensagem',
	'THANKS_PM_MES_REMOVE'		=> 'Retirar agradecimento',
	'THANKS_INFO_GIVE'			=> 'Voc&ecirc; agradeceu ao autor',
	'THANKS_INFO_REMOVE'		=> 'Voc&ecirc; retirou agradecimentos ao autor',
	'RETURN_POST'				=> 'Reotrnar',
	'THANKS_USER'				=> 'Lista de Agradecimentos',
	'THANKS_BACK'				=> 'Reotrnar',
	'JUMP_TO_FORUM'				=> 'Ir ao f%oacute;rum',
	'JUMP_TO_TOPIC'				=> 'Ir ao t%oacute;pico',
	'INCORRECT_THANKS'			=> 'Dados incorretos para a&ccedil;&atilde;o',
	'REMOVE_THANKS_CONFIRM'		=> 'Voc&ecirc; tem certeza que deseja remover o agradecimento?',
// Install block
	'THANKS_INSTALLED'			=> 'Voc&ecirc; <strong>instalaou</strong> o MOD "Thanks" com sucesso.',
	'NO_FILES_MODIFIED'			=> 'Voc&ecirc; n&atilde;o modificou os arquivos conforme instru&ccedil;&otilde;es do MOD.',
	'NOT_INSTALLED'				=> 'Voc&ecirc; n&atilde;o possui o MOD "Thanks" instalado.',
));
?>