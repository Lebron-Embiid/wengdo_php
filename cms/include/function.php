<?php 
	//多条关联数组数据
	function sql_fn($sql){
		$res = mysql_query($sql);
		$obj = array();
		if($res&&@mysql_num_rows($res)>0){
			while($arr=mysql_fetch_assoc($res)){
				$obj[] = $arr;
			}
		}
		return $obj;
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
	//一条关联数组数据
	function getArr($sql){
		$result = mysql_query($sql);
		if($result){
			$arr = mysql_fetch_assoc($result);
		}
		return $arr;
	}

	//单上传文件
	function upload($name,$url,$size='1048576',$type=array('jpg','jpeg','png','gif')){
		if($_FILES[$name]['error'] > 0){
			switch($_FILES[$name]['error']){
				case 1:$res['msg'] = "上传文件超出2M，请重新上传";
				break;
				case 2:$res['msg'] = "上传文件大小超出MAX_FILE_SIZE指定的值，请重新上传";
				break;
				case 3:$res['msg'] = "上传文件失败，请重新上传";
				break;
				case 4:$res['msg'] = "请选择文件上传";
				break;
				default:$res['msg'] = "未知错误";
				break;
			}
			$res['error'] = 1;
			return $res;
		}
		if($_FILES[$name]['size'] > $size){
			$res['msg'] = "上传文件大小超出MAX_FILE_SIZE指定的值，请重新上传";
			$res['error'] = 1;
			return $res;
		}
		//返回图片名称
		$path = pathinfo($_FILES[$name]['name']);
		//获取图片后缀
		$ext = $path['extension'];
		if(!in_array($ext, $type)){
			$res['msg'] = "上传文件类型错误，请重新上传";
			$res['error'] = 1;
			return $res;
		}
		//时间戳
		$time = time();
		//获取年月
		$tmpdir = date('Y-m',$time);
		$dir = rtrim($url,'/').'/'.$tmpdir;
		if(!is_dir($dir)){
			mkdir($dir,0777,true);
		}
		do{
			$filename = $time.rand(0,99999);
			$file = $filename.'.'.$ext;
		}while(is_file($dir.'/'.$file));
		move_uploaded_file($_FILES[$name]['tmp_name'], $dir.'/'.$file);
		$res['error'] = 0;
		$res['msg'] = "文件上传成功";
		$res['filename'] = $tmpdir.'/'.$file;
		return $res;
	}
	//多上传文件
	function more_upload($arr,$name,$url,$size='1048576',$type=array('jpg','jpeg','png','gif')){
		// $arr = array();
		foreach($_FILES[$name] as $key=>$val){
			foreach($val as $k=>$v){
			if($_FILES[$name]['error'][$k] > 0){
				switch($_FILES[$name]['error'][$k]){
					case 1:$res['msg'] = "上传文件超出2M，请重新上传";
					break;
					case 2:$res['msg'] = "上传文件大小超出MAX_FILE_SIZE指定的值，请重新上传";
					break;
					case 3:$res['msg'] = "上传文件失败，请重新上传";
					break;
					case 4:$res['msg'] = "请选择文件上传";
					break;
					default:$res['msg'] = "未知错误";
					break;
				}
				$res['error'] = 1;
				return $res;
			}
			if($_FILES[$name]['size'][$k] > $size){
				$res['msg'] = "上传文件大小超出MAX_FILE_SIZE指定的值，请重新上传";
				$res['error'] = 1;
				return $res;
			}
			//返回图片名称
			$path = pathinfo($_FILES[$name]['name'][$k]);
			//获取图片后缀
			$ext = $path['extension'];
			if(!in_array($ext, $type)){
				$res['msg'] = "上传文件类型错误，请重新上传";
				$res['error'] = 1;
				return $res;
			}
			//时间戳
			$time = time();
			//获取年月
			$tmpdir = date('Y-m',$time);
			$dir = rtrim($url,'/').'/'.$tmpdir;
			if(!is_dir($dir)){
				mkdir($dir,0777,true);
			}
			do{
				$filename = $time.rand(0,99999);
				$file = $filename.'.'.$ext;
			}while(is_file($dir.'/'.$file));
			move_uploaded_file($_FILES[$name]['tmp_name'][$k], $dir.'/'.$file);
			$res['error'] = 0;
			$res['msg'] = "文件上传成功";
			$res['filename'] = $tmpdir.'/'.$file;
        	// $arr = array();
			$arr[] = $res;
		}
		return $arr;
		break;
	}
		
}
	//缩略图
	function thumd_img($img,$son_width,$son_height,$url,$thumdpath){
		$filename = $img;
		$info = getimagesize($filename);
		$width = $info[0];
		$height = $info[1];
		switch($info[2]){
			case 1:$parent = imagecreatefromgif($filename);
			break;
			case 2:$parent = imagecreatefromjpeg($filename);
			break;
			case 3:$parent = imagecreatefrompng($filename);
			break;
		}
		$son = imagecreatetruecolor($son_width, $son_height);
		imagecopyresized($son, $parent, 0, 0, 0, 0, $son_width, $son_height, $width, $height);
		$path = pathinfo($filename,PATHINFO_EXTENSION);
		$pathname = $thumdpath;
		$dir = date("Y-m/d");
		if(!is_dir($url.'/'.$dir)){
			mkdir($url.'/'.$dir,0777,true);
		}
		$news_filename = $dir.'/'.$pathname;
		$pathname = $url.'/'.$news_filename;
		switch($info[2]){
			case 1:imagegif($son,$pathname);
			break;
			case 2:imagejpeg($son,$pathname);
			break;
			case 3:imagepng($son,$pathname);
			break;
		}
		imagedestroy($parent);
		imagedestroy($son);
		return $news_filename;
	}

 ?>