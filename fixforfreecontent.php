<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">电脑</span> 义修</h1>
				</div>
			</div>
		</div>
	</div>
	
    <?php 
    require_once('fixforfreeQuestion.php'); 
?>
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>问题特殊？</h2>
					<p>提交你的问题，并在随后和我们的志愿者取得联系。 </p>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function Hint(){
		alert("请在下一个页面选择您中意的小伙子，我们将会为您打开一个临时qq对话窗口。");
	}
</script>


	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>苏州大学 理工楼 110实验室</li>
						<!--<li><i class="icon-phone"></i>+ 000 0000 0000</li>-->
						<li><i class="icon-envelope"></i>lingjiuer@outlook.com</li>
						<!--<li><i class="icon-globe"></i><a href="#">www.sumsc.com</a></li>-->
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<form method="POST" action="fixforfreeGetCproblem.php" enctype="multipart/form-data"> 
							<div class="col-md-2">
								<div class="form-group">
									<input class="form-control" name="name" placeholder="姓名" type="text">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input class="form-control" name="contact" placeholder="联系方式" type="text">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<input class="form-control" name="college" placeholder="学院" type="text">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<input class="form-control" name="grade" placeholder="年级" type="text">
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
									<label>
										<input type="radio" name="sex" value="female">女
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="sex" value="male">男
									</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="problem" class="form-control" id="" cols="30" rows="7" placeholder="问题描述"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								   <input type="submit" name="submit" value="提交" onclick=Hint()> 
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
