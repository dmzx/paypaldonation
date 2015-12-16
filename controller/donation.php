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

class donation
{
	/**
	* The database tables
	*
	* @var string
	*/
	protected $donation_table;
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\controller\helper */
	protected $helper;

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
	* @param \phpbb\controller\helper			$helper
	* @param \phpbb\template\template			$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request				$request
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\request\request $request, $donation_table)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
		$this->db = $db;
		$this->request = $request;;
		$this->donation_table = $donation_table;
	}

	public function handle()
	{
		// Do we have the donation extension enabled
		if (isset($this->config['donation_enable']) && $this->config['donation_enable'] == 0)
		{
			trigger_error($this->user->lang['DONATION_DISABLED'], E_USER_NOTICE);
		}

		if (isset($this->config['donation_email']) && $this->config['donation_email'] == '')
		{
			trigger_error($this->user->lang['DONATION_DISABLED_EMAIL'], E_USER_NOTICE);
		}

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
		$success_url = generate_board_url() . '/app.php/donation?mode=success';
		$cancel_url = generate_board_url() . '/app.php/donation?mode=cancel';

		$mode = $this->request->variable('mode', '');

		if (!empty($this->config['donation_goal_enable']) && $this->config['donation_goal'] > 0)
		{
			$donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
			$this->template->assign_vars(array(
				'DONATION_GOAL_NUMBER'				=> round($donation_goal_number),
			));
		}

		// Lets build a page ...
		$this->template->assign_vars(array(
			'U_DONATE_SUCCESS'					=> $success_url,
			'U_DONATE_CANCEL'					=> $cancel_url,
			'DONATION_EMAIL'					=> $this->config['donation_email'],
			'DONATION_ACHIEVEMENT_ENABLE'		=> $this->config['donation_achievement_enable'],
			'DONATION_ACHIEVEMENT'				=> $this->config['donation_achievement'],
			'DONATION_GOAL_ENABLE'				=> $this->config['donation_goal_enable'],
			'DONATION_GOAL'						=> $this->config['donation_goal'],
			'DONATION_GOAL_CURRENCY_ENABLE'		=> $this->config['donation_goal_currency_enable'],
			'DONATION_GOAL_CURRENCY'			=> $this->config['donation_goal_currency'],
			'DONATION_BODY'						=> html_entity_decode($donation_body),
			'DONATION_CANCEL'					=> html_entity_decode($donation_cancel),
			'DONATION_SUCCESS'					=> html_entity_decode($donation_success),
		));

		// Set up Navlinks
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME' => $this->user->lang('DONATION_TITLE'),
			'U_VIEW_FORUM' => $this->helper->route('dmzx_donation_controller'),
		));

		switch ($mode)
		{
			case 'success':
				return $this->helper->render('donate/success_body.html', $this->user->lang('DONATION_SUCCESSFULL_TITLE'));
			break;
			case 'cancel':
				return $this->helper->render('donate/cancel_body.html', $this->user->lang('DONATION_CANCELLED_TITLE'));
			break;
			default;
				return $this->helper->render('donate/donate_body.html', $this->user->lang('DONATION_TITLE'));
			break;
		}
	}
}
