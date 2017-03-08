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
	'DONATION_SAVED'						=> 'Donation settings saved',
	'DONATION_VERSION'						=> 'Version',
	'DONATION_SETTINGS'						=> 'Global Donation Config',
	'DONATION_ENABLE'						=> 'Enable Donation extension',
	'DONATION_ENABLE_EXPLAIN'				=> 'Enable or disable the Donation extension.',
	'DONATION_INDEX_ENABLE'					=> 'Display Donation Stats on index',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Enable this if you want to display the donation stats on index.',
	'DONATION_INDEX_TOP'					=> 'Display Donation Stats Top',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Enable this if you want to display the donation stats at the top of the forum index.',
	'DONATION_INDEX_BOTTOM'					=> 'Display Donation Stats Bottom',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Enable this if you want to display the donation stats at the bottom of the forum index.',
	'DONATION_EMAIL'						=> 'Paypal email address',
	'DONATION_EMAIL_EXPLAIN'				=> 'Enter your Paypal email address.',
	'DONATION_STATS_SETTINGS'				=> 'Stats Donation Config',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Enable Donation Achievement',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Enable Donation Achievement must be enabled if you want to display it.',
	'DONATION_ACHIEVEMENT'					=> 'Donation Achievement',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'The current amount raised through donations.',
	'DONATION_GOAL_ENABLE'					=> 'Enable Donation Goal',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Enable Donation Goal must be enabled if you want to display it.',
	'DONATION_GOAL'							=> 'Donation Goal',
	'DONATION_GOAL_EXPLAIN'					=> 'The amount you want to raise in total.',
	'DONATION_GOAL_CURRENCY'				=> 'Donation Currency',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'The currency of Donation Achievement and Donation Goal.',
	'DONATION_BODY_SETTINGS'				=> 'Donation Page Config',
	'DONATION_BODY'							=> 'Donation page text',
	'DONATION_BODY_EXPLAIN'					=> 'Enter the text you want displayed on the Donation page.<br /><br />HTML is allowed.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Donation Success Config',
	'DONATION_SUCCESS'						=> 'Donation success text',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Enter the text you want displayed on the success page<br />This is the page users are redirected to after a successful donation.<br /><br />HTML is allowed.',
	'DONATION_CANCEL_SETTINGS'				=> 'Donation Cancel Config',
	'DONATION_CANCEL'						=> 'Donation cancel text',
	'DONATION_CANCEL_EXPLAIN'				=> 'Enter the text you want displayed on the cancel page<br />This is the page users are redirected to after they cancel a donation.<br /><br />HTML is allowed.',
));
