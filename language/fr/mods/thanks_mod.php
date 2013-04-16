<?php
/**
*
* mod_thanks [French]
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
   'acl_f_thanks'                   => array('lang' => 'Peut remercier les membres pour leurs messages', 'cat' => 'misc'),
   'acl_u_viewthanks'                => array('lang' => 'Peut voir la liste des remerciements', 'cat' => 'misc'),
   'IMG_THANKPOSTS'               => 'Laisser un remerciement',
   'IMG_REMOVETHANKS'               => 'Supprimer le remerciement',
   'THANKS_POSTLIST_VIEW'            => 'Afficher la liste des remerciements dans les messages',
   'THANKS_PROFILELIST_VIEW'         => 'Afficher la liste des remerciements dans le profil',
   'THANKS_NUMBER'                  => 'Affichage de la liste des remerciements',
   'THANKS_POSTLIST_VIEW_EXPLAIN'      => 'Si activé la liste des membres qui ont donné un remerciement sera affichée dans chaque messages. <br/> Concerne uniquement les forums ou la permission de remercier est autorisée.',
   'THANKS_PROFILELIST_VIEW_EXPLAIN'   => 'Si activé la liste des remerciements donnés et reçus un sera affichée dans chaque profil membre.',
   'THANKS_NUMBER_EXPLAIN'            => 'Le nombre maximum de remerciements affichés dans la liste. <br /> <strong> Attention! Une valeur supérieure à 250 peut ralentir le forum. </strong>',
   'ACP_THANKS'                  => 'Remerciements',
   'ACP_THANKS_SETTINGS'            => 'Paramètres des remerciements',
   'ACP_THANKS_SETTINGS_EXPLAIN'      => 'Ici vous pouvez personnalisez les options des remerciements',
   'THANKS_REFRESH_MSG'            => 'L’actualisation peut prendre un court instant',
   'THANKS_REFRESH'               => 'Mise à jour du compteur des remerciements',
   'REFRESH'                     => 'Actualiser',
   'MCP_THANKS_REFRESHED'            => 'Compteurs mis à jour',
   'ACP_POST'                     => 'Tous les messages',
'ACP_THANKSPOST'               => 'Messages ayant été remerciés',
   'ACP_DELPOST'                  => 'Dont messages remerciés supprimés',
   'REMOVE_THANKS'                  => 'Autoriser la suppresion des remerciement',
   'REMOVE_THANKS_EXPLAIN'            => 'Si activé les membres peuvent supprimer les remerciements envoyés',
));
?>