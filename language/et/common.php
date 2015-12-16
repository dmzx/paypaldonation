<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* Estonian translation by phpBBeesti.com - (http://www.phpbbeesti.com/)
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
	'DONATEINDEX'							=> 'Toeta',
	'VIEWING_DONATE'						=> 'Vaatab toetamise lehekülge',
	'ACP_DONATION_MOD'						=> 'Toetuste Laiendus',
	'DONATION_SAVED'						=> 'Toetuste laienduse seaded salvestatud',
	'DONATION_VERSION'						=> 'Versioon',
	'DONATION_CONFIG'						=> 'Seaded',
	'DONATION_SETTINGS'						=> 'Üldised seaded toetuste laiendusele',
	'DONATION_ENABLE'						=> 'Luba toetuste laiendus',
	'DONATION_ENABLE_EXPLAIN'				=> 'Luba või keela toetuste laiendus',
	'DONATION_INDEX_ENABLE'					=> 'Näita toetuste statistikat esilehel',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Luba see, kui soovid et toetuste statistikat näidatakse esilehel',
	'DONATION_INDEX_TOP'					=> 'Näita toetuste statistikat üleval',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Lubades selle, siis näidatakse toetuste statistikat üleval foorumi esilehel',
	'DONATION_INDEX_BOTTOM'					=> 'Näita toetuste statistikat all',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Lubades selle, siis näidatakse toetuste statistikat all foorumi esilehel',
	'DONATION_EMAIL'						=> 'Paypal.com e-postiaadress',
	'DONATION_EMAIL_EXPLAIN'				=> 'Sisesta oma Paypal.com kasutajakonto e-postiaadress',
	'DONATION_STATS_SETTINGS'				=> 'Toetuste statistika seaded',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Luba saadud toetused',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Lubades selle, siis näidatakse saadud toetusi',
	'DONATION_ACHIEVEMENT'					=> 'Toetuste kogusumma',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Toetuste kogusumma, mis on juba praeguseks tehtud',
	'DONATION_GOAL_ENABLE'					=> 'Luba näidata toetuste eesmärki',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Lubades selle, siis näidatakse toetuste kogusumma eesmärki, mis on plaanis saada',
	'DONATION_GOAL'							=> 'Eesmärk saada toetusi',
	'DONATION_GOAL_EXPLAIN'					=> 'Sisesta toetuste kogusumma eesmärk, kui palju on plaanis saada',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'Luba näidata toetuste valuutat',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'Toetuste valuuta peab olema lubatud, kui soovid seda näidata',
	'DONATION_GOAL_CURRENCY'				=> 'Toetuste valuuta',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'Sisesta siia saadud toetuste ja selle eesmärgis näidatav valuuta tähis',
	'DONATION_BODY_SETTINGS'				=> 'Toetuste lehekülje seaded',
	'DONATION_BODY'							=> 'Toetuste leheküljel olev tekst',
	'DONATION_BODY_EXPLAIN'					=> 'Sisesta siia tekst, mida soovid näidata annetuste leheküljel kasutajatele.<br /><br />HTML on lubatud.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Edukalt sooritatud toetuse seaded',
	'DONATION_SUCCESS'						=> 'Edukalt sooritatud toetuse tekst',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Sisesta siia tekst, mida soovid näidata peale edukalt sooritatud toetust suunatud leheküljele<br />See on lehekülg kuhu suunatakse kasutajapärast edukalt sooritatud toetust.<br /><br />HTML on lubatud.',
	'DONATION_CANCEL_SETTINGS'				=> 'Toetusest loobumise seaded',
	'DONATION_CANCEL'						=> 'Toetusest loobumise tekst',
	'DONATION_CANCEL_EXPLAIN'				=> 'Sisesta siia tekst, mida soovid näidata, kui kasutaja loobub toetamisest.<br />See on lehekülg, kui kasutaja vajutab linki loobu toetamisest, ning suunataks tagasi Sinu veebilehe toetamise leheküljele.<br /><br />HTML on lubatud.',
	'DONATION_DISABLED'				=> 'Vabandame, kuid toetuste lehekülg on hetkel kättesaamatu',
	'DONATION_DISABLED_EMAIL'		=> 'Paypali e-postiaadressi konto ei ole seadistatud. Palun teavita sellest foorumi administraatorile.',
	'DONATION_NOT_INSTALLED'		=> 'Toetuste Laienduse andmebaasi sissekanded puuduvad.<br />Palun käivita %spaigaldaja%s, et teha andmebaasis muudatused antud laiendusele.',
	'DONATION_NOT_INSTALLED_USER'	=> 'Toetuste lehekülg ei ole paigaldatud. Palun teavita sellest foorumi administraatorile.',
	'DONATION_TITLE'				=> 'Toeta',
	'DONATION_TITLE_HEAD'			=> 'Tee toetus',
	'WE_HAVE_ACHIEVED'				=> 'Oleme juba saanud',
	'WE_HAVE_ACHIEVED_IN'			=> 'toetusi.',
	'OUR_DONATION_GOAL'				=> 'Meie eesmärk on saada',
	'DONATION_CANCELLED_TITLE'		=> 'Toetamisest loobuti',
	'DONATION_SUCCESSFULL_TITLE'	=> 'Edukalt sooritatud toetus',
	'DONATION_CONTACT_PAYPAL'		=> 'Ühendan Paypal\'iga - Palun oota...',
	'DONATION_BODY_DEFAULT'			=> 'Tehes toetuse antud veebilehele, aitad meil tasuda veebiserveri ja domeeniga seotuid kulutusi.',
	'DONATION_SUCCESS_DEFAULT'		=> 'Täname Sinu toetuse eest! See on vägagi abiks meile, et antud veebilehte hoida internetiavarustes.',
	'DONATION_CANCEL_DEFAULT'		=> 'Loobusid oma toetusest. Sellest, et Sa loobusid oma toetusest pole midagi, kuid palun mõtle selle peale mõne aja möödudes uuesti.',
	'DONATION_ADMIN_DEFAULT'		=> 'Seda teksti on võimalik muuta läbi AJP laienduste vahelehe.',
	'DONATIONS_INDEX'				=> 'Toetused',
	'DONATION_USD'					=> '$ USD',
	'DONATION_EUR'					=> '€ EUR',
	'DONATION_GBP'					=> '£ GBP',
	'DONATION_JPY'					=> '¥ JPY',
	'DONATION_AUD'					=> '$ AUD',
	'DONATION_CAD'					=> '$ CAD',
	'DONATION_HKD'					=> '$ HKD',
));
