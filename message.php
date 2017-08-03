<?php 
	include "include/init.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-留言页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/message.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_nav">
			<nav>
				<a href="index.php">首页</a>
				&gt;
				<a href="">用户中心</a>
			</nav>
		</div>
		<div class="main">
			<div class="main_left">
				<div class="phone">
					<div><img src="images/user_01.gif" alt=""></div>
					<p>username</p>
				</div>
				<a href="user_info.php"><p>基本信息</p></a>
				<a href="message.php"><p class="p1">客户留言</p></a>
			</div>
			<div class="main_right">
				<h1>用户留言</h1>
				<?php foreach($mess as $val){ ?>
				<div class="main_r_con">
					<p><?php echo date("Y-m-d H:m",$val['meg_time']) ?></p>
					<dl>
						<dt><?php echo $val['meg_name'] ?>:</dt>
						<dt><?php echo $val['meg_content'] ?></dt>
						<dd>邮箱：<?php echo $val['meg_email'] ?> &nbsp;&nbsp; 电话：<?php echo $val['meg_phone'] ?></dd>
					</dl>
				</div>
				<?php } ?>
				<nav>
					<a href="javascript:;">1</a>
					<a href="javascript:;">2</a>
					<a href="javascript:;">3</a>
					<a href="javascript:;">4</a>
					<a href="javascript:;">5</a>
					<a href="javascript:;">6</a>
					<a href="javascript:;">7</a>
					<a href="javascript:;">8</a>
					<a href="javascript:;">&gt;</a>
					<a href="javascript:;">&gt;&gt;</a>
					<span>共3页/19条</span>
				</nav>
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