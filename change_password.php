<?php 
	include "include/init.php";

	if(isset($_COOKIE['id'])){
		$id = $_COOKIE['id'];

		$sql = "SELECT * FROM wd_use WHERE user_id = $id";
		$use = sql_fn($sql);
		if($_POST){
			if($_POST['pass'] == "" || $_POST['new_pass1'] == "" || $_POST['new_pass2'] == ""){
				alert("请输入密码");
			}

			$pass = md5($_POST['pass']);
			$pass1 = md5($_POST['new_pass1']);
			$pass2 = md5($_POST['new_pass2']);
			// echo $pass."<br>";
			// echo $pass1."<br>";
			// echo $pass2."<br>";
			// echo "<pre>";
			// print_r($use[0]['user_password']);
			// exit;
			if(($pass != $use[0]['user_password']) || ($pass1 != $pass2)){

			}else{
				$sql = "UPDATE wd_use SET user_password='$pass1' WHERE user_id=$id";
				mysql_query($sql);
				echo "<script>
					var icon = document.getElementById('icon_check');
					icon.style.display = 'none';
				</script>";
				alert("密码修改成功!");
			}
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-修改密码</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/change_password.css">
	<link rel="stylesheet" href="css/playImg.css">
	<style>
	</style>
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_nav">
			<nav>
				<a href="index.html">首页</a>
				&gt;
				<a href="user_info.html">用户中心</a>
			</nav>
		</div>
		<div class="main">
			<div class="main_left">
				<div class="phone">
					<div><img src="images/user_01.gif" alt=""></div>
					<p>username</p>
				</div>
				<a href="user_info.php"><p class="p1">基本信息</p></a>
				<a href="message.php"><p>客户留言</p></a>
			</div>
			<div class="main_right">
				<h1>修改密码</h1>
				<form action="" method="post">
				<table>
					<tr>
						<td>用户名</td>
						<td><?php echo $use[0]['user_name'] ?></td>
					</tr>
					<tr>
						<td>原密码</td>
						<td>
							<input class="txt txt_01" type="password" placeholder="请输入原密码" name="pass" id="" value="">
						</td>
					</tr>
					<tr id="icon_check">
						<td>&nbsp;</td>
						<td>
							<p class="pass_p">密码有误，请重新验证</p>
						</td>
					</tr>
					<tr>
						<td>设置新密码</td>
						<td>
							<input class="txt" type="password" placeholder="请输入密码" name="new_pass1" id="">
						</td>
					</tr>
					<tr>
						<td>确认新密码</td>
						<td>
							<input class="txt" type="password" placeholder="请输入密码" name="new_pass2" id="">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="submit">
							<input type="submit" value="确认修改">
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
		<div class="bottom"></div>
		<div class="foot">
			<p>粤ICP备12022584号-3</p>
			<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
		</div>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>