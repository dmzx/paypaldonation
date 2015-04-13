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

class donation_schema_1 extends \phpbb\db\migration\migration
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
			array('custom', array(array($this, 'insert_sample_data'))),
		);
	}
	public function insert_sample_data()
	{
		global $user;

		$sample_data = array(
				array(
					'config_name' 	=> 'donation_body',
					'config_value'	=> '',
				),
				array(
					'config_name' 	=> 'donation_success',
					'config_value'	=> '',
				),
				array(
					'config_name' 	=> 'donation_cancel',
					'config_value'	=> '',
				),

		);

		// Insert sample PM data
		$this->db->sql_multi_insert($this->table_prefix . 'donation', $sample_data);
	}
}