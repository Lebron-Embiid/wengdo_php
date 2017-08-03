<?php 
	include "include/init.php";
	if(isset($_COOKIE['log']) && $_COOKIE['log']==1){
		
	}else{
		alert("请登录","login.php");
		exit;
	}
	if(isset($_GET['sid'])){
		include "service_page.php";
		exit;
	}
	if(isset($_GET['eid'])){
		include "case_page.php";
		exit;
	}
	if(isset($_GET['nid'])){
		include "news_page.php";
		exit;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆首页</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/playImg.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<a name="Top"></a>
		<?php include "header.php"; ?>
		<div class="service">
			<h1>我们的服务<br><span>Services</span></h1>
			<i></i>
			<p>我们为您提供，最精致的服务，最全面的技术</p>
			<ul id="service">
			<?php foreach($service as $key=>$val){ ?>
				<?php if($key==0){ ?>
				<li>
					<a href="?sid=<?php echo $val['ser_id'] ?>" class="ser_a">
					<img src="<?php echo IMGPATH.$val['ser_img2'] ?>" alt="">
					<br>
					<?php echo $val['ser_title'] ?>
					</a>
				</li>
				<?php }else{ ?>
				<li>
					<a href="?sid=<?php echo $val['ser_id'] ?>">
					<img src="<?php echo IMGPATH.$val['ser_img1'] ?>" alt="">
					<br>
					<?php echo $val['ser_title'] ?>
					</a>
				</li>
				<?php }} ?>
			</ul>
		</div>
		<div class="case">
			<h1>案例展示<br><span>Cases</span></h1>
			<i></i>
			<nav>
				<?php foreach($case_class as $key=>$val){ ?>
				<?php if($Cid==$val['case_class_id']){ ?>
				<a href="javascript:void(0)" index="<?php echo $val['case_class_id'] ?>" class="case_a"><?php echo $val['case_class_name'] ?></a>
				<?php }else{ ?>
				<a href="javascript:void(0)" index="<?php echo $val['case_class_id'] ?>" ><?php echo $val['case_class_name'] ?></a>
				<?php }} ?>
			</nav>
			<ul>
			<?php foreach($case as $val){ ?>
				<li>
					<a href="?eid=<?php echo $val['case_id'] ?>">
						<img src="<?php echo IMGPATH.$val['case_img'] ?>" alt="">
						<div>
							<img src="images/look.png" alt="">
							<br>
							<?php echo $val['case_title'] ?>
						</div>
					</a>
				</li>
				<?php } ?>
				<li>
					<a href="case_list.php">
						<img src="images/case_08.jpg" alt="">
						<p>MORE</p>
					</a>
				</li>
			</ul>
		</div>
		<script>
			$(function(){
				$(".case nav a").click(function(){
					$(this).addClass("case_a").siblings().removeClass("case_a");
					$(".case ul li").empty();
					$.ajax({
						type:"GET",
						url:"case_ajax.php?"+"cid="+$(this).attr("index"),
						dataType:"json",
						success:function(data){
							for(var i=0;i<data.length;i++){
								$(".case ul li").eq(i).prepend("<a href='?eid="+data[i].case_id+"'><img src='http://localhost/szwengdo/upload/"+data[i].case_img+"'/><div><img src='images/look.png' alt=''></br>"+data[i].case_title+"</div></a>");
							}
							$(".case ul li").eq(i).append("<a href='case_list.php'><img src='images/case_08.jpg' alt=''><p>MORE</p></a>");
						},
						error:function(xhr){
							alert("错误"+xhr.status);
						}
					});
				})
			})
		</script>
		<div class="about">
			<h1>关于我们<br><span>About us</span></h1>
			<i></i>
			<?php foreach($article as $val){ ?>
			<p class="about_p1"><?php echo $val['article_title'] ?></p>
			<p class="about_p2"><?php echo $val['article_content'] ?></p>
			<?php } ?>
			<img src="images/point.png" alt="">
			<br>
			<a href="about.php">点击查看</a>
		</div>
		<div class="news">
			<a href=""><img id="new_more" class="new_more" src="images/icon.png" alt=""></a>
			<h2>最新资讯<br><span>News</span></h2>
			<i></i>
			<p class="new_p1">
				文豆集团，你身边的IT互联网专家
			</p>
			<ul>
			<?php foreach($news as $val){ ?>
				<li>
					<div class="new_h"><?php echo date('m.d',$val['news_time']); ?><br><span><?php echo date('Y',$val['news_time']); ?></span></div>
					<div class="new_p">
						<h3><a href="?nid=<?php echo $val['news_id'] ?>"><?php echo $val['news_title'] ?></a><span>&gt;</span></h3>
						<p><?php echo $val['news_text'] ?></p>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="partner">
			<h4>合作伙伴</h4>
			<em>Partner</em>
			<i></i>
			<p>他们选择了文豆，我们的专业合作伙伴</p>
			<ul>
			<?php foreach($partner as $val){ ?>
				<li>
					<a href="">
						<img src="<?php echo IMGPATH.$val['par_img'] ?>" alt="">
					</a>
				</li>
			<?php } ?>
			</ul>
		</div>
		<footer>
			<div class="contact">
				<h4>联系我们</h4>
				<em>Contact us</em>
				<i></i>
				<p>他们选择了文豆，我们的专业合作伙伴</p>
				<div class="con_ul">
					<div class="con_left">
						<ul>
							<li>广州总部：广州海珠区广州大道南448号财智大厦28楼</li>
							<li>深圳总部：深圳福田区福华路322号文蔚大厦4楼</li>
							<li>广州番禺分部：广州市番禺区市桥光明北路12号锦绣华庭三座404</li>
							<li>广州增城分部：广州增城区荔城花园东门32号</li>
							<li>广州大学城分部：广州大学城中七路大学时光首层</li>
						</ul>
					</div>
					<div class="con_center">
						<img class="ew" src="images/ew.png" alt="">
						<br>
						<a href=""><img src="images/icon_05.png" alt=""></a>
						<a href=""><img src="images/icon_06.png" alt=""></a>
						<a href=""><img src="images/icon_07.png" alt=""></a>
						<a href=""><img src="images/icon_08.png" alt=""></a>
					</div>
					<div class="con_right">
						<ul>
							<li>广州白云分部：广州市白云区从云路839号利都商务中心B911</li>
							<li>惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室</li>
							<li>佛山分部:佛山市南海区桂城南新一路16号首层</li>
							<li>东莞分部：东莞市莞城区汇峰中心E区1002室</li>
							<li>肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育(市人才大厦前)</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="foot">
				<p>粤ICP备12022584号-3</p>
				<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
			</div>
		</footer>
	</div>
	<aside>
		<div></div>
		<p>
			<span>020-66668888</span>
			<a href="">
				<img src="images/icon_01.png" alt="">
			</a>
		</p>
		<p>
			<span>66668888</span>
			<a href="">
				<img src="images/icon_02.png" alt="">
			</a>
		</p>
		<p>
			<span>人才招聘</span>
			<a href="">
				<img src="images/icon_03.png" alt="">
			</a>
		</p>
		<p>
			<span>回到顶部</span>
			<a href="#Top">
				<img src="images/icon_04.png" alt="">
			</a>
		</p>
	</aside>
</body>
</html>
<script>
	//more滚动
	var new_more=document.getElementById('new_more');
	//滚动条事件改变导航背景色
	var head_scroll=document.getElementById('head_scroll');

	document.onscroll=function(){
		var scroll_top=document.body.scrollTop || document.documentElement.scrollTop;
		if(scroll_top>$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,1)';
		}
		if(scroll_top<$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,0.3)';
		}
		if(scroll_top>$('#con').height()+503+680 && scroll_top<$('#con').height()+503+680+431){
			new_more.style.right=605+'px';
			new_more.style.transform='rotate(-720deg)';
		}else{
			new_more.style.right=0;
			new_more.style.transform='rotate(0deg)';
		}
		
	}
	
	// 侧边导航条（右边）
	var aside=document.getElementsByTagName('aside')[0];
	var p=aside.getElementsByTagName('p');
	var span=aside.getElementsByTagName('span');

	for(var i=0; i<p.length; i++){
		p[i].onmouseover=function(){
			this.className='box_bg';
		}
		p[i].onmouseout=function(){
			this.className='';
		}
	}
	// 服务项目
	var service=document.getElementById('service');
	var li=service.getElementsByTagName('li');
	var img=service.getElementsByTagName('img');
	var a=service.getElementsByTagName('a');

	for(var i=0; i<li.length; i++){
		li[i].index=i;
		li[i].onmouseover=function(){
			for(var i=0; i<li.length; i++){
				img[i].src='images/server_0'+(i+1)+'.gif';
				a[i].className='';
			}
			img[this.index].src='images/server_0'+(this.index+1)+'.jpg';
			a[this.index].className="ser_a";
		}
	}
</script>