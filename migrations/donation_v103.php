<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\migrations;

class donation_v103 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\donation\migrations\donation_schema',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('donation_version', '1.0.3')),
			array('config.remove', array('donation_goal_currency_enable')),
		);
	}
}
