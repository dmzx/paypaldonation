<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'Donate',
	'VIEWING_DONATE'						=> 'Viewing Donation page',
	'DONATION_DISABLED'						=> 'Sorry, the Donation page is currently unavailable',
	'DONATION_DISABLED_EMAIL'				=> 'Paypal email account not configured. Please notify the board Admin.',
	'DONATION_NOT_INSTALLED_USER'			=> 'The Donation page is not installed. Please notify the board Admin.',
	'DONATION_TITLE'						=> 'Make a Donation',
	'DONATION_CANCELLED_TITLE'				=> 'Donation Cancelled',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Donation Successful',
	'DONATION_CONTACT_PAYPAL'				=> 'Connecting to Paypal - Please Wait…',
	'DONATION_BODY_DEFAULT'					=> 'Please make a donation to support this site and help us with the hosting costs.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Thank you for your donation. Its greatly appreciated.',
	'DONATION_CANCEL_DEFAULT'				=> 'You have cancelled your donation. Its no problem, but please consider a donation in the future.',
	'DONATIONS_INDEX'						=> 'Donations',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'We have received %1$s <strong>%2$s</strong> in donations.',
	'DONATION_GOAL_ACHIEVED'				=> 'Our goal is to raise %1$s <strong>%2$s</strong>',
));
