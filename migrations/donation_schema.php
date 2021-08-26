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

class donation_schema extends migration
{
	public function update_data()
	{
		return [
			// Add configs
			['config.add', ['donation_version', '1.0.2']],
			['config.add', ['donation_enable', 1]],
			['config.add', ['donation_email', '']],
			['config.add', ['donation_achievement_enable', 0]],
			['config.add', ['donation_achievement', 0]],
			['config.add', ['donation_goal_enable', 0]],
			['config.add', ['donation_goal', 0]],
			['config.add', ['donation_goal_currency_enable', 0]],
			['config.add', ['donation_goal_currency', '']],
			['config.add', ['donation_index_enable', 0]],
			['config.add', ['donation_index_top', 0]],
			['config.add', ['donation_index_bottom', 0]],

			// Add our config_text table settings
			['config_text.add', ['donation_body', '']],
			['config_text.add', ['donation_cancel', '']],
			['config_text.add', ['donation_success', '']],
		];
	}
}
