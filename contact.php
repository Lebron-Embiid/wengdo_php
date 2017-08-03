<?php 
	include "./include/init.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-联系我们</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_nav">
			<nav>
				<a href="contact.php"><img src="images/new_icon_01.png" alt=""></a>
				<a href="contact.php"><span>联系我们</span></a>
			</nav>
			<h1>联系我们</h1>
		</div>
		<div class="main">
			<div class="main_left">
				<ul>
					<li>广州总部：广州海珠区广州大道南448号财智大厦28楼</li>
					<li>深圳总部：深圳福田区福华路322号文蔚大厦4楼</li>
					<li>广州番禺分部：广州市番禺区市桥光明北路12号锦绣华庭三座404</li>
					<li>广州增城分部：广州增城区荔城花园东门32号</li>
					<li>广州大学城分部：广州大学城中七路大学时光首层</li>
					<li>广州白云分部：广州市白云区从云路839号利都商务中心B911</li>
					<li>惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室</li>
					<li>佛山分部:佛山市南海区桂城南新一路16号首层</li>
					<li>东莞分部：东莞市莞城区汇峰中心E区1002室</li>
					<li>肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育(市人才大厦前)</li>
					<li>集团广告创意部：广州市荔湾区芳村培真路2号之2鹤展创意园A栋2楼</li>
				</ul>
				<ol>
					<li>广州总部：440-888-8888 <span>深圳总部：0755-66691037</span></li>
					<li>Msn/E-mail:seven@wengdo.com</li>
				</ol>
			</div>
			<div class="main_right">
				<form action="" method="">
					<div>
					<p>欢迎来电咨询或者表单联系我们/Contact us</p>
					<p>您的姓名：</p>
					<input type="text" name="username" id="username">
					<p>您的邮箱：</p>
					<input type="text" name="email" id="email">
					<p>您的电话：</p>
					<input type="text" name="phone" id="phone">
					<p>输入您要服务的内容：</p>
					<textarea name="content" id="content" cols="30" rows="10"></textarea>
					</div>
					<p>
						<input type="image" src="images/submit.gif" alt="" id="smt">
					</p>
				</form>
			</div>
			<div class="map">
				<iframe src="map.html" frameborder="0"></iframe>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>
<script>
	var username = document.getElementById("username");
	var email = document.getElementById("email");
	var phone = document.getElementById("phone");
	var content = document.getElementById("content");
	var smt = document.getElementById("smt");
	smt.onclick = function(){
		var xhr = new XMLHttpRequest();
		xhr.open("POST","send.php",true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		var data = "username="+username.value+"&email="+email.value+"&phone="+phone.value+"&content"+content.value;
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				alert("发送成功!");
			}
		}
		xhr.send(data);
	}
</script>