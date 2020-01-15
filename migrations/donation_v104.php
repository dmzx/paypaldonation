<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2020 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\migrations;

class donation_v104 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\donation\migrations\donation_v103',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['donation_version', '1.0.4']],
		];
	}
}
