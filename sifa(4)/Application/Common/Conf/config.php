<?php
return array(
	//'配置项'=>'配置值'
	"APP_BEGIN" => array("Getcoding"),//设置编码
	'MODEL_ALLOW_LIST' => array('Home','Admin'),

	'DEFAULT_MODEL' => 'Home',//默认模块
	'DEFAULT_CONTROLLER' => 'Index',//默认控制器
	'DEFAULT_ACTION' => 'Index',//默认操作
	'URL_MODEL' => 3,//URL模式
	'SESSION_AUTO_START' => ture,//开启session
	//ini_set("session.gc_divisor", 1),//每次请求时有1/1000的机会启动"垃圾回收"进程
	//ini_set("session.gc_maxlifetime", 300),//指定session的生命周期
	//ini_set("session.cookie_lifetime", 10), //指定cookie的生命周期
	'SHOW_PAGE_TRACE' => false,//是否显示右下角的trace
	'DEFAULT_JSONP_HANDLER' =>  'myJsonpReturn', // 默认JSONP格式返回的处理方法
		
	//数据库配置
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'sifa1', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '',  // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'sf_', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
);