<?php 
	header("Content-Type:text/html;charset=utf-8");
	$conn = @mysql_connect("localhost","root","root");
	if(!$conn){
		echo "链接失败";
	}

	mysql_select_db("_1701");
	mysql_set_charset("utf8");

	$web = 'http://localhost/szwengdo/';
	define('IMGPATH',$web.'upload/');
	include "function.php";
 ?>