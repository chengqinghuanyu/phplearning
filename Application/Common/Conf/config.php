<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE' => true,
	'URL_MODEL' => 1,
	'LODA_EXT_CONFIG' => 'db',
	'MD5_PRE' => 'sing_cms',
	'DB_TYPE' => 'mysqli',//数据库类型低的版本不支持mysq需要修改为mysqlli
	'DB_HOST' => '127.0.0.1',//数据库地址
	'DB_USER' => 'root',//数据库用户名
	'DB_PWD' => '',//数据库密码
	'DB_PORT' => '3306',//表端口
	'DB_NAME' => 'imooc_singcms',//表名字
	'DB_CHARSET' => 'UTF-8',//数据库字符类型
	'DB_PREFIX' => 'cms_',//表前缀
	'DB_DEBUG'  =>  true,// 数据库调试模式 开启后可以记录SQL日志
);
?>