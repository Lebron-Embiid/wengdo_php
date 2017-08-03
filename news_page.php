<?php 
	// include "include/init.php";

	
	//服务单页
	$Nid=isset($_GET['nid'])?$_GET['nid']:1;
	$sql = "SELECT * FROM wd_news WHERE news_id=$Nid";
	$news_page = sql_fn($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/new_list.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<a name="Top"></a>
		<?php include "header.php"; ?>
		<div class="main_nav">
			<?php foreach($news_page as $val){ ?>
			<nav>
				<a href="news.php"><img src="images/new_icon_01.png" alt=""></a>
				<a href="news.php">案例展示</a>
				&gt;
				<a href="">企业品牌网站</a>
				&gt;
				<a href="news.php"><span><?php echo $val['news_title'] ?></span></a>
			</nav>
			<?php } ?>
		</div>
		<?php foreach($news_page as $val){ ?>
		<div class="ser_page">
			<h2><?php echo $val['news_title'] ?></h2>
			<p><?php echo $val['news_text'] ?></p>
		</div>
		<?php } ?>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>