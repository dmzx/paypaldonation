<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\acp;

class acp_donation_info
{
	function module()
	{
		return [
			'filename'	=> '\dmzx\donation\acp\acp_donation_module',
			'title'		=> 'ACP_DONATION_EXT',
			'modes'		=> [
				'configuration'	=> ['title' => 'ACP_DONATION_CONFIG', 	'auth' => 'ext_dmzx/donation && acl_a_board','cat' => ['ACP_DONATION_EXT']],
			],
		];
	}
}
