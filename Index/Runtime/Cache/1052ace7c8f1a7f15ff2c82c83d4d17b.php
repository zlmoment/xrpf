<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>管理员登陆</title>
<link href="__PUBLIC__/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="main_nav">
	<div id="main_nav_box">
		<div id="logo">
			<a href="__APP__">xrpf</a>
		</div>
		<ul>
			<li><a href="__APP__">首 页</a></li>
			<li><a href="__APP__/publish/index">公 告</a></li>
			<li><a href="__APP__/publish/about">比赛说明</a></li>
			<li><a href="__APP__/public/leavemessage">留 言</a></li>
			<li><a href="__APP__/user"><?php if(Session::get(C('USER_AUTH_KEY'))) echo "我的小组"; else echo "组长登录" ?></a></li>
			
		</ul>
	</div>
</div>

	<div id="wrap">
		<div id="sign_form">
			<h2>管理员登陆</h2>
			<form id="login-form" method="post"
				action="__APP__/admin/login_do">
				<div class="row relative">
					<label>用户名</label> <input
						id="id_username" type="text" name="username">
				</div>

				<div class="row relative">
					<label>密码</label> <input id="id_password"
						type="password" name="password">
				</div>

				<div class="row">
					<button type="submit" class="btn">登 录</button>
				</div>
			</form>
		</div>
	</div>

	<div id="footer">
	<div id="site_nav">
		<a href="__APP__">主页</a>| 
		<a href="__APP__/publish/index">公告</a>| 
		<a href="__APP__/publish/about">比赛说明</a>| 
		<a href="__APP__/admin">管理员登录</a>
	</div>
	<div id="copyright">
		&copy; 2012 <a href="http://www.bjtuxrpf.com">BjtuXRPF.com</a>. Powered by BJTU软件科协研发中心.
	</div>
</div>
</body>
</html>