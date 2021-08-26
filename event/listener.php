<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\donation\event;

use phpbb\config\config;
use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\user;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var helper */
	protected $helper;

	/** @var user */
	protected $user;

	/** @var string */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param config			$config
	* @param helper			$helper
	* @param template		$template
	* @param user			$user
	* @param string			$php_ext
	*/
	public function __construct(
		config $config,
		helper $helper,
		template $template,
		user $user,
		$php_ext
	)
	{
		$this->config 			= $config;
		$this->helper 			= $helper;
		$this->template 		= $template;
		$this->user 			= $user;
		$this->php_ext	 		= $php_ext;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.viewonline_overwrite_location'	=> 'viewonline_page',
			'core.page_header'						=> 'add_page_header_links',
			'core.index_modify_page_title'			=> 'index_modify_page_title',
			'core.user_setup'						=> 'load_language_on_setup',
		);
	}

	public function viewonline_page($event)
	{
		if ($event['on_page'][1] == 'app')
		{
			if (strrpos($event['row']['session_page'], 'app.' . $this->php_ext . '/donation') === 0)
			{
				$event['location'] = $this->user->lang('VIEWING_DONATE');
				$event['location_url'] = $this->helper->route('dmzx_donation_controller');
			}
		}
	}

	public function add_page_header_links($event)
	{
		$this->template->assign_vars(array(
			'U_DONATE' 				=> $this->helper->route('dmzx_donation_controller'),
			'S_DONATE_ENABLED'		=> (isset($this->config['donation_enable'])) ? $this->config['donation_enable']:false,
		));
	}

	public function index_modify_page_title($event)
	{
		$this->template->assign_vars(array(
			'DONATION_ACHIEVEMENT_ENABLE'		=> (isset($this->config['donation_achievement_enable'])) ? $this->config['donation_achievement_enable']:false,
			'DONATION_ACHIEVEMENT'				=> (isset($this->config['donation_achievement'])) ? $this->config['donation_achievement']:false,
			'DONATION_INDEX_ENABLE'				=> (isset($this->config['donation_index_enable'])) ? $this->config['donation_index_enable']:false,
			'DONATION_INDEX_TOP'				=> (isset($this->config['donation_index_top'])) ? $this->config['donation_index_top']:false,
			'DONATION_INDEX_BOTTOM'				=> (isset($this->config['donation_index_bottom'])) ? $this->config['donation_index_bottom']:false,
			'DONATION_GOAL_ENABLE'				=> (isset($this->config['donation_goal_enable'])) ? $this->config['donation_goal_enable']:false,
			'DONATION_GOAL'						=> (isset($this->config['donation_goal'])) ? $this->config['donation_goal']:false,
			'S_DONATE_ENABLED'					=> (isset($this->config['donation_enable'])) ? $this->config['donation_enable']:false,
			'L_DONATION_ACHIEVED'				=> $this->user->lang('DONATION_ACHIEVED', $this->config['donation_goal_currency'], $this->config['donation_achievement']),
			'L_DONATION_GOAL'					=> $this->user->lang('DONATION_GOAL_ACHIEVED', $this->config['donation_goal_currency'], $this->config['donation_goal']),
		));

		if (!empty($this->config['donation_goal_enable']) && $this->config['donation_goal'] > 0)
		{
			$donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
			$donation_goal_rest = $this->config['donation_goal'] - $this->config['donation_achievement'];

			$this->template->assign_vars(array(
				'DONATION_GOAL_NUMBER'		=> round($donation_goal_number),
				'DONATION_GOAL_REST'		=> $donation_goal_rest,
			));
		}
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/donation',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
