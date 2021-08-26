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
	'DONATEINDEX'							=> 'Donar',
	'VIEWING_DONATE'						=> 'Viendo página de donaciones',
	'DONATION_DISABLED'						=> 'Perdón, la página Donación no está disponible actualmente.',
	'DONATION_DISABLED_EMAIL'				=> 'La cuenta de correo electrónico de PayPal no está configurada. Por favor, notifique al Administrador del foro.',
	'DONATION_NOT_INSTALLED_USER'			=> 'La página de Donación no está instalada. Por favor, notifique al Administrador del foro.',
	'DONATION_TITLE'						=> 'Hacer una donación',
	'DONATION_CANCELLED_TITLE'				=> 'Donación cancelada',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Donación realizada correctamente',
	'DONATION_CONTACT_PAYPAL'				=> 'Conectando con PayPal - Por favor, espere…',
	'DONATION_BODY_DEFAULT'					=> 'Haga una donación para ayudar a este sitio, y ayúdenos con los gastos del alojamiento.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Gracias por su donación. Estamos muy agradecidos.',
	'DONATION_CANCEL_DEFAULT'				=> 'Ha cancelado su donación. No hay problema, pero por favor, considere hacer una donación en el futuro.',
	'DONATIONS_INDEX'						=> 'Donaciones',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'Hemos recibido %1$s <strong>%2$s</strong> en donaciones.',
	'DONATION_GOAL_ACHIEVED'				=> 'Nuestro objetivo es %1$s <strong>%2$s</strong>',
]);
