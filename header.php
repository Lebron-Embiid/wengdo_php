<header>
	<div class="head_nav" id="head_scroll">
		<a href="index.php">
			<img src="images/logo_01.png" alt="">
		</a>
		<nav>
		<?php foreach($nav as $key=>$val){ ?>
			<a href="<?php echo $val['nav_link'] ?>"><?php echo $val['nav_name'] ?></a>
		<?php } ?>
		<?php if(isset($_COOKIE['log']) && $_COOKIE['log']==1){ ?>
			<a href="out.php">退出</a>
			<a href="user_info.php" class="nav_icon"><img src="images/nav_s.png" alt=""></a>
		 <?php }?>
		</nav>
	</div>
	<div class="banner">
		<div id="con">
			<ul>
			<?php foreach($ban as $key=>$val){ ?>
				<?php if($key==0){ ?>
				<li><img id="img_one" src="<?php echo IMGPATH.$val['ban_img'] ?>" alt=""></li>
				<?php }else{ ?>
				<li><img src="<?php echo IMGPATH.$val['ban_img'] ?>" alt=""></li>
			<?php }} ?>
			</ul>
			<a id="prev" href="javascript:;"><img src="images/ban_prev.png" alt=""></a>
			<a id="next" href="javascript:;"><img src="images/ban_next.png" alt=""></a>
			<ol>
				<li class="oli"></li>
				<li></li>
				<li></li>
				<li></li>
			</ol>
		</div>
	</div>
</header>