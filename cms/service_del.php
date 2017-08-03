<?php 
	include "include/init.php";
	//删除导航
	if(isset($_GET) && !empty($_GET)){
		$did = $_GET['did'];

		$sql = "SELECT * FROM wd_service WHERE ser_id=$did";
        $service = getArr($sql);

        $link1 = $service['ser_img1'];
        $link2 = $service['ser_img2'];
        $thuimg1 = $service['ser_thum1'];
        $thuimg2 = $service['ser_thum2'];
        // echo $thuimg;
        // exit;
        $name = 'upload';
        $deldir1 = PATH.$name.'/'.$link1;
        $deldir2 = PATH.$name.'/'.$link2;
        $thudir1 = THU.$thuimg1;
        $thudir2 = THU.$thuimg2;
        // echo $deldir;
        // exit;
        unlink($deldir1);    //删除本地图片
        unlink($deldir2);    //删除本地图片
        unlink($thudir1);
        unlink($thudir2);

		$sql = "DELETE FROM wd_service WHERE ser_id=$did";
		mysql_query($sql);
		if(mysql_affected_rows()){
            alert("删除成功!","service_list.php");
        }
	}
 ?>