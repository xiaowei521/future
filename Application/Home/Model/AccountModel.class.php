<?php

namespace Home\Model;

use Think\Model;

class AccountModel extends Model {
	// public function get
	
	// 检测用户登陆通过 账号和密码
	public function judge_account_login($account_id, $passwd) {
		$condition ['account_id'] = $account_id;
		//$condition ['password'] = $this->passwd ( $passwd );
		$condition ['password'] =  ( $passwd );
		// $condition['_logic'] = 'OR';
		// 把查询条件传入查询方法
		
		if ($this->where ( $condition )->find ())
			return true;
		return false;
	}
	// 用户密码加密
	private static function passwd($passwd) {
		$base = "sw_ajax";
		return md5 ( $passwd . $base );
	}
}