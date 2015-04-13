<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\core;

class render_helper

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

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\cache\service */
	protected $cache;

	/** @var \phpbb\request\request */
	protected $request;

	protected $phpbb_root_path;

	protected $phpEx;

	protected $table_prefix;
	/** @var \phpbb\pagination */
	protected $pagination;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config				$config
	 * @param \phpbb\controller\helper			$helper
	 * @param \phpbb\template\template			$template
	 * @param \phpbb\user						$user
	 * @param \phpbb\auth\auth					$auth
	 * @param \phpbb\db\driver\driver_interface	$db
	 * @param \phpbb\cache\service				$cache
	 * @param \phpbb\request\request			$request
	 * @param									$phpbb_root_path
	 * @param									$phpEx
	 * @param									$table_prefix
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\log\log_interface $log, \phpbb\user $user, \phpbb\auth\auth $auth, \phpbb\db\driver\driver_interface $db, \phpbb\cache\service $cache, \phpbb\request\request $request, \phpbb\pagination $pagination, $phpbb_root_path, $phpEx, $table_prefix, $donation_table)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
		$this->auth = $auth;
		$this->db = $db;
		$this->cache = $cache;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->phpEx = $phpEx;
		$this->phpbb_log = $log;
		$this->table_prefix = $table_prefix;
		$this->pagination = $pagination;
		$this->donation_table = $donation_table;

		$this->ext_root_path = 'ext/dmzx/donation';
	}
	public function render_data_for_page($only_for_index = false)
	{

// Do we have the donation mod enabled

if (isset($this->config['donation_enable']) && $this->config['donation_enable'] == 0)
{
	trigger_error($this->user->lang['DONATION_DISABLED'], E_USER_NOTICE);
}
if (isset($this->config['donation_email']) && $this->config['donation_email'] == '')
{
	trigger_error($this->user->lang['DONATION_DISABLED_EMAIL'], E_USER_NOTICE);
}

$sql = 'SELECT * FROM ' . $this->donation_table;
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

$mode = request_var('mode', '');

switch ($mode)
{
	case 'success':
		page_header($this->user->lang['DONATION_SUCCESSFULL_TITLE']);
		$this->template->set_filenames(array(
			'body' => 'donate/success_body.html')
		);
	break;

	case 'cancel':
		page_header($this->user->lang['DONATION_CANCELLED_TITLE']);
		$this->template->set_filenames(array(
			'body' => 'donate/cancel_body.html')
		);
	break;

	default:
		page_header($this->user->lang['DONATION_TITLE']);
		$this->template->set_filenames(array(
			'body' => 'donate/donate_body.html')
		);
	break;
}

if (!empty($this->config['donation_goal_enable']) &&  $this->config['donation_goal'] > 0)
{
$donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
$this->template->assign_vars(array(
   'DONATION_GOAL_NUMBER'		   	=> round($donation_goal_number),
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
'FORUM_NAME' => ($this->user->lang['DONATION_TITLE']),
'U_VIEW_FORUM' => $this->helper->route('dmzx_donation_controller'))
);

page_footer();
}
}