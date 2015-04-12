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

	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\config\db_text */
	protected $config_text;
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;
	/** @var \phpbb\cache\service */
	protected $cache;
	/** @var \phpbb\log\log */
	protected $log;
	/** @var \phpbb\request\request */
	protected $request;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var ContainerInterface */
	protected $phpbb_container;
	/** @var string */
	protected $phpbb_root_path;
	/** @var string */
	protected $php_ext;
	/** @var string */
	protected $table_prefix;
	/** @var string */
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $db, $cache, $request, $template, $user, $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix, $phpbb_log;
		global $phpbb_container;

		$this->config = $config;
		$this->config_text = $phpbb_container->get('config_text');
		$this->db = $db;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->cache = $cache;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $phpEx;
		$this->table_prefix = $phpbb_container->getParameter('core.table_prefix');

		$action	= $request->variable('action', '');

		$this->tpl_name = 'acp_donation';
		$this->page_title = $this->user->lang['ACP_DONATION_MOD'];
		$form_key = 'acp_donation';
		add_form_key($form_key);

		$submit = (isset($_POST['submit'])) ? true : false;

		$donation_row = array(
			'donation_body' 			=> utf8_normalize_nfc($request->variable('donation_body', '', true)),
			'donation_cancel' 			=> utf8_normalize_nfc($request->variable('donation_cancel', '', true)),
			'donation_success' 			=> utf8_normalize_nfc($request->variable('donation_success', '', true)),
		);

		if ($submit)
		{
			if (!check_form_key('acp_donation'))
			{
				$error[] = 'FORM_INVALID';
			}

				foreach ($donation_row as $this->config_name => $this->config_value)
				{
					$sql = 'UPDATE ' . $this->table_prefix . \dmzx\donation\core\render_helper::DONATION_TABLE . "
						SET config_value = '" . $this->db->sql_escape($this->config_value) . "'
						WHERE config_name = '" . $this->db->sql_escape($this->config_name) . "'";
					$this->db->sql_query($sql);
				}

				$config->set('donation_enable', $request->variable('donation_enable', 1));
				$config->set('donation_index_enable', $request->variable('donation_index_enable', 0));
				$config->set('donation_index_top', $request->variable('donation_index_top', 0));
				$config->set('donation_index_bottom', $request->variable('donation_index_bottom', 0));
				$config->set('donation_email', $request->variable('donation_email', ''));
				$config->set('donation_goal_enable', $request->variable('donation_goal_enable', 0));
				$config->set('donation_goal', $request->variable('donation_goal', ''));
				$config->set('donation_achievement_enable', $request->variable('donation_achievement_enable', 0));
				$config->set('donation_achievement', $request->variable('donation_achievement', ''));
				$config->set('donation_goal_currency_enable', $request->variable('donation_goal_currency_enable', 0));
				$config->set('donation_goal_currency', $request->variable('donation_goal_currency', ''));

				trigger_error($this->user->lang['DONATION_SAVED'] . adm_back_link($this->u_action));

		}

		// let's get it on
		$sql = 'SELECT * FROM ' . $this->table_prefix . \dmzx\donation\core\render_helper::DONATION_TABLE;
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
}