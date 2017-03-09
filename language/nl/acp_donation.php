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
	'DONATION_SAVED'						=> 'Donatie instellingen opgeslagen',
	'DONATION_VERSION'						=> 'Versie',
	'DONATION_SETTINGS'						=> 'Globale Donatie Configuratie',
	'DONATION_ENABLE'						=> 'Schakel donatie extensie in',
	'DONATION_ENABLE_EXPLAIN'				=> 'Schakel de donatie extensie in of uit.',
	'DONATION_INDEX_ENABLE'					=> 'Toon donatie statistieken op de index',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Schakel dit in indien je de donatie statistieken op de index wenst weer te geven.',
	'DONATION_INDEX_TOP'					=> 'Toon donatie statistieken bovenaan',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Schakel dit in als je donatie statistieken bovenaan de forum index wenst te tonen.',
	'DONATION_INDEX_BOTTOM'					=> 'Toon donatie statistieken onderaan',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Schakel dit in als je donatie statistieken onderaan de forum index wenst te tonen.',
	'DONATION_EMAIL'						=> 'Paypal e-mail adres',
	'DONATION_EMAIL_EXPLAIN'				=> 'Plaatst hier je Paypal e-mail adres.',
	'DONATION_STATS_SETTINGS'				=> 'Statistieken donatie instellingen',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Schakel opgehaalde donatie in',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Opgehaalde donaties moet ingeschakeld zijn als je dit wenst weer te geven.',
	'DONATION_ACHIEVEMENT'					=> 'Opgehaalde donaties',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Het huidig bedrag van de opgehaalde donaties.',
	'DONATION_GOAL_ENABLE'					=> 'Schakel donatie doel in',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Schakel donatie doel in moet ingeschakeld zijn als je dit wenst weer te geven.',
	'DONATION_GOAL'							=> 'Donatie doel',
	'DONATION_GOAL_EXPLAIN'					=> 'Het totale bedrag dat je wenst te bekomen.',
	'DONATION_GOAL_CURRENCY'				=> 'Donatie Munt',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'De munteenheid van Opgehaalde Donaties en Donatie Doel.',
	'DONATION_BODY_SETTINGS'				=> 'Donatie pagina configuratie',
	'DONATION_BODY'							=> 'Donatie pagina tekst',
	'DONATION_BODY_EXPLAIN'					=> 'Plaats hier te tekst die je wenst te tonen op de donatie pagina.<br /><br />HTML is toegestaan.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Donatie succesvol configuratie',
	'DONATION_SUCCESS'						=> 'Donatie succesvol tekst',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Plaats hier te tekst die je wenst te tonen op de donatie pagina<br />Dit is de pagina waarnaar gebruikers doorgestuurd worden na een succesvolle donatie.<br /><br />HTML is toegestaan.',
	'DONATION_CANCEL_SETTINGS'				=> 'Donatie geannuleerd configuratie',
	'DONATION_CANCEL'						=> 'Donatie annulering tekst',
	'DONATION_CANCEL_EXPLAIN'				=> 'Plaats hier te tekst die je wenst te tonen op de donatie pagina.<br />Dit is de pagina waarnaar gebruikers doorgestuurd worden na een geannuleerde donatie.<br /><br />HTML is toegestaan.',
));
