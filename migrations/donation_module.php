<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\migrations;

use phpbb\db\migration\migration;

class donation_module extends migration
{
	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_DONATION_EXT',
			]],
			['module.add', [
				'acp',
				'ACP_DONATION_EXT', [
					'module_basename'	=> '\dmzx\donation\acp\acp_donation_module',
					'modes' 			=> ['configuration'],
				],
			]],
		];
	}
}
