<?php 
	header("Content-Type:text/html;charset=utf-8");
	$conn = @mysql_connect("localhost","root","root");
	if(!$conn){
		echo "链接失败";
	}

	mysql_select_db("_1701");
	mysql_set_charset("utf8");

	include "function.php";

	$root = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
	$img = '/szwengdo/';
	$thu = '/szwengdo/thu/';
	$web = 'http://localhost/szwengdo/';
	
	define('PATH',$root.$img);
	define('THU',$root.$thu);
	define('THUPATH',$web.'thu/');
	
 ?>