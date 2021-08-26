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

class donation_v103 extends migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\donation\migrations\donation_schema',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['donation_version', '1.0.3']],
			['config.remove', ['donation_goal_currency_enable']],
		];
	}
}
