<?php 
	include "include/init.php";

	if($_POST){
		if($_POST['username'] == ""){
			alert("请输入用户名","login.php");
		}
		if($_POST['pass'] == ""){
			alert("请输入密码","login.php");
		}
		$user = $_POST['username'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT * FROM wd_use WHERE user_name='$user'";
		$res = getArr($sql);
		
		if($res){
			if($pass == $res['user_password']){
				setcookie("log",1);
				setcookie("id",$res['user_id']);
				alert("登录成功","index.php");
			}else{
				alert("密码错误","login.php");
			}
		}else{
			alert("用户名不存在!","login.php");
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-登录页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<header>
			<div class="head_nav">
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
				<p class="txt_input txt_inp01">
					<input type="text" name="username" placeholder="用户名" id="">
				</p>
				<p class="txt_input txt_inp02">
					<input type="password" name="pass" placeholder="密 码" id="">
				</p>
				<p class="check">
				<input type="checkbox" name="autolog" id="">
				<span>自动登录</span>
				<a href="">忘记密码</a>
				</p>
				<div class="pas">
					<div></div>
					<img src="images/demo_01.gif" alt="">
					<a href="">看不清楚换一张</a>
				</div>
				<input class="submit" type="submit" value="登录">
				<a class="register" href="register.php">免费注册</a>
			</form>
		</div>

		<div class="foot">
			<p>粤ICP备12022584号-3</p>
			<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
		</div>
	</div>
</body>
</html>