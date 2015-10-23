<?php
namespace Home\Controller;

use Home\Controller\BaseController;

class UserHomeController extends BaseController{
	
	//用户 个人中心
	public function index(){
		$this->display();
	}
}