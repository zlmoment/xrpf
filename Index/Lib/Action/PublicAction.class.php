<?php
/**
 * 公共功能类
 * @author zhaoyulee
 *
 */
class PublicAction extends Action {
	
	public function index() {
		$this->display ();
	}
	//组长登录
	public function login() {
		Session::destroy ();
		$this->display ();
	}
	
	public function login_do() {
		$stuno = $_POST ['stuno'];
		$password = $_POST ['password'];
		$User = M ( "User" );
		$map ['stuno'] = $stuno;
		$map ['password'] = $password;
		$pass = $User->where ( $map )->find ();
		if ($pass) {
			Session::set ( C ( 'USER_AUTH_KEY' ), $pass ['stuno'] );
			$this->assign ( 'jumpUrl', '__APP__/user/index' );
			$this->success ( "登录成功" );
		} else {
			$this->error ( "此登录帐号不存在" );
		}
	}
	
	//注册 暂时不可用
	public function signup() {
		Session::destroy ();
		echo "抱歉，报名时间已过，注册功能暂时关闭。";
		//$this->display ();
	}
	
	//留言
	public function leavemessage() {
		$this->display ();
	}
	public function leavemessage_do() {
		$stuno = $_POST ['stuno'];
		$stuname = $_POST ['stuname'];
		$msgcontent = $_POST ['msgcontent'];
		if ($stuno == "" || $msgcontent == "") {
			$this->error ( "请填写所有的必填信息！" );
		} else {
			$Message = M ( "Message" );
			$Message->stuno = $stuno;
			$Message->stuname = $stuname;
			$Message->msgcontent = $msgcontent;
			$Message->msgtime = date ( "Y-m-j H:i:s" );
			$result = $Message->add ();
			if ($result) {
				$this->assign ( 'jumpUrl', '__APP__/index' );
				$this->success ( "留言成功！" );
			} else {
				$this->error ( "操作失败，请重试！" );
			}
		}
	}
}
