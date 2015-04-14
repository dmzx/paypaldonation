<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;
	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	protected $phpbb_root_path;

	protected $phpEx;
	/** @var string */
	protected $table_prefix;
	/** @var \phpbb\controller\helper */
	protected $controller_helper;

	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\controller\helper $controller_helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $root_path, $phpEx, $table_prefix)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->template = $template;
		$this->controller_helper = $controller_helper;
		$this->user = $user;
		$this->db = $db;
		$this->root_path = $root_path;
		$this->phpEx = $phpEx;
		$this->table_prefix = $table_prefix;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.viewonline_overwrite_location'	=> 'add_page_viewonline',
			'core.page_header'	=> 'add_page_header_links',
			'core.user_setup'   => 'load_language_on_setup',

		);
	}

	public function add_page_viewonline($event)
	{
	global $user, $phpbb_container, $phpEx;
	   if (strrpos($event['row']['session_page'], 'app.' . $phpEx . '/donation') === 0)
	   {
		$event['location'] = $user->lang('VIEWING_DONATE');
		$event['location_url'] = $phpbb_container->get('controller.helper')->route('dmzx_donation_controller');
	   }
	}

	public function add_page_header_links($event)
	{

	 $this->template->assign_vars(array(
	'DONATION_ACHIEVEMENT_ENABLE'		=> (isset($this->config['donation_achievement_enable'])) ? $this->config['donation_achievement_enable']:false,
	'DONATION_ACHIEVEMENT'				=> (isset($this->config['donation_achievement'])) ? $this->config['donation_achievement']:false,
	'DONATION_INDEX_ENABLE'				=> (isset($this->config['donation_index_enable'])) ? $this->config['donation_index_enable']:false,
	'DONATION_INDEX_TOP'				=> (isset($this->config['donation_index_top'])) ? $this->config['donation_index_top']:false,
	'DONATION_INDEX_BOTTOM'				=> (isset($this->config['donation_index_bottom'])) ? $this->config['donation_index_bottom']:false,
	'DONATION_GOAL_ENABLE'				=> (isset($this->config['donation_goal_enable'])) ? $this->config['donation_goal_enable']:false,
	'DONATION_GOAL'						=> (isset($this->config['donation_goal'])) ? $this->config['donation_goal']:false,
	'DONATION_GOAL_CURRENCY_ENABLE'		=> (isset($this->config['donation_goal_currency_enable'])) ? $this->config['donation_goal_currency_enable']:false,
	'DONATION_GOAL_CURRENCY'			=> (isset($this->config['donation_goal_currency'])) ? $this->config['donation_goal_currency']:false,
	'S_DONATE_ENABLED'		=> (isset($this->config['donation_enable'])) ? $this->config['donation_enable']:false,
	));

	 if (!empty($this->config['donation_goal_enable']) &&  $this->config['donation_goal'] > 0)
	 {
	 $donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
	 $donation_goal_rest = $this->config['donation_goal'] - $this->config['donation_achievement'];
	 $this->template->assign_vars(array(
	'DONATION_GOAL_NUMBER'		   => round($donation_goal_number),
	'DONATION_GOAL_REST'				=> $donation_goal_rest,
	 ));
	}
		$this->template->assign_vars(array(
		'U_DONATE' => $this->controller_helper->route('dmzx_donation_controller'),
		));

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
