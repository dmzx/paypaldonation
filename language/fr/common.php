<?php
/**
*
* Paypal Donation extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2017 dmzx <http://www.dmzx-web.net>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'DONATION_DISABLED'						=> 'Nous sommes navrés, la page de donation est actuellement indisponible.',
	'DONATION_DISABLED_EMAIL'				=> 'L’adresse e-mail du compte Paypal n’est pas configurée. Merci de contacter l’administrateur du forum.',
	'DONATION_NOT_INSTALLED_USER'			=> 'La page de donation n’est pas mise en place. Merci de contacter l’administrateur du forum.',
	'DONATION_TITLE'						=> 'Faire un don',
	'DONATION_CANCELLED_TITLE'				=> 'Don annulé',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Don réalisé avec succès',
	'DONATION_CONTACT_PAYPAL'				=> 'Connexion en cours vers le site Web de Paypal - Merci de patienter…',
	'DONATION_BODY_DEFAULT'					=> 'Merci de faire un don pour soutenir les coûts d’hébergement lié à ce site Web.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Tous nos remercions pour votre don. Nous apprécions votre geste.',
	'DONATION_CANCEL_DEFAULT'				=> 'Votre don a bien été annulé. Ce n’est en aucun cas un problème, nous vous invitons à faire un don à l’avenir.',
	'DONATIONS_INDEX'						=> 'Donations',
	'DONATION_USD'							=> '$ dollar américain',
	'DONATION_EUR'							=> '€ euro',
	'DONATION_GBP'							=> '£ livre sterling',
	'DONATION_JPY'							=> '¥ yen',
	'DONATION_AUD'							=> '$ dollar australien',
	'DONATION_CAD'							=> '$ dollar canadien',
	'DONATION_HKD'							=> '$ dollar de Hong Kong',
	'DONATION_ACHIEVED'						=> 'Nous avons reçu <strong>%2$s</strong> %1$s en dons.',
	'DONATION_GOAL_ACHIEVED'				=> 'Notre objectif est d’atteindre <strong>%2$s</strong> %1$s.',
));
