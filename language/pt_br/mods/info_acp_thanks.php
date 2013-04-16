<?php
/**
*
* mod_thanks [Brazilian Portuguese]
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
	'acl_f_thanks' 						=> array('lang' => 'Pode agradecer por mensagens', 'cat' => 'misc'),
	'acl_u_viewthanks' 					=> array('lang' => 'Pode ver a lista de agradecimentos', 'cat' => 'misc'),
	'IMG_THANKPOSTS'					=> 'Agradecimentos pelas mensagens',
	'IMG_REMOVETHANKS'					=> 'Deletar agradecimento',
	'THANKS_POSTLIST_VIEW'				=> 'A lista de agradecimentos na mensagem',
	'THANKS_PROFILELIST_VIEW'			=> 'Listas de agradecimentos no profile',
	'THANKS_NUMBER'						=> 'M&aacute;ximo de agradecimentos na lista',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> 'Se habilitado, a mensagem exibir&aacute; a lista de usu&aacute;rios que agradeceram ao autor pela mensagem. <br /> Note que esta op&ccedil;&atilde;o somente será efetiva se o f&oacute;um conceder permiss&atilde;o para se fazer agradecimentos pela mensagem.',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> 'Se habilitado, quando visualizando um profile de usu&aacute;rio ser&atilde;o exibidas listas de agradecimentos concedidos e recebidos.',
	'THANKS_NUMBER_EXPLAIN'				=> 'M&aacute;ximo de agradecimentos a serem listados. <br /> <strong> Aten&ccedil;&atilde;o! Especificar um valor maior que 250 pode tornar lenta a carga das p&aacute;ginas. </strong>',
	'ACP_THANKS'						=> 'Agradecimentos',
	'ACP_THANKS_SETTINGS'				=> 'Configura&ccedil;&otilde;es de Agradecimentos',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> 'Aqui voc&ecirc; pode configurar o recurso de Agradecimentos.',
	'THANKS_REFRESH_MSG'				=> 'Aguarde! Isso pode levar algum tempo.',
	'THANKS_REFRESH'					=> 'Atualizar contadores de Agradecimentos.',
	'REFRESH'							=> 'Atualizar',
	'MCP_THANKS_REFRESHED'				=> 'Contadores de Agradecimentos atualizados.',
	'ACP_POST'							=> 'Total de postagens',
	'ACP_THANKSPOST'					=> 'Registros de agradecimentos concedidos',
	'ACP_DELPOST'						=> 'Registros de agradecimentos retirados (removidos)',
	'REMOVE_THANKS'						=> 'Removendo agradecimentos',
	'REMOVE_THANKS_EXPLAIN'				=> 'Se habilitado, o usu&aacute;rio poder&aacute; retirar (remover) os agradecimentos concedidos.',
));
?>
