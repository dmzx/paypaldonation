<?php
/**
*
* @package phpBB Extension - PhpBB Paypal Donation
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\donation\controller;

class donation
{
	/** @var \dmzx\donation\core\render_helper */
	protected $render_helper;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\request\request */
	protected $request;

	/**
	* Constructor
	*
	 * @param \dmzx\mchat\core\render_helper	$render_helper
	 * @param \phpbb\controller\helper			$helper
	 * @param \phpbb\request\request			$request
	*/
	public function __construct(\dmzx\donation\core\render_helper $render_helper, \phpbb\controller\helper $helper, \phpbb\request\request $request)
	{
		$this->render_helper = $render_helper;
		$this->helper = $helper;
		$this->request = $request;
	}

	/**
	* Controller for donation
	*
	* @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle()
	{
		$ret = $this->render_helper->render_data_for_page();
	}
}
