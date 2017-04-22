<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

		<!--这里是头部连接-->
	<?php require_once('headlink.php'); ?>

	</head>
	<body>
	
	
<div id="fh5co-page">
	<!--这里是Bar-->
	<?php require_once('head.php'); ?>
	<?php
		require_once ("config.php");
		$id = $_GET['id'];					
		$TB_NAME = 'Activity';
		$sql = "select * from $TB_NAME where id=$id;";
		$result = $DB->query($sql);
		$row = $result->fetch_row();
		$Title = $row['1'];
		$Time = $row['2'];
		$Location = $row['3'];
		$Link = $row['4'];
		$Img_path = $row['5'];
		$content = str_replace("\n","<br>",$row['6']);
		$content = str_replace("\r","<br>",$content);


	?>
	<div class="fh5co-page-title" style="background-image: url(images/slide_7.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1 class="text-center"><span class="colored">
						<?php echo "$Title"; ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12  animate-box" data-animate-effect="fadeIn">
						<p><?php echo "$content"; ?></p>
				</div>
			</div>
			<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<img src=<?php echo $Img_path ?> class="img-rounded img-responsive" />
			  	</div>
				<div class="col-md-3"></div>
			</div>
			</div>
			<div class="row">
				<div class="col-md-6  animate-box" data-animate-effect="fadeIn">
				<?php if($Link) {?>
						<p>相关链接：<a href="https://<?php echo $Link; ?>"> <?php echo "$Link"; ?></a></p>
				<?php }?>
				</div>
				<div class="col-md-6  animate-box" data-animate-effect="fadeIn">
						<p class="text-right">时间 <?php echo "$Time"; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
	


		<!--这里是底端栏-->
		<?php require_once('ending.php'); ?>
	</div>
	
	

		<!--这里js库-->
		<?php require_once('endlink.php'); ?>

	</body>
</html>