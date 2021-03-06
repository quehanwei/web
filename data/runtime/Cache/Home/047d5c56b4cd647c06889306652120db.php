<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie oldie ie6" lang="zh">
<![endif]-->
<!--[if IE 7]>
<html class="ie oldie ie7" lang="zh">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh">
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" lang="zh">
<![endif]-->
<!--[if gt IE 10]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>	
	
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
	<meta http-equiv="Cache-Control" content="no-siteapp"/>

	<!-- HTML5 shim for IE8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
	
	<link type="text/css" rel="stylesheet" href="/public/home/css/common.css"/>
	<link type="text/css" rel="stylesheet" href="/public/home/css/login.css"/>
	<link type="text/css" rel="stylesheet" href="/public/home/css/layer.css"/>

	<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>"/>
	<meta name="description" content="<?php echo ($site_seo_description); ?>"/>
	
	  <script>
        var YB_JS_CONF = window.YB_JS_CONF || {};
        YB_JS_CONF.hdType = '1080p';
        YB_JS_CONF.apiConf = {"login_api":{"getLoginUserInfo":"./index.php?m=user&a=getLoginUserInfo"},"follow_api":"./index.php?m=user&a=follow_"};
  	  </script> 
	
		<!-- 环信私信功能start -->
		<!--sdk-->
		<script src="/public/home/hxChat/js/strophe.js"></script>
		<script src="/public/home/hxChat/js/easemob.im-1.1.1.js"></script>
		<script src="/public/home/hxChat/js/easemob.im.shim.js"></script><!--兼容老版本(1.0.7含以前版本)sdk需引入此文件-->

		<!--config-->
		<script src="/public/home/hxChat/js/easemob.im.config.js"></script>

		<!--demo-->
		<script src="/public/home/hxChat/js/jquery-1.11.1.js"></script><!--此非jquery原生库，已经做过修改，环信功能必须调用-->
		<script src="/public/home/hxChat/js/bootstrap.js"></script>
		<link rel="stylesheet" href="/public/home/hxChat/css/webim.css" />

		<script type="text/javascript" src="/public/home/hxChat/js/webim.js"></script>

		<!-- 环信私信功能end -->
<title><?php echo ($site_name); ?></title>
<link type="text/css" rel="stylesheet" href="/public/home/css/index.css"/>
<meta property="wb:webmaster" content="76137f4bb6cc5dd4" />
</head>
<body>
<div class="wrapper">
		<div id="doc-hd" class="header double">
		<div class="topbar">
			<div class="container clearfix">
				<div class="hd-logo">
					<a href="#" class="links"></a>
				</div>
				<ul class="hd-nav">
					<li class="item"><a href="./" <?php if($current == 'index'): ?>class="current"<?php endif; ?> >首页</a></li>
<!-- 					<li class="item"><a href="#"  <?php if($current == 'follow'): ?>class="current"<?php endif; ?> >我的关注</a></li> -->
					<li class="item"><a href="./index.php?m=Category&a=index&cat=2"  <?php if($current == '2'): ?>class="current"<?php endif; ?> >女神驾到</a></li>
					<li class="item"><a href="./index.php?m=Category&a=index&cat=1"  <?php if($current == '1'): ?>class="current"<?php endif; ?> >国民男神</a></li>
					
				</ul>
				<div class="hd-login">
				  <?php if(!$user): ?><div class="no-login">
						<i class="icon-avatar"></i>
						<a href="###" class="tologin">登录/注册</a>
						<i class="icon-level"></i>
						<i class="icon-more"></i>
					</div>
					<?php else: ?>
					<div class="already-login">
						<a class="link" href="#"><i class="icon-avatar"><img src="<?php echo ($user['avatar']); ?>" alt=""/></i><span class="nickname"><?php echo ($user['user_nicename']); ?></span></a>
						<i class="icon-level"></i>
						<i class="icon-more"></i>
						<div class="userinfo">
							<div class="userinfo_up">
							</div>
							<div class="userinfo_down">
								<div class="userinfo_name">
									 <div class="live">
										<a href="./<?php echo ($user['id']); ?>">我的直播</a>
									</div>
									<div class="live">
										<a href="./index.php?m=Personal&a=index">个人中心</a>
									</div>									
									<div class="logout">
										【退出登录】
									</div>
								</div>
							</div>
						</div>
					</div><?php endif; ?>
					<div class="huajiaodou">
					  <?php if(!$user): ?><a ></a> 
					    <?php else: ?>
						 <a class="btn-huajiaodou" href="./index.php?m=Payment&a=index" target="_blank">充值</a><?php endif; ?>
						<!-- <a class="btn-huajiaodou" href="http://www.huajiao.com/economic/pc/cash.html" target="_blank">提现</a> -->
					</div> 
				</div>
				
				<div class="search-bar">
					<div class="search-hd">
					</div>
					<div class="search-bd">
						<form class="search-form" action="index.php?m=Index&a=translate" target="_top" method="post" name="search-form">
							<div class="search-input-wrap">
								<input  class="search-input" name="keyword" id="keyword" placeholder="请输入用户名或用户ID"/>
								<input type="submit" class="search-submit-btn"/>
							</div>
						</form>
					</div>
					<div class="search-ft">
						<div id="suggest-container" class="suggest-container" style="display:none;">
							<div class="suggest-bd">
							</div>
							<div class="suggest-ft">
							</div>
						</div>
					</div>
				</div>
				<!--
