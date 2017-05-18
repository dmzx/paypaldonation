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
	'DONATEINDEX'							=> 'Doações',
	'VIEWING_DONATE'						=> 'Vendo a página de doações',
	'DONATION_DISABLED'						=> 'Desculpe, a página de doações está temporariamente indisponível',
	'DONATION_DISABLED_EMAIL'				=> 'A conta do Paypal não está configurada. Avise o administrador do fórum.',
	'DONATION_NOT_INSTALLED_USER'			=> 'A página de doações não está configurada. Avise o administrador do fórum.',
	'DONATION_TITLE'						=> 'Doa&ccedil;&atilde;o',
	'DONATION_CANCELLED_TITLE'				=> 'Doação Cancelada',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Doação Realizada com Sucesso',
	'DONATION_CONTACT_PAYPAL'				=> 'Conectando ao Paypal - Aguarde…',
	'DONATION_BODY_DEFAULT'					=> 'Por favor faça uma doação e ajude-nos com os custos de hospedagem e manutenção.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Obrigado pela doação. Estamos muito agradecidos pelo seu apoio ao nosso trabalho.',
	'DONATION_CANCEL_DEFAULT'				=> 'Você cancelou sua doação. Não há problema com isso mas considere fazê-la no futuro.',
	'DONATIONS_INDEX'						=> 'Doações',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'Já recebemos %1$s <strong>%2$s</strong> em doações.',
	'DONATION_GOAL_ACHIEVED'				=> 'Nossa meta é alcançar %1$s <strong>%2$s</strong>.',
));
