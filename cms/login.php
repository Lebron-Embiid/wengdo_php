<?php 
    include "include/init.php";

    if($_POST){
        if($_POST['username'] == ""){
          alert("请输入用户名");
        }
        if($_POST['password'] == ""){
          alert("请输入密码");
        }
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM wd_user WHERE user_name='$user'";
        $login = getArr($sql);
        if($login){
          if($pass == $login['user_password']){
            // setcookie("log",1);
            session_start();
            $_SESSION['log'] = 1;
            alert("登录成功","index.php");
          }else{
            alert("密码错误","login.php");
          }
        }else{
          alert("用户名不存在!","login.php");
        }

        // $sqli = "SELECT * FROM wd_user WHERE user_name='$user'";
        // $isuser = sql_fn($sqli);
        // // print_r($isuser);
        // foreach($isuser as $val){
        //     $uid = $val['user_id'];
        //     // print_r($uid);
        //     // exit;
        // }
        // if(!$isuser){
        //     alert("账号不存在的,请重新登陆!","login.php");
        // }else{
        //     foreach($login as $val){
        //         if(in_array($user,$val)){
        //             if($pass == $val['user_password']){
        //                 alert("登陆成功!","index.php?iid=$uid");
        //             }else{
        //                 alert("密码错误,请重新登陆!","login.php");
        //             }
        //         }
        //     }
        // }        
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<title>CMS内容管理系统</title>
	<meta name="keywords" content="Admin">
	<meta name="description" content="Admin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Core CSS  -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" type="text/css" href="css/pages.css">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- Boxed-Layout CSS -->
	<link rel="stylesheet" type="text/css" href="css/boxed.css">

	<!-- Demonstration CSS -->
	<link rel="stylesheet" type="text/css" href="css/demo.css">

	<!-- Your Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body class="login-page">

<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"></div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">CMS内容管理系统</div>
		</div>
        <form action="" class="cmxform" id="altForm" method="post">
          <div class="panel-body">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">用户名</span>
                <input type="text" name="username" class="form-control phone" maxlength="10" autocomplete="off" placeholder="" id="username">
              </div>
              <p id="userp" style="height:10px;"></p>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                <input type="password" name="password" class="form-control product" maxlength="10" autocomplete="off" placeholder="">
              </div>
            </div>
           </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" value="登 录" />
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery-ui.min.js"></script> 
<script src="js/bootstrap.min.js"></script> <!-- Theme Javascript --> 
<script type="text/javascript" src="js/uniform.min.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript">
    $(function(){
        $("#username").blur(function(){
            $.ajax({
                type:"POST",
                url:"login_check.php",
                dataType:"json",
                data:"username="+$(this).val(),
                success:function(data){
                    if($("#username").val() == data[0].user_name){
                        $("#userp").html("该用户名可以登录!").css("color","green");
                    }else{
                        $("#userp").html("该用户名不能登录!").css("color","red");
                    }
                },
                error:function(xhr){
                }
            })
        })
    })
</script>
</body>
</html>
