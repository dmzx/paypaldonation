<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\acp;

class donation_module
{
	public $u_action;

	function main($id, $mode)
	{

		global $phpbb_container, $request, $user;

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('dmzx.donation.admin.controller');

		$action	= $request->variable('action', '');

		if ($request->is_set_post('submit'))
		{
			$action = 'submit';
		}
		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		// Load the "settings" or "manage" module modes
		switch($mode)
		{
			case 'configuration':
				// Load a template from adm/style for our ACP page
				$this->tpl_name = 'acp_donation';
				// Set the page title for our ACP page
				$this->page_title = $user->lang['ACP_DONATION_MOD'];
				// Load the display options handle in the admin controller
				$admin_controller->display_options();

			break;

		}
	}
}