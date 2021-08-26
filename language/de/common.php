<?php
/**
*
* @version $Id$
* @package phpBB Extension - Paypal Donation (deutsch)
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
// ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'DONATEINDEX'							=> 'Spenden',
	'VIEWING_DONATE'						=> 'Betrachtet Spendenseite',
	'DONATION_DISABLED'						=> 'Entschuldige, die Spendenseite ist derzeit nicht verfügbar',
	'DONATION_DISABLED_EMAIL'				=> 'Paypal-Emailkonto wurde nicht konfiguriert. Bitte informiere einen Boardadministrator.',
	'DONATION_NOT_INSTALLED_USER'			=> 'Die Spendenseite ist nicht installiert. Bitte informiere einen Boardadministrator.',
	'DONATION_TITLE'						=> 'Sende eine Spende',
	'DONATION_CANCELLED_TITLE'				=> 'Spende abgebrochen',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Spende erfolgreich',
	'DONATION_CONTACT_PAYPAL'				=> 'Verbinde mit Paypal - Bitte warten…',
	'DONATION_BODY_DEFAULT'					=> 'Bitte spende etwas, um diese Seite zu unterstützen und uns mit den Hostingkosten zu helfen.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Danke für deine Spende. Sie ist sehr willkommen und wir freuen uns darüber.',
	'DONATION_CANCEL_DEFAULT'				=> 'Du hast deine Spende abgebrochen. Das ist kein Problem, aber denke bitte für die Zukunft darüber nach, eine Spende zu senden.',
	'DONATIONS_INDEX'						=> 'Spenden',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'Wir haben %1$s <strong>%2$s</strong> an Spenden erhalten.',
	'DONATION_GOAL_ACHIEVED'				=> 'Unser Ziel ist, %1$s <strong>%2$s</strong> zu erreichen.',
]);
