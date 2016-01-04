<?php
namespace Home\Common\Controller;

use Home\Common\Constants\Constant;
use Think\Controller;
use Vendor\Wechat\TPWechat;

class BaseController extends Controller {
	
	private $options = array('token'=>'wsdbookstore', 'encodingaeskey'=>'tk3s8FIGe0MjpQyjT7eiMpwhsXHjzFZ5LrSEuoftIfn',
 					'appid'=>'wx9266bc9da8a1f391', 'appsecret'=>'e5394eff409fbe82a7828ba0e8ce3aac');

	private $menu = array ('button' => array (
				0 => array ('name' => Constant::SCAN_BOOK, 'sub_button' =>  array (
				    0 => array (
				      'type' => 'click',
				      'name' => '最新上架',
				      'key' => 'menu_0_0',
				    ),
				    1 => array (
				      'type' => 'click',
				      'name' => '热销书籍',
				      'key' => 'menu_0_1',
				    ),
				    2 => array (
				      'type' => 'click',
				      'name' => '分类浏览',
				      'key' => 'menu_0_2',
				    ),
				 ),
				),

				1 => array ('name' => '我的订单', 'sub_button' => array (
				    0 => array (
				      'type' => 'click',
				      'name' => '购物车',
				      'key' => 'menu_1_0',
				    ),
				    1 => array (
				      'type' => 'click',
				      'name' => '待付款',
				      'key' => 'menu_1_1',
				    ),
				    2 => array (
				      'type' => 'click',
				      'name' => '历史订单',
				      'key' => 'menu_1_2',
				    ),
				),
				),

				2 => array ('name' => '个人中心', 'sub_button' => array (
				    0 => array (
				      'type' => 'click',
				      'name' => '帐号绑定',
				      'key' => 'menu_2_0',
				    ),
				    1 => array (
				      'type' => 'click',
				      'name' => '个人信息',
				      'key' => 'menu_2_1',
				    ),
				    2 => array (
				      'type' => 'click',
				      'name' => '解除绑定',
				      'key' => 'menu_2_2',
				    ),
				),
				),
			    ),
			);

	protected $weChat = null;

	public function _initialize() {
		
		$this->weChat = new TPWechat($this->options);
		$this->weChat->valid();
		$this->weChat->createMenu($this->menu);	
	}
}
