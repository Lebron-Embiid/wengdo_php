<?php 
	include "include/init.php";
	//删除导航
	if(isset($_GET) && !empty($_GET)){
		$did = $_GET['did'];
		$sql = "DELETE FROM wd_news WHERE news_id=$did";
		mysql_query($sql);
		if(mysql_affected_rows()){
            alert("删除成功!","news_list.php");
        }
	}
 ?>