<?php 
	include "./include/init.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-关于我们</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_nav">
			<nav>
				<a href="about.php"><img src="images/new_icon_01.png" alt=""></a>
				<a href="about.php"><span>关于我们</span></a>
			</nav>
			<h1><?php echo $about[0]['wd_title'] ?></h1>
		</div>
		<div class="main">
			<?php foreach($about as $val){ ?>
				<?php echo $val['wd_sim'] ?>
			<img src="<?php echo $val['wd_img'] ?>" alt="">
			<?php } ?>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>