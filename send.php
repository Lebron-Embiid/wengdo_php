<?php 
	header("Content-Type:text/html;charset=utf-8");
	$conn = mysql_connect("localhost","root","root");
	mysql_select_db("_1701");
	mysql_set_charset("utf8");

	if($_POST){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$content = $_POST['content'];
		$time = time();
		$sql = "INSERT INTO wd_user_message(meg_name,meg_email,meg_phone,meg_content,meg_time) VALUES('$name','$email','$phone','$content','$time')";
		mysql_query($sql);
	}
 ?>