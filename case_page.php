<?php 
	// include "./include/init.php";

	$Eid=isset($_GET['eid'])?$_GET['eid']:1;
	$sql = "SELECT * FROM wd_case WHERE case_id=$Eid";
	$case_page = sql_fn($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-案例详情页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/case.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<a name="Top"></a>
		<?php include "header.php"; ?>
		<div class="main_nav">
			<?php foreach($case_page as $val){ ?>
			<nav>
				<a href="case.php"><img src="images/new_icon_01.png" alt=""></a>
				<a href="case.php">案例展示</a>
				&gt;
				<a href="">企业品牌网站</a>
				&gt;
				<a href="case.php"><span><?php echo $val['case_title'] ?></span></a>
			</nav>
			<h1><?php echo $val['case_title'] ?></h1>
			<?php } ?>
		</div>
		<div class="main">
			<div class="main_con">
				<?php foreach($case_page as $val){ ?>
					<?php echo $val['case_content']; ?>				
				<?php } ?>
				<div class="main_bot">
					<a href="javascript:;">
						<img src="images/detailed_prev.png" alt="">
					</a>
					<a href="javascript:;">
						<img src="images/detailed_next.png" alt="">
					</a>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</div>
	<aside>
		<div></div>
		<p>
			<span>020-66668888</span>
			<a href="">
				<img src="images/icon_01.png" alt="">
			</a>
		</p>
		<p>
			<span>66668888</span>
			<a href="">
				<img src="images/icon_02.png" alt="">
			</a>
		</p>
		<p>
			<span>人才招聘</span>
			<a href="">
				<img src="images/icon_03.png" alt="">
			</a>
		</p>
		<p>
			<span>回到顶部</span>
			<a href="#Top">
				<img src="images/icon_04.png" alt="">
			</a>
		</p>
	</aside>
</body>
</html>
<!-- 导航滚动条 -->
<script src='js/nav_scroll.js'></script>
<script>
	// 侧边导航条（右边）
	var aside=document.getElementsByTagName('aside')[0];
	var p=aside.getElementsByTagName('p');
	var span=aside.getElementsByTagName('span');

	for(var i=0; i<p.length; i++){
		p[i].onmouseover=function(){
			this.className='box_bg';
		}
		p[i].onmouseout=function(){
			this.className='';
		}
	}
</script>