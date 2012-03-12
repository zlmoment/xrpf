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
		<div class="profile_wrap">
			<div id="leftbg"></div>
			<div id="left">
				<ul id="profile_menu">
					<li><a href="#">小组资料</a>
						<ul class="submenu">
							<li class="active"><a href="__APP__/user/index">个人资料</a></li>
							<li><a href="__APP__/user/repassword">密码修改</a></li>
							<li><a href="__APP__/user/group">成员管理</a></li>
							<li><a href="__APP__/user/project">项目信息</a></li>
						</ul></li>
					<li><a href="#">项目跟踪</a>
						<ul class="submenu">
							<li><a href="__APP__/handin/step1">提交立项表</a></li>
							<li><a href="__APP__/handin/step2">提交中期报告</a></li>
							<li><a href="__APP__/handin/step3">提交终期报告</a></li>
						</ul></li>
					<li><a href="#">成果提交</a>
						<ul class="submenu">
							<li><a href="__APP__/handin/finalproject">成果提交</a></li>
						</ul></li>
					<li><a href="#">操作</a>
						<ul class="submenu">
							<li><a href="__APP__/public/login">退出系统</a></li>
						</ul></li>

				</ul>
			</div>
			<div id="right">
				<div class="relative">
					<form id="profile-form" class="form profile"
						action="__APP__/user/index_do" method="post">
						
						<div style="display: none">
							<input type="hidden" name="uid" value="<?php echo ($result["uid"]); ?>"/>
						</div>

						<div class="row relative">
							<label>姓名：</label>
							<input name="username" type="text" value="<?php echo ($result["username"]); ?>">
						</div>
						<div class="row relative">
							<label>学号：</label>
							<input name="stuno" type="text" value="<?php echo ($result["stuno"]); ?>">
						</div>
						<div class="row relative">
							<label>邮箱：</label>
							<input name="email" type="text" value="<?php echo ($result["email"]); ?>">
						</div>
						<div class="row relative">
							<label>手机：</label>
							<input name="phone" type="text" value="<?php echo ($result["phone"]); ?>">
						</div>

						<div class="row radio_input">
							<label>年级：</label>
							<ul>
								<li><label>
								<input <?php if($result['grade']==1) echo "checked=\"checked\""; ?> name="grade" value="1" type="radio"> 大一</label>
								</li>
								<li><label>
								<input <?php if($result['grade']==2) echo "checked=\"checked\""; ?> name="grade" value="2" type="radio"> 大二</label>
								</li>
								<li><label>
								<input <?php if($result['grade']==3) echo "checked=\"checked\""; ?> name="grade" value="3" type="radio"> 大三</label>
								</li>
								<li><label>
								<input <?php if($result['grade']==4) echo "checked=\"checked\""; ?> name="grade" value="4" type="radio"> 大四</label>
								</li>
								<li><label>
								<input <?php if($result['grade']==5) echo "checked=\"checked\""; ?> name="grade" value="5" type="radio"> 其它</label>
								</li>
							</ul>
						</div>

						<div class="row">
							<button type="submit" class="btn">保 存</button>
						</div>
						
					</form>
				</div>

			</div>
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