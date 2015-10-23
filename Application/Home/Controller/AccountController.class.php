<?php

namespace Home\Controller;

use Home\Controller\BaseController;
use Org\Util\Response;

class AccountController extends BaseController {
	public function login() {
		$account_id = I ( 'em' );
		$passwd = I ( 'pw' );
		
		// 账号表
		$account_model = D ( 'Account' );
		if ($account_model->judge_account_login ( $account_id, $passwd )) {
			
			// login success
			$user_info ['id'] = $account_id;
			// $user_info ['id'] = $account_id;
			session ( 'user_info', $user_info );
			$test = Response::show ( '200', '登陆成功!' );
		} 

		else
			Response::show ( '-100', '登陆失败!' );
	}
	public function register() {
		$this->display ();
	}
	public function logout() {
		if (isset ( $_SESSION )) {
			session ( null );
 			$this->success('推出成功', '/index');
		} else {
			$this->error ( '已经退出登陆！' );
		}
	}
}