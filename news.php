<?php 
	include "./include/init.php";

	if(isset($_GET['nid'])){
		include "news_page.php";
		exit;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-新闻列表页</title>
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
			<nav>
				<a href="new_list.php"><img src="images/new_icon_01.png" alt=""></a>
				<a href="">资讯动态</a>
				&gt;
				<a href=""><span>最新资讯</span></a>
			</nav>
			<h1>最新资讯</h1>
		</div>
		<div class="main">
			<?php foreach($new as $key=>$val){ ?>
			<div class="main_con">
				<img src="<?php echo $val['news_img'] ?>" alt="">
				<div><?php echo date('m.d',$val['news_time']); ?><span><?php echo date('Y',$val['news_time']); ?></span></div>
				<dl>
					<dt><h2><a href="?nid=<?php echo $val['news_id'] ?>"><?php echo $val['news_title'] ?></a></h2></dt>
					<dt><h3>[相关新闻]  <?php echo @date('Y-m-d H:m:s',$val['news_time']); ?></h3></dt>
					<dd>
						<?php echo $val['news_intro'] ?>
						<a href="?nid=<?php echo $val['news_id'] ?>">&lt;查看全文&gt;</a>
					</dd>
				</dl>
			</div>
			<?php } ?>
			<nav>
				<a href="javascript:;">上一页</a>
				<a href="javascript:;">1</a>
				<a href="javascript:;">2</a>
				<a href="javascript:;">3</a>
				<a href="javascript:;">4</a>
				<a href="javascript:;">5</a>
				<a href="javascript:;">6</a>
				<a href="javascript:;">7</a>
				<a href="javascript:;">8</a>
				<a href="javascript:;">下一页</a>
			</nav>
		</div>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>