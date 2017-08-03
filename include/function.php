<?php 
	function sql_fn($sql){
		$res = mysql_query($sql);
		$obj = array();
		if($res&&mysql_num_rows($res)>0){
			while($arr=mysql_fetch_assoc($res)){
				$obj[] = $arr;
			}
		}
		return $obj;
	}

	function getArr($sql){
		$arr = array();
		$result = mysql_query($sql);
		if($result){
			$arr = mysql_fetch_assoc($result);
		}
		return $arr;
	}

	//弹框函数
	function alert($title,$url=''){
		echo "<script>";
		if($url){
			echo "alert('$title');window.location = '$url'";
		}else{
			echo "alert('$title');window.history.go(-1)";
		} 
		echo "</script>";
	}

	//导航
	$sql = "SELECT * FROM wd_nav ORDER BY nav_id ASC";
	$nav = sql_fn($sql);
	//轮播
	$sql = "SELECT * FROM wd_banner ORDER BY ban_id ASC";
	$ban = sql_fn($sql);
	//服务
	$sql = "SELECT * FROM wd_service ORDER BY ser_id ASC";
	$service = sql_fn($sql);
	//案例
	$sql = "SELECT * FROM wd_case_class ORDER BY case_class_id ASC";
	$case_class = sql_fn($sql);

	$Cid=isset($_GET['cid'])?$_GET['cid']:1;
	$sql = "SELECT * FROM wd_case WHERE case_class_id=$Cid ORDER BY case_id ASC";
	$case = sql_fn($sql);
	$sql = "SELECT * FROM wd_case WHERE case_id<=1";
	$case_list = sql_fn($sql);

	//关于我们
	$sql = "SELECT * FROM wd_article";
	$article = sql_fn($sql);

	$sql = "SELECT * FROM wd_about";
	$about = sql_fn($sql);

	//新闻
	$sql = "SELECT * FROM wd_news WHERE news_id<=4 ORDER BY news_id ASC";
	$news = sql_fn($sql);

	$sql = "SELECT * FROM wd_news WHERE news_id<=6 ORDER BY news_id ASC";
	$new = sql_fn($sql);

	$sql = "SELECT * FROM wd_news WHERE news_id<=1";
	$new_detail = sql_fn($sql);
	//合作伙伴
	$sql = "SELECT * FROM wd_partner";
	$partner = sql_fn($sql);

	//留言
	$sql = "SELECT * FROM wd_user_message";
	$mess = sql_fn($sql);
 ?>