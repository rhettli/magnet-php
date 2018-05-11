<?php

define("SP_PATH",dirname(__FILE__)."/SpeedPHP");

define("APP_PATH",dirname(__FILE__));

$spConfig = array(

	"db" => array(

		'host' => '127.0.0.1', //主机地址

		'login' => 'root', //数据库账号

		'password' => 'root', //数据库密码

		'database' => 'ssbc', //数据库名

	),

	'view' => array(

		'enabled' => TRUE, // 开启视图

		'config' =>array(

			'template_dir' => APP_PATH.'/tpl', // 模板目录

			'compile_dir' => APP_PATH.'/tmp', // 编译目录

			'cache_dir' => APP_PATH.'/tmp', // 缓存目录

			'left_delimiter' => '<{',  // smarty左限定符

			'right_delimiter' => '}>', // smarty右限定符

		),

	),

    'launch' => array( // 加入挂靠点，以便开始使用Url_ReWrite的功能

        'router_prefilter' => array(

            array('spUrlRewrite', 'setReWrite'),  // 对路由进行挂靠，处理转向地址

        ),

        'function_url' => array(

            array("spUrlRewrite", "getReWrite"),  // 对spUrl进行挂靠，让spUrl可以进行Url_ReWrite地址的生成

        ),

    ),

       'dispatcher_error' => "import(APP_PATH.'/404.html');exit();",//404

       'mode' => 'release' // 默认的调试模式

	   

    

  

);



require(SP_PATH."/SpeedPHP.php");//载入入口程序

//载入搜索主程序

//import('ff.php');

//import('ss.php');

//import('rd.php');


header("Cache-Control:max-age=171605");
$expires = gmdate('D, d M Y H:i:s', time() + 17600) . ' GMT'; 

header("Expires:$expires");

//var_dump($_SERVER['PHP_SELF']);
#var_dump($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);


spRun(); // SpeedPHP 3新特性




