<?php
/**
 * 组长的操作类
 * @author zhaoyulee
 *
 */
class UserAction extends BaseAction {
	//个人资料
	public function index() {
		$stuno = Session::get ( C ( 'USER_AUTH_KEY' ) );
		$User = M ( "User" );
		$result = $User->where ( "stuno=$stuno" )->find ();
		$this->assign ( "result", $result );
		$this->display ();
	}
	public function index_do() {
		$uid = $_POST ["uid"];
		$User = M ( "User" );
		$User->create ();
		$uid = $_POST ['uid'];
		$result = $User->where ( "uid=$uid" )->save ();
		if ($result) {
			$this->assign ( 'jumpUrl', "__APP__/user/index" );
			$this->success ( "操作成功" );
		} else {
			$this->error ( "操作失败，或您没有更新数据！" );
		}
	}
	//项目信息
	public function project() {
		$stuno = Session::get ( C ( 'USER_AUTH_KEY' ) );
		$User = M ( "User" );
		$result = $User->where ( "stuno=$stuno" )->find ();
		$Protable = M ( "Protable" );
		$uid = $result ['uid'];
		$isProtable = $Protable->where ( "uid=$uid" )->find ();
		$this->assign ( "isProtable", $isProtable );
		$this->assign ( "result", $result );
		$this->display ();
	}
	public function project_do() {
		$uid = $_POST ["uid"];
		$User = M ( "User" );
		$User->create ();
		$uid = $_POST ['uid'];
		$result = $User->where ( "uid=$uid" )->save ();
		if ($result) {
			$this->assign ( 'jumpUrl', "__APP__/user/index" );
			$this->success ( "操作成功" );
		} else {
			$this->error ( "操作失败，或您没有更新数据！" );
		}
	}
	//成员管理
	public function group() {
		$User = M ( "User" );
		$stuno = Session::get ( C ( 'USER_AUTH_KEY' ) );
		$result = $User->where ( "stuno=$stuno" )->find ();
		$Group = M ( "Group" );
		$uid = $result ["uid"];
		$gresult = $Group->where ( "uid=$uid" )->find ();
		$this->assign ( "result", $result );
		$this->assign ( "gresult", $gresult );
		$this->display ();
	}
	public function group_do() {
		$uid = $_POST ["uid"];
		$Group = M ( "Group" );
		$Group->create ();
		$result = $Group->where ( "uid=$uid" )->save ();
		if ($result) {
			$this->assign ( 'jumpUrl', "__APP__/user/group" );
			$this->success ( "操作成功" );
		} else {
			$this->error ( "操作失败，或您没有更新数据！" );
		}
	}
	//修改密码
	public function repassword() {
		$this->display ();
	}
	public function repassword_do() {
		$uid = $_POST ["uid"];
		$password = $_POST ["password"];
		$passwordMatch = $_POST ["passwordMatch"];
		if ($password != $passwordMatch) {
			$this->error ( "两次输入密码不一致！" );
		}
		if ($password == "" || $passwordMatch == "") {
			$this->error ( "密码不能为空！" );
		}
		$User = M ( "User" );
		$User->password = $password;
		$stuno = Session::get ( C ( 'USER_AUTH_KEY' ) );
		$result = $User->where ( "stuno=$stuno" )->save ();
		if ($result) {
			$this->assign ( 'jumpUrl', "__APP__/user/repassword" );
			$this->success ( "操作成功" );
		} else {
			$this->error ( "操作失败，或您没有更新密码！" );
		}
	}
}
?>