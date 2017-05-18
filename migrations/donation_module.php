<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\migrations;

class donation_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_DONATION_EXT',
			)),
			array('module.add', array(
				'acp',
				'ACP_DONATION_EXT', array(
					'module_basename'	=> '\dmzx\donation\acp\acp_donation_module',
					'modes' 			=> array('configuration'),
				),
			)),
		);
	}
}
