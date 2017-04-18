<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class TiXianController extends AdminbaseController{
protected $attribute;
	
	function _initialize() {
		parent::_initialize();
		$this->attribute = D("Common/Attribute");
	}
	
	function index(){
		$config=M("config_private")->find(1);

		$this->assign('config',$config);

		$this->display();
	}
	
	
	function set_post(){
		if(IS_POST){
				
			$config=I("post.post");
				
			/* $attribute2=M("attribute")->field("name,type")->where("type='editor' or type='checkbox'")->select();
				foreach( $attribute2 as $vo){
			switch($vo['type']){
			case 'editor':
			$config[$vo['name']]=htmlspecialchars_decode($config[$vo['name']]);
			break;
			case 'checkbox':
			$config[$vo['name']]=implode(",",$config[$vo['name']]);
			break;
			default:
	
			break;
	
			}
	
			} */
	
			if (M("config_private")->where("id='1'")->save($config)!==false) {
				$this->success("保存成功！");
			} else {
				$this->error("保存失败！");
			}
	
		}
	}
}

