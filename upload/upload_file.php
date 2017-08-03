<?php 
	header("Content-type:text/html;charset=utf-8");
	// print_r($_FILES);
	if($_FILES['file']['type'] == 'image/jpeg' && $_FILES['file']['size']<20000){
		move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
	}else{
		echo "NO!";
	}
 ?>