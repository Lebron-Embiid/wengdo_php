<?php 
    include "include/init.php";

    //修改导航
    if($_GET){
        $up_id = $_GET['id'];
        $sql = "SELECT * FROM wd_nav WHERE nav_id=$up_id";
        $nav = getArr($sql);
    }
    if($_POST){
        $name = $_POST['title'];
        $link = $_POST['link'];
        $sql = "UPDATE wd_nav SET nav_name='$name',nav_link='$link' WHERE nav_id=$up_id";
        mysql_query($sql);
        if(mysql_affected_rows()){
            alert("修改成功!","nav_list.php");
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
    <div class="pull-left"><a class="navbar-brand" href="#">
        <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a></div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
        <a href="login.php" class="btn btn-default btn-gradient" type="button"><span
                class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <?php include "include/slidebar.php"; ?>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改资讯</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">编辑导航</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="nav_list.php"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="<?php echo $nav['nav_name']; ?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">链接</span>
                                            <input type="text" name="link" value="<?php echo $nav['nav_link']; ?>" class="form-control">
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
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>