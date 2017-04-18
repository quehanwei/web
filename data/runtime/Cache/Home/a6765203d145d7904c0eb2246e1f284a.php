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
<title>充值页面</title>

<link type="text/css" rel="stylesheet" href="/public/home/css/payment.css"/>
</head>
<body>

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



<div class="wrapper">


<div id="doc-bd">
    <div id="charge-container" class="container clearfix">
        <div class="side">
            <ul class="sidebar">
                <li class="active">
                    <a href="#">钻石充值</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <ul class="breadcrumb clearfix">
                <li class="step1 active">
                    1.确认支付信息
                </li>
                <li class="step2">
                    2.扫码支付
                </li>
                <li class="step3">
                    3.支付成功
                </li>
            </ul>
			<div style="display:block" id="xuanze">
				<form id="fpost" action="/index.php/Home/Payment/chargepay/" method="post">
					<input type="hidden" name="changeid" value="<?php echo ($lists[0]['id']); ?>" id="changeid">
					<input type="hidden" name="c_PPPayID" value="zhifubao" id="c_PPPayID">
					<ul class="chargebox">
						<li class="step1 active">
							<div class="row user-info clearfix">
								<div class="label">
									当前充值账号：
								</div>
								<div class="content clearfix">
									<a href="#" class="red" target="_blank">
										<b class="nickname"><?php echo ($user["user_nicename"]); ?></b>
										<b class="uid">(<?php echo ($user["id"]); ?>)</b>
									</a>
									 <span class="balance-label">您的钻石余额：<b class="red balance"><?php echo ($user["coin"]); ?></b></span>
								 </div>
							</div>
							<div class="row charge-select clearfix">
								<div class="label">
									充值数量：
								</div>
								<div class="content">
									<ul id="package-list" class="package-list clearfix" >
										<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="item <?php if($i == 1): ?>active<?php endif; ?>" data-amount="<?php echo ($v['coin']); ?>" data-price="<?php echo ($v['money']); ?>" data-id="<?php echo ($v['id']); ?>">
											<a data-text="<?php echo ($v['money']); ?>" href="javascript:void(0);">
												<b class="amount"><?php echo ($v['name']); ?> <?php if($v['give'] > 0): ?><span>送<?php echo ($v['give']); ?></span><?php endif; ?></b>
												<b class="price">¥<?php echo ($v['money']); ?></b>
											</a>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</div>
							<div class="row charge-cost clearfix">
								<div class="label">
									应付金额：
								</div>
								<div class="content">
									<b id="c_Money1" class="cost red"><?php echo ($lists[0]['money']); ?></b>元
								</div>
							</div>
							<div class="row charge-source clearfix">
								<div class="label">
									支付平台：
								</div>
								<div class="content">
									<ul id="charge-source-list" class="charge-source-list clearfix" bk="">
									<?php if($getConfigPri['aliapp_pc'] == '1'): ?><li class="item alipay "  data-index="0" data-source="ali" data-title="支付宝">
											<a href="javascript:void(0);" data-text="支付宝">
												<img src="/public/home/images/zhifubao.jpg">
											</a>
										</li><?php endif; ?>
									<?php if($getConfigPri['wx_switch_pc'] == '1'): ?><li class="item weixin"  data-index="1" data-source="wx" data-title="微信支付">
											<a href="javascript:void(0);" data-text="微信支付">
												<img src="/public/home/images/weixin.jpg">
											</a>
										</li><?php endif; ?>
									</ul>
								</div>
							</div>
							<div class="row charge-submit clearfix">
								<div class="content">
									<?php if($getConfigPri['aliapp_pc'] == '1' OR $getConfigPri['wx_switch_pc'] == '1'): ?><a class="btn btn-submit" href="javascript:charge_submit();" >立即支付</a>
									<?php else: ?>
										<a class="btn btn-submit">本网站未开通支付</a><?php endif; ?>
									<div class="charge-errormsg ">
										<img src=""><span class="msg red"></span>
									</div>
								</div>
							</div>
				   
					  
						
					   </li>
					</ul>
				</form>
			</div>			
        </div>
    </div>
</div>

<div class="chargecover"></div>
<div class="charge-pay-tip">
    <div class="qrcode-container">
    </div>
    <div class="btn-group">
        <a class="btn btn-complete" href="javascript:void(0);">支付完成</a>
        <a class="btn btn-problem" target="_blank" href="http://bbs.360safe.com/forum.php?mod=viewthread&amp;tid=6999505&amp;page=1">遇到问题?</a>
    </div>
</div>
<div class="charge-bankpay-tip">
    <div class="title">
        请支付订单
        <a class="close modify" href="javascript:void(0);">×</a>
    </div>
    <div class="content">
        <div class="tip">
            请您在<strong class="timer"><span class="hour">2</span>小时<span class="minute">0</span>分<span class="second">0</span>秒</strong>内，在新打开的支付页面中完成支付...
        </div>
        <div class="btn-group">
            <a class="btn btn-complete" href="javascript:void(0);">支付完成</a>
            <a class="btn btn-problem" target="_blank" href="http://bbs.360safe.com/forum.php?mod=viewthread&amp;tid=6999505&amp;page=1">遇到问题?</a>
        </div>
        <div class="tail">
            <a class="modify" href="javascript:void(0);">&lt;返回修改支付方式</a>
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



<script type="text/javascript" src="http://yunbaolivein.oss-cn-hangzhou.aliyuncs.com/yunbaozhibo/jquery.SuperSlide.2.1.1.js"></script>  
<script type="text/javascript" src="/public/home/js/Payment.js"></script>



</body>
</html>