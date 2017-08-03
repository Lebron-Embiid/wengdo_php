<?php 
	include "include/init.php";

	if($_POST){
		if($_POST['username'] == ""){
			alert("请输入用户名","register.php");
		}
		if($_POST['pass'] == ""){
			alert("请输入密码","register.php");
		}
		$user = $_POST['username'];
		$pass = md5($_POST['pass']);
		$pass1 = md5($_POST['pass1']);
		if($pass != $pass1){
			alert("密码输入不一致","register.php");
		}
		$sql = "INSERT INTO wd_use(user_name,user_password) VALUES('$user','$pass')";
		mysql_query($sql);
		alert("注册成功!","login.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-注册页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<header>
			<div class="head_nav" id="head_scroll">
				<a href="index.php">
					<img class="logo" src="images/logo_01.png" alt="">
				</a>
				<nav>
					<?php foreach($nav as $val){ ?>
					<a href="<?php echo $val['nav_link'] ?>"><?php echo $val['nav_name'] ?></a>
					<?php } ?>
					<a href="index.php">
						<img src="images/nav_s.png" alt="">
					</a>
				</nav>
			</div>
			<div class="banner">
				<div id="con">
					<ul>
						<li><img id="img_one" src="images/log.jpg" alt=""></li>
						<li><img src="images/log.jpg" alt=""></li>
						<li><img src="images/log.jpg" alt=""></li>
						<li><img src="images/log.jpg" alt=""></li>
						<li><img src="images/log.jpg" alt=""></li>
					</ul>
					<a id="prev" href="javascript:;"><img src="images/ban_prev.png" alt=""></a>
					<a id="next" href="javascript:;"><img src="images/ban_next.png" alt=""></a>
					<ol>
						<li class="oli"></li>
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			</div>
		</header>
		<div class="log">
			<div class="phone"><img src="images/user_01.gif" alt=""></div>
			<h1>用户登录</h1>
			<form action="" method="post">
				<div class="clear"></div>
				<p class="txt_input txt_inp01">
					<input type="text" name="username" placeholder="用户名" id="">
				</p>
				<p class="txt_input txt_inp02">
					<input type="password" name="pass" placeholder="密 码" id="">
				</p>
				<p class="txt_input txt_inp02">
					<input type="password" name="pass1" placeholder="重复密码" id="">
				</p>
				<p class="txt_input txt_inp03">
					<input type="text" name="phone" placeholder="手机号" id="">
				</p>
				<div class="pas">
					<input type="text" name="demo" id="" placeholder="手机验证码">
					<a href="javascript:;">获取验证码</a>
				</div>
				<input class="submit" type="submit" value="立即注册">
				<a class="register" href="login.php">以后账号，登录文豆</a>
			</form>
		</div>

		<div class="foot">
			<p>粤ICP备12022584号-3</p>
			<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
		</div>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>