下线时将下面div元素的style改为"display:none;"
上线时将下面div元素的style改为"display:block;"X35
图片尺寸120X35
-->
				<!-- <div id="top-header-position" class="top-header-position" style="display:none;">
					<a target="_blank" href="#"><img src="http://p0.qhimg.com/t0135077f9010b04266.jpg"/></a>
				</div> -->
			</div>
		</div>
	</div>


	
    <div class="scroll_top">
			<div class="fullSlide">
				
				<div class="bd">
					<ul>
						<?php if(is_array($slide)): $k = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li _src="url(<?php echo ($vo["slide_pic"]); ?>)" ><a target="_blank" href="<?php echo ($vo["slide_url"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
		
				<div class="hd"><ul></ul></div>
				<span class="prev"></span>
				<span class="next"></span>
			</div>        	
    </div>		
	
	
	<div id="doc-bd">
		<div class="container clearfix">
			<div class="main clearfix">
				<div id="focuspic" class="focuspic feed-list">
					<ul class="list">
						<?php if(is_array($recommend)): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($i == '1'): ?><li class="special live feed"><a class="link clearfix" target="_blank" href="./<?php echo ($v['uid']); ?>">
							<img class="screenshot thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['thumb']); ?>"/>
							<p class="user">
								<span class="username"><?php echo ($v['user_nicename']); ?></span><span class="watches"><span class="sub"><?php echo ($v['nums']); ?></span></span>
							</p>
							</a></li>
						 <?php else: ?>
							 <li class="normal  <?php if($v['islive'] == '1'): ?>live<?php else: endif; ?> feed"><a class="link clearfix" target="_blank" href="./<?php echo ($v['uid']); ?>"><img class="screenshot thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['thumb']); ?>"/>
								<p class="user">
									<span class="username"><?php echo ($v['user_nicename']); ?></span><span class="watches"><span class="sub"><?php echo ($v['nums']); ?></span></span>
								</p>
								</a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<!-- 热门直播 -->
				<div class="g-box feed-list" id="hot">
					<div class="box-hd">
						<h2 class="box-title"><span class="icon"></span>热门直播</h2>
					<!-- 	<a class="box-more" href="/category/1">查看更多 &gt;&gt;</a> -->
					</div>
					<div class="box-bd">
						<ul class="list">
						  <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="feed <?php if($v['islive'] == '1'): ?>live<?php else: endif; ?> "><a class="link" href="./<?php echo ($v['uid']); ?>" target="_blank"><img class="screenshot thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['thumb']); ?>"/>
							<p class="user">
								<img class="avatar thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['avatar']); ?>"/><span class="username"><?php echo ($v['user_nicename']); ?></span>
							</p>
							<div class="comment">
								<div class="comment-inner">
									<?php if($v['title']): echo ($v['title']); ?>
									<?php else: ?>
										此处应该有互动<?php endif; ?>
								</div>
							</div>
							</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</ul>
					</div>
				</div>				
				<!-- 正在直播 -->
				<div class="g-box feed-list" id="living">
					<div class="box-hd">
						<h2 class="box-title"><span class="icon"></span>正在直播</h2>
					</div>
					<div class="box-bd">
						<ul class="list">
						  <?php if(is_array($live)): $i = 0; $__LIST__ = $live;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="feed <?php if($v['islive'] == '1'): ?>live<?php else: endif; ?>"><a class="link" href="./<?php echo ($v['uid']); ?>" target="_blank"><img class="screenshot thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['thumb']); ?>"/>
							<p class="user">
								<img class="avatar thumb" src="/public/home/images/lazyload.png" data-original="<?php echo ($v['avatar']); ?>"/><span class="username"><?php echo ($v['user_nicename']); ?></span>
							</p>
							<div class="comment">
								<div class="comment-inner">
									<?php if($v['title']): echo ($v['title']); ?>
									<?php else: ?>
										此处应该有互动<?php endif; ?>
								</div>
							</div>
							</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="side clearfix">
				<div class="download">
					<div class="headline">
						<a target="_blank"><img src="http://p0.qhimg.com/t012fba3e01107b75a7.jpg" width="100%" alt=""/>
						<div class="logo-slogan">
						</div>
						</a>
					</div>
					<div class="btns clearfix">
						<a href="<?php echo ($config['app_android']); ?>" class="btn-android" target="_blank"></a>
						<a href="<?php echo ($config['app_ios']); ?>" class="btn-iphone" target="_blank"></a>
					</div>
					<dl class="qrcode">
						<dt class="title">
						<span>或扫描二维码下载直播APP</span>
						</dt>
						<dd class="pic">
						<img src="<?php echo ($config['qr_url']); ?>" alt=""/>
						</dd>
					</dl>
				</div>
				<div class="sidebar">
					<div class="g-box" id="author-top">
						<div class="box-hd">
							<h2 class="box-title"><span class="icon"></span>主播排行榜</h2>
							<a href="" class="box-more"></a>
						</div>
						<div class="box-bd">
							<ul class="rank-list">
							  <?php if(is_array($anchorlist)): $i = 0; $__LIST__ = $anchorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="item" data-userid="<?php echo ($v['uid']); ?>">
								<a href="./<?php echo ($v['uid']); ?>" class="link">
									<div class="avatar">
										<img src="<?php echo ($v['userinfo']['avatar']); ?>" width="45" height="45" alt=""/>
										<span class="icon icon-top rank-<?php echo ($i); ?>"></span>
									</div>
									<div class="nickname">
										<?php echo ($v['userinfo']['user_nicename']); ?>
									</div>
								</a>
								<div class="fans">
									<span class="icon icon-top"></span> <?php echo ($v['light']); ?>
								</div>
								 <?php if($v['isAttention'] == '1'): ?><a href="###" class="btn-follow j-follow followed">已关注</a></li>
								 <?php else: ?>
									<a href="###" class="btn-follow j-follow ">+关注</a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

							</ul>
						</div>
					</div>
					<div class="g-box" id="topic-plan">
						<div class="box-hd">
							<h2 class="box-title"><span class="icon"></span>专题策划</h2>
							<a href="" class="box-more"></a>
						</div>
						<div class="box-bd">
							<?php if(is_array($ads)): $i = 0; $__LIST__ = array_slice($ads,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="topic">
								<div class="pic">
									<a href="<?php echo ($v['url']); ?>" target="_blank"><img src="<?php echo ($v['thumb']); ?>" width="245" height="130" alt=""/><span class="mask"></span></a>
								</div>
								<div class="content">
									<h3 class="title"><a href="<?php echo ($v['url']); ?>" target="_blank"><?php echo ($v['name']); ?></a></h3>
									<p class="desc">
										<?php echo ($v['des']); ?>
									</p>
									<p class="more">
										<!-- <a href="<?php echo ($ads[0]['url']); ?>" target="_blank">查看详情</a> -->
									</p>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="doc-ft">
		<div class="container">
			<p class="footer">
				泰安云豹网络科技有限公司 地址：山东省泰安市泰山区万达广场8号楼2405 电话：0538-8270220
			</p>
			<p class="footer">
				Copyright©  2012-2016, ICP备15017218号-1
			</p>
		</div>
	</div>
		
	 <!--  <script src="/public/home/js/jquery.1.10.2.js"></script>  -->
		<script src="http://yunbaolivein.oss-cn-hangzhou.aliyuncs.com/yunbaozhibo/jquery.1.10.2.js"></script> 
		<script src="http://yunbaolivein.oss-cn-hangzhou.aliyuncs.com/yunbaozhibo/jquery.lazyload.min.js"></script> 
<!-- 	  <script src="/public/home/js/jquery.lazyload.min.js"></script> -->
		<script type="text/javascript">
			window._DATA = window._DATA || {};
			window._DATA.user = <?php echo ($userinfo); ?>;
		</script> 
		<script type="text/javascript" src="/public/home/js/login.js"></script> 
		<script type="text/javascript" src="/public/home/js/layer.js"></script> 


	<!--
下线时将下面div元素的style改为"display:none;"
上线时将下面div元素的style改为"display:block;"
图片尺寸100X100
-->
	<div id="right-fixed-position" class="right-fixed-position" style="display:none;" >
		<a href="#" class="close"></a>
		<a href="#" class="link" target="_blank"><img src="#"/></a>
	</div>
</div>
<script type="text/javascript" src="http://yunbaolivein.oss-cn-hangzhou.aliyuncs.com/yunbaozhibo/jquery.SuperSlide.2.1.1.js"></script>  
<script>
(function(){
	/* 控制左右按钮显示 */
	jQuery(".fullSlide").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });

	/* 调用SuperSlide */
	jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
		startFun:function(i){
			var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
			if( !!curLi.attr("_src") ){
				curLi.css("background-image",curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
			}
		}
	});	
})()
</script>
<script>
$(function(){
	//图片延迟加载
	$("img.thumb").lazyload({effect: "fadeIn"});		
})
</script>

</body>
</html>