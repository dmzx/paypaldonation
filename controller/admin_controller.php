<?php
/**
*
* @package phpBB Extension - phpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
* Admin controller
*/
class admin_controller
{
	/**
	* The database tables
	*
	* @var string
	*/
	protected $donation_table;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config				$config
	 * @param \phpbb\template\template			$template
	 * @param \phpbb\user						$user
	 * @param \phpbb\db\driver\driver_interface	$db
	 * @param \phpbb\request\request			$request
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\log\log_interface $log, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\request\request $request, $donation_table)
	{
		$this->config = $config;
		$this->template = $template;
		$this->phpbb_log = $log;
		$this->user = $user;
		$this->db = $db;
		$this->request = $request;
		$this->donation_table = $donation_table;
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

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_donation'))
			{
				$error[] = 'FORM_INVALID';
			}

			$donation_row = array(
				'donation_body' 			=> $this->request->variable('donation_body', '', true),
				'donation_cancel' 			=> $this->request->variable('donation_cancel', '', true),
				'donation_success' 			=> $this->request->variable('donation_success', '', true),
			 );

			foreach ($donation_row as $this->config_name => $this->config_value)
			{
				$sql = 'UPDATE ' . $this->donation_table . "
					SET config_value = '" . $this->db->sql_escape($this->config_value) . "'
					WHERE config_name = '" . $this->db->sql_escape($this->config_name) . "'";
				$this->db->sql_query($sql);
			}

			// Set the options the user configured
			$this->set_options();

		// Add option settings change action to the admin log
		$this->phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'DONATION_SAVED');

		trigger_error($this->user->lang['DONATION_SAVED'] . adm_back_link($this->u_action));

		}

		// let's get it on
		$sql = 'SELECT *
		FROM ' . $this->donation_table;
		$result = $this->db->sql_query($sql);
		$donation = array();
		while ($row = $this->db->sql_fetchrow($result))
		{
			$donation[$row['config_name']] = $row['config_value'];
		}
		$this->db->sql_freeresult($result);

		$donation_body = isset($donation['donation_body']) ? $donation['donation_body'] : '';
		$donation_cancel = isset($donation['donation_cancel']) ? $donation['donation_cancel'] : '';
		$donation_success = isset($donation['donation_success']) ? $donation['donation_success'] : '';
		$donation_version = isset($this->config['donation_version']) ? $this->config['donation_version'] : '';

		$this->template->assign_vars(array(
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
			'DONATION_GOAL_CURRENCY_ENABLE'		=> $this->config['donation_goal_currency_enable'],
			'DONATION_GOAL_CURRENCY'			=> $this->config['donation_goal_currency'],
			'DONATION_BODY'						=> $donation_body,
			'DONATION_CANCEL'					=> $donation_cancel,
			'DONATION_SUCCESS'					=> $donation_success,

			'U_ACTION'							=> $this->u_action)
		);
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
		$this->config->set('donation_goal_currency_enable', $this->request->variable('donation_goal_currency_enable', 0));
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
