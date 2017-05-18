<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\controller;

use phpbb\exception\http_exception;

class donation
{
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

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/**
	* Constructor
	*
	* @param \phpbb\config\config				$config
	* @param \phpbb\controller\helper			$helper
	* @param \phpbb\template\template			$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request				$request
	* @param \phpbb\config\db_text				$config_text
	*/
	public function __construct(
		\phpbb\config\config $config,
		\phpbb\controller\helper $helper,
		\phpbb\template\template $template,
		\phpbb\user $user, \phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		\phpbb\config\db_text $config_text
	)
	{
		$this->config 			= $config;
		$this->helper 			= $helper;
		$this->template 		= $template;
		$this->user 			= $user;
		$this->db 				= $db;
		$this->request 			= $request;
		$this->config_text 		= $config_text;
	}

	public function handle()
	{
		// Do we have the donation extension enabled
		if (isset($this->config['donation_enable']) && $this->config['donation_enable'] == 0)
		{
			throw new http_exception(403, 'DONATION_DISABLED');
		}

		if (isset($this->config['donation_email']) && $this->config['donation_email'] == '')
		{
			throw new http_exception(403, 'DONATION_DISABLED_EMAIL');
		}

		$data = $this->config_text->get_array(array(
			'donation_body',
			'donation_cancel',
			'donation_success',
		));

		$success_url	= $this->generate_return_url('success');
		$cancel_url		= $this->generate_return_url('cancel');
		$mode 			= $this->request->variable('mode', '');

		if (!empty($this->config['donation_goal_enable']) && $this->config['donation_goal'] > 0)
		{
			$donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
			$this->template->assign_vars(array(
				'DONATION_GOAL_NUMBER'	=> round($donation_goal_number),
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
			'DONATION_BODY'						=> html_entity_decode($data['donation_body']),
			'DONATION_CANCEL'					=> html_entity_decode($data['donation_cancel']),
			'DONATION_SUCCESS'					=> html_entity_decode($data['donation_success']),
			'L_DONATION_ACHIEVED'				=> $this->user->lang('DONATION_ACHIEVED', $this->config['donation_goal_currency'], $this->config['donation_achievement']),
			'L_DONATION_GOAL'					=> $this->user->lang('DONATION_GOAL_ACHIEVED', $this->config['donation_goal_currency'], $this->config['donation_goal']),
		));

		// Set up Navlinks
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME' 	=> $this->user->lang('DONATION_TITLE'),
			'U_VIEW_FORUM' 	=> $this->helper->route('dmzx_donation_controller'),
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

	/**
	* Generate return URL
	*/
	private function generate_return_url($arg)
	{
		return generate_board_url(true) . $this->helper->route('dmzx_donation_controller', array('mode' => $arg));
	}
}
