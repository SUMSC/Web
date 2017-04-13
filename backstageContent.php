<?php
$column = $_GET['column'];
$status = $_GET['status'];
	if($column == 1)
	{
		require_once('backstageActivity.php');

	}
	else if($column == 2)
	{
		
	}
	else if($column == 3)
	{
		
	}
	else if($column == 4)
	{
		
	}
	else if($status == 1)
	{
?>
		<h3>操作成功！</h3>
<?php		
	}
	else
	{
?>
					<h3>
						欢迎页
					</h3>
<?php
	} ?>