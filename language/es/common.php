<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
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
	'DONATEINDEX'							=> 'Donar',
	'VIEWING_DONATE'						=> 'Viendo página de Donaciones',
	'ACP_DONATION_MOD'						=> 'Extensión de Donaciones',
	'DONATION_SAVED'						=> 'Ajustes de donación guardados',
	'DONATION_VERSION'						=> 'Versión',
	'DONATION_CONFIG'						=> 'Configuración',
	'DONATION_SETTINGS'						=> 'Configuración global de Donaciones',
	'DONATION_ENABLE'						=> 'Habilitar Extensión de Donaciones',
	'DONATION_ENABLE_EXPLAIN'				=> 'Habilitar o Deshabilitar la Extensión de Donaciones',
	'DONATION_INDEX_ENABLE'					=> 'Mostrar estadísticas de Donaciones en el índice',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de Donaciones en el índice del foro',
	'DONATION_INDEX_TOP'					=> 'Mostrar estadísticas de Donaciones arriba',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de Donaciones en la parte superior del índice del foro',
	'DONATION_INDEX_BOTTOM'					=> 'Mostrar estadísticas de Donaciones abajo',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Habilitar esto si desea mostrar las estadísticas de Donaciones en la parte inferior del índice del foro',
	'DONATION_EMAIL'						=> 'Dirección de correo electrónico de PayPal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Introduzca su dirección de correo electrónico de PayPal',
	'DONATION_STATS_SETTINGS'				=> 'Configuración de estadísticas de Donaciones',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Habilitar realización de donación',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Habilitar realización de donación, debe estar habilitado si quiere mostrarlo',
	'DONATION_ACHIEVEMENT'					=> 'Realización de Donación',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'La cantidad actual recaudado a través de donaciones',
	'DONATION_GOAL_ENABLE'					=> 'Habilitar meta de donación',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Habilitar meta de donación, debe estar habilitado si quiere mostrarlo',
	'DONATION_GOAL'							=> 'Meta de Donación',
	'DONATION_GOAL_EXPLAIN'					=> 'La cantidad total que quiere recaudar',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'Habilitar moneda de Donación',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'Habilitar moneda de donación, debe estar habilitado si quiere mostrarlo',
	'DONATION_GOAL_CURRENCY'				=> 'Moneda de Donación',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'La moneda de realización de donación y meta de donación',
	'DONATION_BODY_SETTINGS'				=> 'Configuración de página de donación',
	'DONATION_BODY'							=> 'Texto de página de donación',
	'DONATION_BODY_EXPLAIN'					=> 'Introduzca el texto que quiere mostrar en la página de Donaciones.<br /><br />HTML está permitido.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configuración de donación correcta',
	'DONATION_SUCCESS'						=> 'Texto de donación correcta',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Introduzca el texto que desea mostrar en la página de donación correcta<br />Esta es la página a la que los usuarios serán redirigidos después de hacer una donación correctamente.<br /><br />HTML está permitido.',
	'DONATION_CANCEL_SETTINGS'				=> 'Configuración de cancelación de donación',
	'DONATION_CANCEL'						=> 'Texto de cancelación de donación',
	'DONATION_CANCEL_EXPLAIN'				=> 'Introduzca el texto que desea mostrar en la página de cancelación<br />Esta es la página a la que los usuarios serán redirigidos después de cancelar una donación.<br /><br />HTML está permitido.',
	'DONATION_DISABLED'				=> 'Disculpe, la página de Donaciones no esta disponible actualmente',
	'DONATION_DISABLED_EMAIL'		=> 'Dirección de correo electrónico de PayPal no configurada. Por favor, Por favor, contacte con un fundador del foro.',
	'DONATION_NOT_INSTALLED'		=> 'Faltan las entradas de la base de la Extensión de Donaciones.<br />Por favor, ejecute el %sinstalador%s para hacer los cambios en la base de datos de la extensión.',
	'DONATION_NOT_INSTALLED_USER'	=> 'La página de Donaciones no está instalada. Por favor, contacte con un fundador del foro.',
	'DONATION_TITLE'				=> 'Haga una Donación',
	'DONATION_TITLE_HEAD'			=> 'Haga una Donación a',
	'WE_HAVE_ACHIEVED'				=> 'Hemos recibido',
	'WE_HAVE_ACHIEVED_IN'			=> 'en donaciones.',
	'OUR_DONATION_GOAL'				=> 'Nuestra meta es recaudar',
	'DONATION_CANCELLED_TITLE'		=> 'Donación cancelada',
	'DONATION_SUCCESSFULL_TITLE'	=> 'Donación correcta',
	'DONATION_CONTACT_PAYPAL'		=> 'Conectando a PayPal - Por favor, espere...',
	'DONATION_BODY_DEFAULT'			=> 'Por favor, haga una donación para ayudarnos con este sitio y ayudar con los gastos de alojamiento.',
	'DONATION_SUCCESS_DEFAULT'		=> 'Gracias por su donación. Le estamos muy agradecidos.',
	'DONATION_CANCEL_DEFAULT'		=> 'Ha cancelado su donación. No es ningún problema, pero por favor considere una donación en el futuro.',
	'DONATION_ADMIN_DEFAULT'		=> 'Esta texto puede ser cambiado en el PCA, desde la pestaña Extensiones.',
	'DONATIONS_INDEX'				=> 'Donaciones',
	'DONATION_USD'					=> '$ USD',
	'DONATION_EUR'					=> '€ EUR',
	'DONATION_GBP'					=> '£ GBP',
	'DONATION_JPY'					=> '¥ JPY',
	'DONATION_AUD'					=> '$ AUD',
	'DONATION_CAD'					=> '$ CAD',
	'DONATION_HKD'					=> '$ HKD',
));
