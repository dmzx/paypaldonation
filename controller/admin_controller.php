<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\controller;

use phpbb\config\config;
use phpbb\config\db_text;
use phpbb\db\driver\driver_interface;
use phpbb\log\log_interface;
use phpbb\request\request;
use phpbb\template\template;
use phpbb\user;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var driver_interface */
	protected $db;

	/** @var request */
	protected $request;

	/** @var db_text */
	protected $config_text;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor
	 *
	 * @param config				$config
	 * @param template				$template
	 * @param log_interface			$log
	 * @param user					$user
	 * @param driver_interface		$db
	 * @param request				$request
	 * @param db_text				$config_text
	 */
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		driver_interface $db,
		request $request,
		db_text $config_text
	)
	{
		$this->config 			= $config;
		$this->template 		= $template;
		$this->log 				= $log;
		$this->user 			= $user;
		$this->db 				= $db;
		$this->request 			= $request;
		$this->config_text 		= $config_text;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		add_form_key('acp_donation');

		$data = $this->config_text->get_array([
			'donation_body',
			'donation_cancel',
			'donation_success',
		]);

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_donation'))
			{
				trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$data['donation_body'] 		= $this->request->variable('donation_body', '', true);
			$data['donation_cancel'] 	= $this->request->variable('donation_cancel', '', true);
			$data['donation_success'] 	= $this->request->variable('donation_success', '', true);

			// Store the settings to the config_table in the database
			$this->config_text->set_array([
				'donation_body'			=> $data['donation_body'],
				'donation_cancel'		=> $data['donation_cancel'],
				'donation_success'		=> $data['donation_success'],
			]);

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_DONATION_SAVED');

			trigger_error($this->user->lang['DONATION_SAVED'] . adm_back_link($this->u_action));
		}

		$donation_version = isset($this->config['donation_version']) ? $this->config['donation_version'] : '';

		$this->template->assign_vars([
			'DONATION_VERSION'					=> $donation_version,
			'DONATION_ENABLE'					=> $this->config['donation_enable'],
			'DONATION_INDEX_ENABLE'				=> $this->config['donation_index_enable'],
			'DONATION_INDEX_TOP'				=> $this->config['donation_index_top'],
			'DONATION_INDEX_BOTTOM'				=> $this->config['donation_index_bottom'],
			'DONATION_EMAIL'					=> $this->config['donation_email'],
			'DONATION_ACHIEVEMENT_ENABLE'		=> $this->config['donation_achievement_enable'],
			'DONATION_ACHIEVEMENT'				=> $this->config['donation_achievement'],
			'DONATION_GOAL_ENABLE'				=> $this->config['donation_goal_enable'],
			'DONATION_GOAL'						=> $this->config['donation_goal'],
			'DONATION_GOAL_CURRENCY'			=> $this->config['donation_goal_currency'],
			'DONATION_BODY'						=> $data['donation_body'],
			'DONATION_CANCEL'					=> $data['donation_cancel'],
			'DONATION_SUCCESS'					=> $data['donation_success'],

			'U_ACTION'							=> $this->u_action,
		]);
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('donation_enable', $this->request->variable('donation_enable', 1));
		$this->config->set('donation_index_enable', $this->request->variable('donation_index_enable', 0));
		$this->config->set('donation_index_top', $this->request->variable('donation_index_top', 0));
		$this->config->set('donation_index_bottom', $this->request->variable('donation_index_bottom', 0));
		$this->config->set('donation_email', $this->request->variable('donation_email', ''));
		$this->config->set('donation_goal_enable', $this->request->variable('donation_goal_enable', 0));
		$this->config->set('donation_goal', $this->request->variable('donation_goal', ''));
		$this->config->set('donation_achievement_enable', $this->request->variable('donation_achievement_enable', 0));
		$this->config->set('donation_achievement', $this->request->variable('donation_achievement', ''));
		$this->config->set('donation_goal_currency', $this->request->variable('donation_goal_currency', '', true));
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
