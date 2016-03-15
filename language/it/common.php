<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donazione
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'Donate',
	'VIEWING_DONATE'						=> 'Vedi la pagina di Donazione',
	'ACP_DONATION_MOD'						=> 'Donazione Estensione',
	'DONATION_SAVED'						=> 'Donazione settaggio salvato',
	'DONATION_VERSION'						=> 'Versione',
	'DONATION_CONFIG'						=> 'Configurazione',
	'DONATION_SETTINGS'						=> 'Donazione Configurazione Globale',
	'DONATION_ENABLE'						=> 'Abilita l\'estensione Donazione',
	'DONATION_ENABLE_EXPLAIN'				=> 'Abilita o disabilita l\'estensione Donazione',
	'DONATION_INDEX_ENABLE'					=> 'Visualizza le statistiche della donazione nella pagina principale',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Abilitalo se vuoi visualizzare le statistiche di donazione nella pagina principale',
	'DONATION_INDEX_TOP'					=> 'Visualizza statistiche di Donazione in alto',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Abilitalo se vuoi visuallizzare le statistiche di donazione in alto nella pagina principale del forum',
	'DONATION_INDEX_BOTTOM'					=> 'Visualizza le statistiche di Donazione in basso',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Abilitalo se vuoi visuallizzare le statistiche di donazione in basso nella pagina principale del forum',
	'DONATION_EMAIL'						=> 'Paypal indirizzo email',
	'DONATION_EMAIL_EXPLAIN'				=> 'Inserisci il tuo indirizzo email Paypal',
	'DONATION_STATS_SETTINGS'				=> 'Configurazione Statistiche di Donazione',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Abilita il risultato della Donazione',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Abilita il risultato della Donazione se vuoi che sia visualizzato',
	'DONATION_ACHIEVEMENT'					=> 'Risultato Donazione',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'L\'attuale importo raccolto attraverso le donazioni',
	'DONATION_GOAL_ENABLE'					=> 'Abilita obiettivo Donazione',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Abilita l\'obiettivo di donazione se vuoi che sia visualizzato',
	'DONATION_GOAL'							=> 'Obiettivo Donazione',
	'DONATION_GOAL_EXPLAIN'					=> 'L\'importo totale che si desidera raggiungere',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'Abilita la donazione attuale',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'Abilita la Donazione se desideri che sia visualizzata',
	'DONATION_GOAL_CURRENCY'				=> 'Donazione Attuale',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'La stato attuale del Risultato della Donazione e l\'obiettivo della Donazione',
	'DONATION_BODY_SETTINGS'				=> 'Donazione Pagina di Configurazione',
	'DONATION_BODY'							=> 'Donazione pagina testuale',
	'DONATION_BODY_EXPLAIN'					=> 'Inserisci il testo che vuoi visualizzare nella pagina di Donazione.<br /><br />HTML è permesso.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configurazione della Donazione avvenuta con Successo',
	'DONATION_SUCCESS'						=> 'Testo della Donazione salvato con successo',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Inserisci il testo che vuoi visualizzare nella pagina del salvataggio avvenuto con successo<br />Questa è la pagina dove l\'utente viene redirezionato dopo la donazione sia avvenuta cl successo.<br /><br />HTML è permesso.',
	'DONATION_CANCEL_SETTINGS'				=> 'Cancella la Configurazione della Donazione',
	'DONATION_CANCEL'						=> 'Cancella il testo della Donazione',
	'DONATION_CANCEL_EXPLAIN'				=> 'Inserisci il testo che vuoi visualizzare nella pagina di cancellazione<br />In questa pagina viene redireazionato l\'utente dopo che ha cancellato una donazione.<br /><br />HTML è permesso.',
	'DONATION_DISABLED'				=> 'Mi dispiace, la pagina di Donazione attualmente non è disponibile',
	'DONATION_DISABLED_EMAIL'		=> 'L\'account email Paypal non è configurato. Si prega di avvisare il founder contattandolo.',
	'DONATION_NOT_INSTALLED'		=> 'Alcune voci nel database dell\'estensione Donazione sono assenti.<br />Per favore esegui il %sinstaller%s per apportare le modifiche al database cambiandolo per modificarlo.',
	'DONATION_NOT_INSTALLED_USER'	=> 'La pagina di Donazione non è installata. Si prega di avvisare il founder contattandolo.',
	'DONATION_TITLE'				=> 'Fai una Donazione',
	'DONATION_TITLE_HEAD'			=> 'Fai una Donazione a',
	'WE_HAVE_ACHIEVED'				=> 'Abbiamo ricevuto',
	'WE_HAVE_ACHIEVED_IN'			=> 'in donazioni.',
	'OUR_DONATION_GOAL'				=> 'Il nostro obiettivo è quello di raccogliere',
	'DONATION_CANCELLED_TITLE'		=> 'Donazione Cancellata',
	'DONATION_SUCCESSFULL_TITLE'	=> 'Donazione avvenuta con successo',
	'DONATION_CONTACT_PAYPAL'		=> 'Connessione a Paypal - Attendi per favore...',
	'DONATION_BODY_DEFAULT'			=> 'Si prega di fare una donazione per supportare questo sito e aiutarci con i costi del dominio',
	'DONATION_SUCCESS_DEFAULT'		=> 'Grazie per la tua donazione. E\' stato molto apprezzato.',
	'DONATION_CANCEL_DEFAULT'		=> 'Hai cancellato la tua donazione. Non è un problema, ma per favore considera una donazione in futuro.',
	'DONATION_ADMIN_DEFAULT'		=> 'Questo testo può essere modificato in ACP sotto la scheda Estensioni.',
	'DONATIONS_INDEX'				=> 'Donazione',
	'DONATION_USD'					=> '$ USD',
	'DONATION_EUR'					=> '€ EUR',
	'DONATION_GBP'					=> '£ GBP',
	'DONATION_JPY'					=> '¥ JPY',
	'DONATION_AUD'					=> '$ AUD',
	'DONATION_CAD'					=> '$ CAD',
	'DONATION_HKD'					=> '$ HKD',
));
