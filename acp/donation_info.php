<?php
/**
*
* @package phpBB Extension - phpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\acp;

class donation_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\donation\acp\donation_module',
			'title'		=> 'ACP_DONATION_MOD',
			'modes'		=> array(
				'configuration'	=> array('title' => 'DONATION_CONFIG', 	'auth' => 'ext_dmzx/donation && acl_a_board','cat' => array('ACP_DONATION_MOD')),
			),
		);
	}
}
