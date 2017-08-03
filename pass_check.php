<?php 
	include "include/init.php";

	if($_POST){
		$id = $_POST['id'];
		$sql = "SELECT * FROM wd_use WHERE user_id=$id";
		$pass = sql_fn($sql);
		print_r(json_encode($pass));
	}
 ?>