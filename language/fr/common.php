<?php
/**
*
* Paypal Donation extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'Donation',
	'VIEWING_DONATE'						=> 'Consulte la page de donation',
	'ACP_DONATION_MOD'						=> 'Extension Paypal Donation',
	'DONATION_SAVED'						=> 'Paramètres de l’extension Paypal Donation sauvegardés',
	'DONATION_VERSION'						=> 'Version',
	'DONATION_CONFIG'						=> 'Configuration',
	'DONATION_SETTINGS'						=> 'Configuration générale de l’extension Paypal Donation',
	'DONATION_ENABLE'						=> 'Activer l’extension Paypal Donation',
	'DONATION_ENABLE_EXPLAIN'				=> 'Permet d’activer ou de désactiver l’extension Paypal Donation.',
	'DONATION_INDEX_ENABLE'					=> 'Afficher les statistiques sur l’index',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Permet d’afficher les statistiques de l’extension Paypal Donation sur la page de l’index du forum.',
	'DONATION_INDEX_TOP'					=> 'Afficher les statistiques en haut de l’index',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Permet d’afficher les statistiques en haut de la page de l’index du forum.',
	'DONATION_INDEX_BOTTOM'					=> 'Afficher les statistiques en bas de l’index',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Permet d’afficher les statistiques en bas de la page de l’index du forum.',
	'DONATION_EMAIL'						=> 'Adresse e-mail du compte Paypal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Permet de saisir l’adresse e-mail du compte Paypal à utiliser.',
	'DONATION_STATS_SETTINGS'				=> 'Configuration des statistiques de l’extension Paypal Donation',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Afficher le montant des dons',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Permet d’afficher le montant des dons.',
	'DONATION_ACHIEVEMENT'					=> 'Montant des dons',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Montant actuellement reçu grâce aux dons.',
	'DONATION_GOAL_ENABLE'					=> 'Afficher l’objectif des dons',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Permet d’afficher l’objectif à atteindre grâce aux dons.',
	'DONATION_GOAL'							=> 'Objectif des dons',
	'DONATION_GOAL_EXPLAIN'					=> 'Montant à réunir grâce aux dons.',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'Afficher la devise des dons',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'Permet d’afficher la devise des dons.',
	'DONATION_GOAL_CURRENCY'				=> 'Devise des dons',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'Devise utilisée pour le montant et l’objectif des dons.',
	'DONATION_BODY_SETTINGS'				=> 'Configuration de la page de donation',
	'DONATION_BODY'							=> 'Texte de la page de donation',
	'DONATION_BODY_EXPLAIN'					=> 'Permet de saisir le texte à afficher sur la page de donation.<br /><br />Le language HTML est autorisé.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configuration de la page du succès d’un don',
	'DONATION_SUCCESS'						=> 'Texte du succès d’un don',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Permet de saisir le texte à afficher sur la page de réussite d’un don.<br />Ceci est la page vers laquelle les utilisateurs sont redirigés lorsqu’ils ont réalisé un don.<br /><br />Le language HTML est autorisé.',
	'DONATION_CANCEL_SETTINGS'				=> 'Configuration de la page d’annulation d’un don',
	'DONATION_CANCEL'						=> 'Texte d’annulation d’un don',
	'DONATION_CANCEL_EXPLAIN'				=> 'Permet de saisir le texte à afficher sur la page d’annulation d’un don.<br />Ceci est la page vers laquelle les utilisateurs sont redirigés lorsqu’ils ont annulé un don.<br /><br />Le language HTML est autorisé.',
	'DONATION_DISABLED'				=> 'Nous sommes navrés, la page de donation est indisponible.',
	'DONATION_DISABLED_EMAIL'		=> 'L’e-mail du compte Paypal n’est pas configurée. Veuillez le communiquer au fondateur du forum.',
	'DONATION_NOT_INSTALLED'		=> 'Des informations dans la base de données de l’extension Paypal Donation sont manquantes.<br />Veuillez exécuter l’%sinstalleur%s pour réaliser les changements nécessaires dans la base de données.',
	'DONATION_NOT_INSTALLED_USER'	=> 'La page de donation n’est pas mise en place. Veuillez le communiquer au fondateur du forum.',
	'DONATION_TITLE'				=> 'Faire un don',
	'DONATION_TITLE_HEAD'			=> 'Faire un don à',
	'WE_HAVE_ACHIEVED'				=> 'Nous avons reçu',
	'WE_HAVE_ACHIEVED_IN'			=> 'en dons.',
	'OUR_DONATION_GOAL'				=> 'Notre objectif est d’atteindre',
	'DONATION_CANCELLED_TITLE'		=> 'Don annulé',
	'DONATION_SUCCESSFULL_TITLE'	=> 'Don réalisé',
	'DONATION_CONTACT_PAYPAL'		=> 'Connexion vers Paypal - Veuillez patienter…',
	'DONATION_BODY_DEFAULT'			=> 'Merci de faire un don pour soutenir ce site et nous aider avec les coûts d’hébergement.',
	'DONATION_SUCCESS_DEFAULT'		=> 'Nous vous remercions pour votre don. Nous apprécions votre geste.',
	'DONATION_CANCEL_DEFAULT'		=> 'Vous avez annulé votre don. Ce n’est en aucun cas un problème, nous vous invitons à faire un don à l’avenir.',
	'DONATION_ADMIN_DEFAULT'		=> 'Ce texte peut être modifié depuis le panneau d’administration dans l’onglet « EXTENSIONS ».',
	'DONATIONS_INDEX'				=> 'Donations',
	'DONATION_USD'					=> '$ dollar américain',
	'DONATION_EUR'					=> '€ euro',
	'DONATION_GBP'					=> '£ livre sterling',
	'DONATION_JPY'					=> '¥ yen',
	'DONATION_AUD'					=> '$ dollar australien',
	'DONATION_CAD'					=> '$ dollar canadien',
	'DONATION_HKD'					=> '$ dollar de Hong Kong',
));
