<?php
if (!defined('THINK_PATH')) exit();
return array(
	'APP_DEBUG'=>false,
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'127.0.0.1',
	'DB_NAME'=>'bjtuxrpf_xrpf',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'xrpf_',
	'URL_CASE_INSENSITIVE' => true,
	'USER_AUTH_KEY' =>'stuno',
	'USER_AUTH_GATEWAY'=>'/public/login',
	'ADMIN_AUTH_GATEWAY'=>'/admin/index'
);
?>