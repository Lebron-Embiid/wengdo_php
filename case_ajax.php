<?php 
	include "include/init.php";
	$Cid=isset($_GET['cid'])?$_GET['cid']:1;
	$sql = "SELECT * FROM wd_case WHERE case_class_id=$Cid ORDER BY case_id ASC";
	$case = sql_fn($sql);
	print_r(json_encode($case));
 ?>