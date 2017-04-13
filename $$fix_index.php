<?php
$status = $_GET['status'];
?>

<!DOCTYPE html>
<html class="no-js">
<head>
<?php require_once('headlink.php'); ?>
</head>
<body>
<div id="fh5co-page">
    <?php if($status == "") { ?>
<div class="container"  style="" id="form_main">
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6" id="form" style="margin-top:0px;">
    			<h2 align="center">官网首页修改</h2>

				<form  role="form" method="POST" action="firsttxt_up.php" enctype="multipart/form-data">
					<div class="form-group">
						<label>标题</label>
						<input type="name" placeholder="" class="form-control" name="Name">
					</div>
					<div class="form-group">
						<label>内容</label>
						<input type="" placeholder="" class="form-control" name="Content">
					</div>
					<div class="form-group">
						<label>按钮</label>
						<input type="" placeholder="" class="form-control" name="Pressname">
					</div>
                    <div class="form-group">
						<label for="file">图片名：</label>
						<input type="file" name="file" id="file">
					</div>
					<button type="submit" class="btn btn-sm btn-default">Submit</button>
				</form>
	</div>
	<div class="col-sm-3"></div>
</div>
</div>
<?php } 
else {
?>
<div class="container" style="margin-top:40px;">
    <div class="smart-body">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <button class="btn btn-block btn-lg btn-success btn-icon"><h2>Success<i class="fa fa-check-square-o"></i></h2></button>
            </div>
            <div class="col-sm-4"></div>
        </div>  
    </div>
</div>
<div class="container" style="margin-top:20px;">
    <div class="row">
            <img src="./img/background_SUDA.png" style="width:100%">
    </div>
</div>

<?php } ?>


</div>
</body>
</html>	