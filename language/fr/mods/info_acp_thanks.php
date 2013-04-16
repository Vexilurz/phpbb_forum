<?php
/**
*
* thanks_mod[French]
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
   'REMOVE_THANKS'            => 'Supprimer le remerciement reçu par ',
   'THANK_POST'            => 'Envoyer un remerciement à ',
   'THANK_FROM'            => 'de',
   'THANK_TEXT_1'            => 'Pour ce message ',
   'THANK_TEXT_2'            => ' a reçu les remerciements de ',
   'THANK_TEXT_2pl'         => ' a reçu plusieurs remerciements - ',
   'RECEIVED'               => 'Remerciements reçus',
   'THANKS'               => 'fois',
   'GIVEN'               => 'Remerciements envoyés',
   'GRATITUDES'            => 'Liste des remerciements',
   'FOR_MESSAGE'            => ' pour le message',
   'THANKS_LIST'            => 'Voir/Fermer la liste',
   'THANKS_PM_SUBJECT_GIVE'   => 'Remerciement reçu',
   'THANKS_PM_SUBJECT_REMOVE'   => 'Remerciement perdu',
   'THANKS_PM_MES_GIVE'      => 'Merci pour ce message',
   'THANKS_PM_MES_REMOVE'      => 'Le remerciement envoyé a été retiré',
   'THANKS_INFO_GIVE'         => 'Le remerciement a été envoyé ',
   'THANKS_INFO_REMOVE'      => 'Le remerciement a été supprimé',
   'RETURN_POST'            => 'Retour',
   'THANKS_USER'            => 'Liste des remerciements',
   'THANKS_BACK'            => 'Retour',
   'JUMP_TO_FORUM'            => 'Aller au forum',
   'JUMP_TO_TOPIC'            => 'Aller au sujet',
   'INCORRECT_THANKS'         => 'Erreur',
   'REMOVE_THANKS_CONFIRM'      => 'Veuillez confirmer la suppression du remerciement',
));
?>