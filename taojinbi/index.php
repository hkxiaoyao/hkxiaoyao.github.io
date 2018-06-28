<?php include "inc/ini.php"?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php ECHO $dedeyun["title"]?></title>
<meta name="description" content="优购">
<meta name="keywords" content="本站是一个免费的淘金币一键领取网站 可用于购物抵用。">
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style>
body{
margin: 0 auto;
text-align: center;
}
.container {
max-width: 580px;
padding: 15px;
margin: 0 auto;
}


</style>
</head>
<body>
<body style="background-image: url(http://www.pptbz.com/pptpic/UploadFiles_6909/201406/2014061415430467.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
<div class="container">
<div class="header">
<ul class="nav nav-pills pull-right" role="tablist">
<li role="presentation" class="active"><a href="index.php">领取金币</a></li>
<li role="presentation"><a href="http://www.taoxiaomai.cc">官方网站</a></li>
</ul>
<h3 class="text-muted" align="left">淘金币小工具</h3>
</div>
<hr>
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
<div class="panel-heading bk-bg-primary">
<h6><span class="panel-title">淘金币小工具</span></h6>
</div>
<div class="panel-body">
 <a class="btn btn-danger btn-block bk-margin-top-10" type="submit" href="https://login.taobao.com/" rel="external nofollow" target="_blank">登录淘宝</a><br>
						<a class="btn btn-success btn-block bk-margin-top-10" href="#Coin" role="button" id="receive" >点击领取</a><a id="update"></a><br>
						
						<a class="btn btn-warning btn-block bk-margin-top-10" target="_blank" href="https://taojinbi.taobao.com/coin/userCoinDetail.htm">查看记录</a></div>
<div id="coin" class="coin"><script>var Coin = true;</script></div>
<script src="js/tjb.js"></script>

<div class="panel-body">
<?php ECHO $dedeyun["gg"]?></div>

				<hr><div class="container-fluid">
  <a href="http://jq.qq.com/?_wv=1027&k=45WTCOb" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-credit-card"></span> 加群</a> 
  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php ECHO $dedeyun["kfqq"]?>&site=qq&menu=yes" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> 反馈</a>
</div>
<p style="text-align:center"><br>&copy; Powered by <a href="http://www.taoxiaomai.cc">优购——一个淘宝优惠券分享网站</a>!</p></div>
</body>
</html>
</body>
</html>