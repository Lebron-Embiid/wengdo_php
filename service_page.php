<?php 
	// include "include/init.php";

	
	//服务单页
	$Sid=isset($_GET['sid'])?$_GET['sid']:1;
	$sql = "SELECT * FROM service_content WHERE ser_id=$Sid";
	$ser_cont = sql_fn($sql);
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
		<?php foreach($ser_cont as $val){ ?>
		<div class="ser_page">
			<h2><?php echo $val['ser_title'] ?></h2>
			<p><?php echo $val['ser_con'] ?></p>
		</div>
		<?php } ?>
		<?php include "footer.php"; ?>
	</div>
</body>
</html>