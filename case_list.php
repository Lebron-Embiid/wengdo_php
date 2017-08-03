<?php 
	include "./include/init.php";

	if(isset($_GET['eid'])){
		include "case_page.php";
		exit;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-案例列表页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/case_list.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>
		<div class="main_nav">
			<p>
				<img src="images/new_icon_01.png" alt="">
				<a href="case.html">案例展示</a>
				&gt;
				<span><a href="">企业品牌网站</a></span>
			</p>
			<h1>案例展示</h1>
		</div>
		<div class="main_con">
			<nav>
			<?php foreach($case_class as $key=>$val){ ?>
				<?php if($Cid==$val['case_class_id']){ ?>
				<a class="main_nava" href="?cid=<?php echo $val['case_class_id'] ?>"><?php echo $val['case_class_name'] ?></a>
				<?php }else{ ?>
				<a href="?cid=<?php echo $val['case_class_id'] ?>"><?php echo $val['case_class_name'] ?></a>
			<?php }} ?>
			</nav>
			<ul>
			<?php foreach($case as $key=>$val){ ?>
				<li>
					<a href="?eid=<?php echo $val['case_id'] ?>">
						<img src="<?php echo IMGPATH.$val['case_img'] ?>" alt="">
						<p>
							<img src="images/look.png" alt="">
							<br>
							<span><?php echo $val['case_title'] ?></span>
						</p>
					</a>
				</li>
			<?php } ?>
			</ul>
			<div class="paging">
				<a href="javascript:;">上一页</a>
				<a href="javascript:;" class="paging_a">1</a>
				<a href="javascript:;">2</a>
				<a href="javascript:;">3</a>
				<a href="javascript:;">4</a>
				<a href="javascript:;">5</a>
				<a href="javascript:;">6</a>
				<a href="javascript:;">7</a>
				<a href="javascript:;">8</a>
				<a href="javascript:;">下一页</a>
			</div>
		</div>
		<footer>
			<div class="foot">
				<p>粤ICP备12022584号-3</p>
				<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
			</div>
		</footer>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>