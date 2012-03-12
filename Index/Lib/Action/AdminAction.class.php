<?php
/**
 * 后台类
 * @author zhaoyulee
 *
 */
class AdminAction extends Action {
	
	public function index() {
		if (false == Session::get ( "admin_username" )) {
			$this->display ();
		} else {
			redirect ( PHP_FILE . "/admin/admin" );
		}
	}
	//管理员登录验证
	public function login_do() {
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		if ($username == "" || $password == "") {
			$this->error ( "你好像没填写完全哦！" );
		} else {
			$Admin = M ( "Admin" );
			$map ['username'] = $username;
			$map ['password'] = $password;
			$pass = $Admin->where ( $map )->find ();
			if ($pass) {
				Session::set ( "admin_username", $pass ['username'] );
				$this->assign ( 'jumpUrl', '__APP__/admin/admin' );
				$this->success ( "登录成功" );
			} else {
				$this->error ( "此登录帐号不存在" );
			}
		}
	}
	//admin主界面
	public function admin() {
		if (false == Session::get ( "admin_username" )) {
			redirect ( PHP_FILE . C ( 'ADMIN_AUTH_GATEWAY' ) );
		} else {
			$this->display ();
		}
	}
	//发布公告
	public function publish() {
		if (false == Session::get ( "admin_username" )) {
			redirect ( PHP_FILE . C ( 'ADMIN_AUTH_GATEWAY' ) );
		} else {
			$this->display ();
		}
	}
	
	public function publish_do() {
		if (false == Session::get ( "admin_username" )) {
			redirect ( PHP_FILE . C ( 'ADMIN_AUTH_GATEWAY' ) );
		} else {
			$News = M ( "News" );
			$title = $_POST ['title'];
			$content = $_POST ['content'];
			$pubtime = date ( 'Y-m-j' );
			$News->title = $title;
			$News->content = $content;
			$News->pubtime = $pubtime;
			$result = $News->add ();
			if ($result) {
				$this->assign ( 'jumpUrl', '__APP__/admin/admin' );
				$this->success ( "操作成功" );
			} else {
				$this->error ( "操作失败" );
			}
		}
	}
	//登出
	public function logout() {
		Session::destroy ();
		redirect ( PHP_FILE . "/" );
	}
}
?>