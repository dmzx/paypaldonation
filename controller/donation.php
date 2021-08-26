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
use phpbb\controller\helper;
use phpbb\db\driver\driver_interface;
use phpbb\exception\http_exception;
use phpbb\request\request;
use phpbb\template\template;
use phpbb\user;

class donation
{
	/** @var config */
	protected $config;

	/** @var helper */
	protected $helper;

	/** @var template */
	protected $template;

	/** @var user */
	protected $user;

	/** @var driver_interface */
	protected $db;

	/** @var request */
	protected $request;

	/** @var db_text */
	protected $config_text;

	/**
	* Constructor
	*
	* @param config				$config
	* @param helper			    $helper
	* @param template			$template
	* @param user				$user
	* @param driver_interface	$db
	* @param request			$request
	* @param db_text			$config_text
	*/
	public function __construct(
		config $config,
		helper $helper,
		template $template,
		user $user, driver_interface $db,
		request $request,
		db_text $config_text
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
