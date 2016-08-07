<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\acp;

class acp_donation_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\donation\acp\acp_donation_module',
			'title'		=> 'ACP_DONATION_EXT',
			'modes'		=> array(
				'configuration'	=> array('title' => 'ACP_DONATION_CONFIG', 	'auth' => 'ext_dmzx/donation && acl_a_board','cat' => array('ACP_DONATION_EXT')),
			),
		);
	}
}
