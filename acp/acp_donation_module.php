<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\acp;

class acp_donation_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		// Add the ACP lang file
		$user->add_lang_ext('dmzx/donation', 'acp_donation');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('dmzx.donation.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		switch ($mode)
		{
			case 'configuration':
				// Load a template from adm/style for our ACP page
				$this->tpl_name = 'acp_donation';
				// Set the page title for our ACP page
				$this->page_title = $user->lang['ACP_DONATION_EXT'];
				// Load the display options handle in the admin controller
				$admin_controller->display_options();
			break;
		}
	}
}
