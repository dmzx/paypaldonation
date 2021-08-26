<?php
/**
*
* @package phpBB Extension - Paypal Donation
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
// ’ » “ ” …

$lang = array_merge($lang, [
	'DONATION_SAVED'						=> 'Donation settings saved',
	'DONATION_VERSION'						=> 'Version',
	'DONATION_SETTINGS'						=> 'Configurações Globais',
	'DONATION_ENABLE'						=> 'Habilitar as doações',
	'DONATION_ENABLE_EXPLAIN'				=> 'Habilita ou desabilita as doações via Paypal.',
	'DONATION_INDEX_ENABLE'					=> 'Mostrar as estatísticas de doações no index',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Habilite isso para mostrar as estatísticas das doações no index.',
	'DONATION_INDEX_TOP'					=> 'Mostrar as estatísticas de doações no topo da página',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Habilite isso para mostrar as estatísticas de doações no topo da página index.',
	'DONATION_INDEX_BOTTOM'					=> 'Mostrar as estatísticas de doações embaixo da página',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Habilite isso para mostrar as estatísticas de doações ambaixo da página index.',
	'DONATION_EMAIL'						=> 'Endereço de email do Paypal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Entre seu endereço de email do Paypal.',
	'DONATION_STATS_SETTINGS'				=> 'Configuração das Estatísticas das Doações',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Mostrar o total recebido em doações',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Habilite para mostrar o total recebido em doações.',
	'DONATION_ACHIEVEMENT'					=> 'Total recebido em doações',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Entre o total recebido em doações até o momento.',
	'DONATION_GOAL_ENABLE'					=> 'Mostrar a meta de doações',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Habilite para mostrar a meta de doações.',
	'DONATION_GOAL'							=> 'Meta de doações',
	'DONATION_GOAL_EXPLAIN'					=> 'Entre a meta de doações.',
	'DONATION_GOAL_CURRENCY'				=> 'Moeda das doações',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'Entre a moeda a ser mostrada no total e nas metas de doações.',
	'DONATION_BODY_SETTINGS'				=> 'Configuração da Página de Doações',
	'DONATION_BODY'							=> 'Texto da página de doações',
	'DONATION_BODY_EXPLAIN'					=> 'Entre com o texto a ser mostrado na página de doações.<br><br>HTML é permitido.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configuração das Doações Realizadas com Sucesso',
	'DONATION_SUCCESS'						=> 'Texto das doações realizadas com sucesso',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Entre com o texto a ser mostrado na página de doações realizadas com sucesso.<br>O usuário é levado para esta página após uma doação com sucesso.<br><br>HTML é permitido.',
	'DONATION_CANCEL_SETTINGS'				=> 'Configuração das Doações Canceladas',
	'DONATION_CANCEL'						=> 'Texto das doações canceladas',
	'DONATION_CANCEL_EXPLAIN'				=> 'Entre com o texto a ser mostrado na página de doações canceladas.<br>O usuário é levado para esta página após uma doação cancelada.<br><br>HTML é permitido.',
]);
