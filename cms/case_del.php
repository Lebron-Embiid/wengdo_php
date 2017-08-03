<?php 
	include "include/init.php";
	//删除导航
	if(isset($_GET) && !empty($_GET)){
		$did = $_GET['did'];

		$sql = "SELECT * FROM wd_case WHERE case_id=$did";
        $case = getArr($sql);

        $link = $case['case_img'];
        $thuimg = $case['case_thum'];
        // echo $thuimg;
        // exit;
        $name = 'upload';
        $deldir = PATH.$name.'/'.$link;
        $thudir = THU.$thuimg;
        // echo $deldir;
        // exit;
        unlink($deldir);    //删除本地图片
        unlink($thudir);

		$sql = "DELETE FROM wd_case WHERE case_id=$did";
		mysql_query($sql);
		if(mysql_affected_rows()){
            alert("删除成功!","case_list.php");
        }
	}
 ?>