<?php
$column = $_GET['column'];
$status = $_GET['status'];
$view = $_GET['view'];
	if($column == 1)
	{
		require_once('backstageActivity.php');

	}
	else if($column == 2)
	{
		require_once('backstageDocuments.php');
	}
	else if($column == 3)
	{
		require_once('backstageDocuments.php?view=1');
	}
	else if($column == 4)
	{
		require_once('backstageIndexUpdate.php');
	}
    
    if($status == 1)
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
