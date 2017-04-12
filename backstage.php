<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
$status = $_GET['status'];
?>

	<head>
	<!--这里是头部连接-->
	<?php require_once('headlink.php'); ?>
    </head>
	<body>



<?php if($status == ""){ 
?>
	<div>	
	<h1>上传文章</h1>
	</div>
	<form method="POST" action="submit_activity.php" enctype="multipart/form-data"> 

 		标题：<input type="text" name="title">
  		<br><br>
   		连接：<input type="text" name="links">（多连接之间请用空格隔开）
   		<br><br>
   		日期：<input type="text" name="date">
   		<br><br>
   		地点：<input type="text" name="place">
   		<br><br>
	    正文：<textarea name="content" rows="25" cols="150"></textarea>
   		<br><br>
   头图：
   <input type="file" name="file" id="file"> 
   <br><br>
   <input type="submit" name="submit" value="提交"> 
</form>
<?php } 
else {
?>
	<div>	
	<h1>上传成功</h1>
	<a href="index.php">返回首页</a>
	</div>
<?php } 
?>
	<!--这里js库-->
	<?php require_once('endlink.php'); ?>
	</body>
</html>
