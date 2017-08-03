<?php 
	include "include/init.php";
	
	if($_POST['username']){
		$name = $_POST['username'];
		$sql = "SELECT * FROM wd_user";
		$res = sql_fn($sql);
		print_r(json_encode($res));
	}
 ?>