<?php
	require_once ("config.php");
	$TB_NAME = 'firstpage';
	$sql = "select * from $TB_NAME order by id desc;";
	$result = $DB->query($sql);
	while($row = $result->fetch_row()){
		$ID = $row['0'];
		$Title = $row['1'];
		$Abstract = $row['2'];
		$Link = $row['3'];
		$Imgpath = $row['4'];
 ?>
<li style="background-image: url(<?php echo $Imgpath; ?>);">
	<div class="container">
		<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
			<div class="fh5co-property-brief-inner">
				<div class="fh5co-box">
					<h3><a href="<?php echo $Link; ?>"><?php echo $Title; ?></a></h3>
            <p><?php echo $Abstract; ?></p>
            <p><a href="<?php echo $Link; ?>">了解更多</a></p>
				</div>
			</div>
		</div>
	</div>
</li>
<?php } ?>