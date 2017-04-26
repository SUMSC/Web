<?php 
session_start();
if($_SESSION["admin"])
{}
else{
	$_SESSION["admin"]=null;
	}
 ?>

<html class="no-js">
	<head>

	<!--这里是头部连接-->
	<?php require_once('headlink.php'); ?>

    </head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-12">
					<h3>
						SUMSC管理后台
					</h3>
				</div>
			</div>
			<div class="row-fluid">

<?php 
if($_SESSION["admin"] == null || $_SESSION['admin'] == "wrong")
	{ ?>
					<form class="form-horizontal" method="POST" action="backstageLogin.php" >
						请登录：
						<div class="control-group">
							 <label class="control-label" for="inputEmail">用户名</label>
							<div class="controls">
								<input name="inputID" type="text" />
							</div>
						</div>
						<div class="control-group">
							 <label class="control-label" for="inputPassword">密码</label>
							<div class="controls">
								<input name="inputPassword" type="password" />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							 <button type="submit" class="btn">登陆</button>
							</div>
						</div>
						<?php 
							if ($_SESSION['admin'] == "wrong")
							{
						?>
						<div class="alert alert-warning">登陆失败，请重试。</div>
						<?php
							}
						?>
					</form>
	<?php }
else
	{ ?>
				<div class="col-md-2">
					<ul class="nav nav-list">
						<li class="nav-header">
							菜单
						</li>
						<li class="active">
							<a href="backstage.php?column=1">活动上传</a>
						</li>
						<li>
							<a href="backstage.php?column=2">资料上传</a>
						</li>
						<li>
							<a href="backstage.php?column=3">资料查看</a>
						</li>
						<li>
							<a href="backstage.php?column=4">首页更新</a>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
		<?php		require('backstageContent.php'); ?>
				</div>
<?php
 } ?>



				
			</div>
		</div>
	<?php require_once('endlink.php'); ?>


	</body>
</html>
	
