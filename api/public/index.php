<?php
/**
 * $APP_NAME 统一入口
 */

require_once dirname(__FILE__) . '/init.php';
<<<<<<< HEAD
=======
function pd($args){
	echo '<pre>';
	print_r($args);die;
}
function dd($args){
	echo '<pre>';
	var_dump($args);
}
>>>>>>> 44957bbe60877878268fbcc85720e0bd31ebe8bc

//装载你的接口
DI()->loader->addDirs('Appapi');

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();

