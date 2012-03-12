<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>新软攀峰官方网站</title>
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
		<div class="relative">
			<h2>留言</h2>
			<div id="seperateline"></div>
			<form id="msg-form" method="post"
				action="__APP__/public/leavemessage_do">
				<div class="row relative">
					<p><label>您的学号（对您留言的回复将发送到<span style="color:blue">学号@bjtu.edu.cn</span>邮箱）</label> </p>
					<p><input type="text" name="stuno"></p>
				</div>

				<div class="row relative">
					<p><label>您的姓名（可选）</label> </p>
					<p><input type="text" name="stuname"></p>
				</div>
				
				<div class="row relative">
					<p><label>留言内容</label> </p> 
					<p><textarea name="msgcontent" style="width:350px;height:150px;"></textarea></p>
				</div>

				<div class="row">
					<button type="submit" class="btn">提 交</button>
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