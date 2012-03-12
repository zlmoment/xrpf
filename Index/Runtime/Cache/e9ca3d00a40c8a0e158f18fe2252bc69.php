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
		<div id="banner">
			<ul class="tabs_content">
				<li style="display: list-item;">
				<a href="#">
					<p>
						<img src="__PUBLIC__/images/slides.png" width="950" height="250">
					</p>
				</a>
				</li>
			</ul>
		</div>
		<div class="contact_tool tip_message">
	    	<span>主办方：北京交通大学软件科协 | 技术支持：BJTU软件科协研发中心</span>
        	<a href="__APP__/publish/about">查看比赛详情</a>
		</div>
		<div id="xrpf_info">
	        <dl>
	            <dt>大赛目的</dt>
	            <dd>为了激发学生对技术的热爱，实践软件开发方法、培养更多的复合型的现代优秀人才，软件工程专业自2002年成立每学年推出“新软攀峰”课外科研项目竞赛。</dd>
	        </dl>
	        <dl>
	            <dt>大赛宗旨</dt>
	            <dd>“新软攀峰”计划为全校同学提供一个平台。引导同学循序渐进，攀上一座比一座高的技术高峰，造就一批批软件尖峰人才。</dd>
	        </dl>
	        <dl>
	            <dt>参赛方法</dt>
	            <dd>参赛者可跨院系年级自由组队，比赛类型分为设计组和创意组，具体组队要求、参赛方法、时间安排等请参看本站比赛说明。</dd>
	        </dl>
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