<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Spanish Translation - ThE KuKa (http://www.phpbb-es.com)
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
	'DONATION_SAVED'						=> 'Ajustes de Donación guardados',
	'DONATION_VERSION'						=> 'Versión',
	'DONATION_SETTINGS'						=> 'Configuración global de Donación',
	'DONATION_ENABLE'						=> 'Habilitar extensión de Donación',
	'DONATION_ENABLE_EXPLAIN'				=> 'Habilitar o Deshabilitar la extensión de Donación.',
	'DONATION_INDEX_ENABLE'					=> 'Mostrar estadísticas de donaciones en el índice',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de donaciones en el índice.',
	'DONATION_INDEX_TOP'					=> 'Mostrar estadísticas de donaciones en la parte superior',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de donaciones en la parte superior del índice del foro.',
	'DONATION_INDEX_BOTTOM'					=> 'Mostrar estadísticas de donaciones en la parte inferior',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de donaciones en la parte inferior del índice del foro.',
	'DONATION_EMAIL'						=> 'Correo electrónico de PayPal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Introduzca su correo electrónico de PayPal.',
	'DONATION_STATS_SETTINGS'				=> 'Configuración de las estadísticas de donaciones',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Habilitar el Logro de Donación',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Habilitar el Logro de Donación debe estar habilitado si desea mostrarlo.',
	'DONATION_ACHIEVEMENT'					=> 'Logro de Donación',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'La cantidad actual recaudada a través de donaciones.',
	'DONATION_GOAL_ENABLE'					=> 'Habilitar Objetivo de Donación',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Habilitar el Objetivo de Donación debe estar habilitado si desea mostrarlo.',
	'DONATION_GOAL'							=> 'Objetivo de Donación',
	'DONATION_GOAL_EXPLAIN'					=> 'La cantidad que desea aumentar en total.',
	'DONATION_GOAL_CURRENCY'				=> 'Moneda de donación',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'La moneda del Logro de Donación y Objetivo de Donacón.',
	'DONATION_BODY_SETTINGS'				=> 'Página de cofiguración de Donación',
	'DONATION_BODY'							=> 'Texto de la página de Donación',
	'DONATION_BODY_EXPLAIN'					=> 'Introduzca el texto que desea mostrar en la página de Donación.<br /><br />Se permite HTML.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Donation Success Config',
	'DONATION_SUCCESS'						=> 'Donation success text',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Introduzca el texto que desea mostrar en la página de donación realizada<br />Esta es la página a la que los usuarios son redirigidos después de una donación correcta.<br /><br />Se permite HTML.',
	'DONATION_CANCEL_SETTINGS'				=> 'Donation Cancel Config',
	'DONATION_CANCEL'						=> 'Donation cancel text',
	'DONATION_CANCEL_EXPLAIN'				=> 'Introduzca el texto que desea mostrar en la página de donación cancelada<br />Esta es la página a la que los usuarios son redirigidos después de cancelar una donación.<br /><br />Se permite HTML.',
));
