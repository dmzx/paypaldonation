<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'DONATEINDEX'							=> 'Doneer',
	'VIEWING_DONATE'						=> 'Bekijkt donatie pagina',
	'DONATION_DISABLED'						=> 'Sorry, de donatie pagina is momenteel niet beschikbaar',
	'DONATION_DISABLED_EMAIL'				=> 'Paypal e-mailaccount niet geconfigureerd. Gelieve de forum beheerder te contacteren.',
	'DONATION_NOT_INSTALLED_USER'			=> 'De donatie pagina is niet ge&iuml;nstalleerd. Gelieve de forum beheerder te contacteren.',
	'DONATION_TITLE'						=> 'Doe een donatie',
	'DONATION_CANCELLED_TITLE'				=> 'Donatie geannuleerd',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Donatie succesvol',
	'DONATION_CONTACT_PAYPAL'				=> 'Verbinden met Paypal - Even geduld…',
	'DONATION_BODY_DEFAULT'					=> 'Doe aub een donatie aan deze site om ons te steunen en ons te helpen met de server kosten.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Bedankt voor de donatie, deze is zeer gewaardeerd.',
	'DONATION_CANCEL_DEFAULT'				=> 'Je hebt je donatie geannuleerd. Dat is geen enkel probleem, maar overweeg aub een donatie in de toekomst.',
	'DONATIONS_INDEX'						=> 'Donaties',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'We hebben momenteel al %1$s <strong>%2$s</strong> aan donaties ontvangen.',
	'DONATION_GOAL_ACHIEVED'				=> 'Ons doel is om %1$s <strong>%2$s</strong> bij elkaar te halen.',
]);
