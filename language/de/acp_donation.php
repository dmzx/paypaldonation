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
	'DONATION_SAVED'						=> 'Spendeneinstellungen gespeichert',
	'DONATION_VERSION'						=> 'Version',
	'DONATION_SETTINGS'						=> 'Globale Spendenkonfiguration',
	'DONATION_ENABLE'						=> 'Aktiviere Spenden-Extension',
	'DONATION_ENABLE_EXPLAIN'				=> 'Aktiviere oder deaktiviere die Spenden-Erweiterung.',
	'DONATION_INDEX_ENABLE'					=> 'Zeige Spendenstatistik auf der Indexseite',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Aktiviere dies, wenn du die Spendenstatistik auf der Indexseite anzeigen möchtest.',
	'DONATION_INDEX_TOP'					=> 'Zeige Spendenstatistik oben an',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Aktiviere dies, wenn du die Spendenstatistik oben auf der Indexseite anzeigen möchtest.',
	'DONATION_INDEX_BOTTOM'					=> 'Zeige Spendenstatistik unten an',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Aktiviere dies, wenn du die Spendenstatistik unten auf der Indexseite anzeigen möchtest.',
	'DONATION_EMAIL'						=> 'Paypal-Emailadresse',
	'DONATION_EMAIL_EXPLAIN'				=> 'Gib die Emailadresse ein, die du für Paypal benutzt.',
	'DONATION_STATS_SETTINGS'				=> 'Konfiguration Spendenstatistik',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Aktiviere Spendenleistung',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> '„Aktiviere Spendenleistung“ muss aktiviert sein, wenn du die Spendenleistung anzeigen willst.',
	'DONATION_ACHIEVEMENT'					=> 'Spendenleistung',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Der aktuell durch Spenden erreichte Betrag.',
	'DONATION_GOAL_ENABLE'					=> 'Aktiviere Spendenziel',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> '„Aktiviere Spendenziel“ muss aktiviert sein, wenn du das Spendenziel anzeigen möchtest.',
	'DONATION_GOAL'							=> 'Spendenziel',
	'DONATION_GOAL_EXPLAIN'					=> 'Der Betrag, den du insgesamt erreichen möchtest.',
	'DONATION_GOAL_CURRENCY'				=> 'Spendenwährung',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'Die Währung für die Spendenleistung und das Spendenziel.',
	'DONATION_BODY_SETTINGS'				=> 'Konfiguration Spendenseite',
	'DONATION_BODY'							=> 'Text Spendenseite',
	'DONATION_BODY_EXPLAIN'					=> 'Gib den Text ein, den du auf der Spendenseite anzeigen möchtest.<br><br>HTML ist erlaubt.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Spendenerfolgs-Konfiguration',
	'DONATION_SUCCESS'						=> 'Spendenerfolgs-Text',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Gib hier den Text ein, den du auf der Erfolgsseite anzeigen möchtest.<br>Dies ist die Seite, wohin die Benutzer nach einer erfolgreichen Spende weitergeleitet werden.<br><br>HTML ist erlaubt.',
	'DONATION_CANCEL_SETTINGS'				=> 'Spendenabbruchs-Konfiguration',
	'DONATION_CANCEL'						=> 'Spendenabbruchs-Text',
	'DONATION_CANCEL_EXPLAIN'				=> 'Gib hier den Text ein, den du auf der Abbruchseite anzeigen möchtest.<br>Dies ist die Seite, wohin die Benutzer weitergeleitet werden, wenn sie einen Spendenvorgang abbrechen.<br><br>HTML ist erlaubt.',
]);
