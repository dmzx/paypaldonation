<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\migrations;

class donation_schema extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('donation_version', '1.0.2')),
			array('config.add', array('donation_enable', 1)),
			array('config.add', array('donation_email', '')),
			array('config.add', array('donation_achievement_enable', 0)),
			array('config.add', array('donation_achievement', 0)),
			array('config.add', array('donation_goal_enable', 0)),
			array('config.add', array('donation_goal', 0)),
			array('config.add', array('donation_goal_currency_enable', 0)),
			array('config.add', array('donation_goal_currency', '')),
			array('config.add', array('donation_index_enable', 0)),
			array('config.add', array('donation_index_top', 0)),
			array('config.add', array('donation_index_bottom', 0)),

			// Add our config_text table settings
			array('config_text.add', array('donation_body', '')),
			array('config_text.add', array('donation_cancel', '')),
			array('config_text.add', array('donation_success', '')),
		);
	}
}
