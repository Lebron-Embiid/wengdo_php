<?php 
	include "include/init.php";

	//用户
	if(isset($_COOKIE['id'])){
		$id = $_COOKIE['id'];

		$sql = "SELECT * FROM wd_use WHERE user_id = $id";
		$use = sql_fn($sql);

		if($_POST){
			$username = $_POST['username'];
			$realname = $_POST['realname'];
			$sex = $_POST['sex'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$birth = $_POST['birth'];
			$sql = "UPDATE wd_use SET user_name='$username',user_real_name='$realname',user_sex='$sex',user_phone='$phone',user_email='$email',user_birthday='$birth' WHERE user_id=$id";
			mysql_query($sql);
			alert("保存成功!");
		}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-修改个人信息</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/change_message.css">
	<link rel="stylesheet" href="css/playImg.css">
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
				<h1>基本信息</h1>
				<form action="" method="post">
				<table>
					<tr>
						<td>用户名</td>
						<td>
							<input class="txt" type="text" placeholder="<?php echo $use[0]['user_name'] ?>" name="username" id="" value="<?php echo $use[0]['user_name'] ?>">
						</td>
					</tr>
					<tr>
						<td>真实姓名</td>
						<td>
							<input class="txt" type="text" placeholder="请输入姓名" value="<?php echo $use[0]['user_phone'] ?>" name="realname" id="">
						</td>
					</tr>
					<tr>
						<td>性别</td>
						<td>
							<input type="radio" name="sex" id="man" value="1" checked>
							<label for="man">男</label>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="sex" id="woman" value="0" >
							<label for="woman">女</label>
						</td>
					</tr>
					<tr>
						<td>手机</td>
						<td>
							<input class="txt" type="text" placeholder="请输入手机号" name="phone" id="" value="<?php echo $use[0]['user_phone'] ?>">
						</td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>
							<input class="txt" type="text" placeholder="请输入邮箱" name="email" id="" value="<?php echo $use[0]['user_email'] ?>">
						</td>
					</tr>
					<tr>
						<td>生日</td>
						<td>
							<input class="txt" type="text" placeholder="请输入您的生日" value="<?php echo $use[0]['user_birthday'] ?>" name="birth" id="">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="submit">
							<input type="submit" value="保存">
							<a href="change_password.php">修改密码</a>
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