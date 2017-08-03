<?php 
    include "include/init.php";

    //添加导航
    if($_POST){
        $title = $_POST['title'];
        $text = $_POST['content'];
        $link = time();

        $sql = "SELECT * FROM wd_news";
	    $rows = sql_fn($sql);
	    $arr = array();
	    foreach($rows as $k=>$v){
	    	$arr[] = $v['news_title'];
	    }
	    if(in_array($title, $arr)){
	    	alert("添加失败,".$title."已存在!");
	    }else{
	    	$sql = "INSERT INTO wd_news(news_title,news_time,news_text) VALUES('$title','$link','$text')";
	        mysql_query($sql);
	        if(mysql_affected_rows()){
	            alert("添加成功!","news_list.php");
	        }
	    }    	
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
    <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

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

    <!-- Core Javascript - via CDN -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"><a class="navbar-brand" href="index.php">
        <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a></div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
        <a href="login.html" class="btn btn-default btn-gradient" type="button"><span
                class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
    <div id="sidebar-search">
        <div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>

        <li><a href="nav_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">导航管理</span></a>
        </li>
        <li><a href="banner_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">广告管理</span></a>
        </li>
        <li><a href="service_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">服务管理</span></a>
        </li>
        <li><a href="case_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li><a href="part_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">合作伙伴</span></a>
        </li>
        <li class="active">
          <a href="news_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">资讯管理</span></a>
        </li>
        <li>
          <a href="user.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
        </li>
      </ul>
    </div>
  </aside>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">添加资讯</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">添加资讯</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="news_list.php"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <!-- <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="" id="standard-list1" class="form-control">
                                                <option>请选择</option>
                                                <option>科技</option>
                                                <option>文化</option>
                                                <option>生活</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">内容</span>
                                            <textarea name="content" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->
<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>
</html>