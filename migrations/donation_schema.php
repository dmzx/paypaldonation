<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\migrations;

class donation_schema extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('donation_version', '0.1.4')),
			array('config.add', array('donation_enable', 1)),
			array('config.add', array('donation_email', '')),
			array('config.add', array('donation_achievement_enable', 0)),
			array('config.add', array('donation_achievement', '')),
			array('config.add', array('donation_goal_enable', 0)),
			array('config.add', array('donation_goal', '')),
			array('config.add', array('donation_goal_currency_enable', 0)),
			array('config.add', array('donation_goal_currency', '')),
			array('config.add', array('donation_index_enable', 0)),
			array('config.add', array('donation_index_top', 0)),
			array('config.add', array('donation_index_bottom', 0)),

		);
	}

		public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'donation'	=> array(
					'COLUMNS'	=> array(
						'config_name'		=> array('VCHAR', ''),
						'config_value'		=> array('TEXT', ''),
					),
					'PRIMARY_KEY'	=> 'config_name',
				),
			),
		);
	}

		public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'donation',
			),
		);
	}

}
