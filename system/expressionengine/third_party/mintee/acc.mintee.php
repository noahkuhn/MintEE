<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
  
/**
 * MintEE Accessory
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Accessory
 * @author		Noah Kuhn
 * @link		http://pilotmade.com
 */
 
class Mintee_acc {
	
	public $name			= 'MintEE';
	public $id				= 'mintee';
	public $version			= '1.0';
	public $description		= 'Shows your Mint Stats in your EE install';
	public $sections		= array();
	
	/**
	 * Set Sections
	 */
	public function set_sections()
	{
		$this->EE =& get_instance();
		$this->sections[''] = '<iframe style="border:1px solid #ccc; width:830px; height:600px;" src="//' . $_SERVER['SERVER_NAME'] .'/mint/"></iframe>';
	}
		
}
 
/* End of file acc.mintee.php */
/* Location: /system/expressionengine/third_party/mintee/acc.mintee.php */