<?php 
/**
 * 用于登陆验证
 * @author zhaoyulee
 *
 */
class BaseAction extends Action{
    function _initialize(){
		header('Content-type:text/html;charset=utf-8');
        if(false == Session::get(C('USER_AUTH_KEY'))){
            redirect(PHP_FILE.C('USER_AUTH_GATEWAY'));
			//判断是否登录，未登录则跳到的登录页面
			//$this->display("Public:signup");
		}
    }
}
?>
