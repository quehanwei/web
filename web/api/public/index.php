<?php
/**
 * $APP_NAME 统一入口
 */
require_once dirname(__FILE__) . '/init.php';

//装载你的接口
DI()->loader->addDirs('Appapi');

/** ---------------- 响应接口请求 ---------------- **/

function pd($args){
	echo '<pre>';
	print_r($args);die;
}
function dd($args){
	echo '<pre>';
	var_dump($args);die;
}
$api = new PhalApi();
$rs = $api->response();
$rs->output();


