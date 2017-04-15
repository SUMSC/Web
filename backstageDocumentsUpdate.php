<?php 
require_once("config.php");
$TB_NAME = 'Document';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $file = $_POST['file'];
    $Author = $_SESSION['admin'];
// 允许上传的图片后缀
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ($_FILES["file"]["error"] > 0)
{
	echo "错误：: " . $_FILES["file"]["error"] . "<br>";
}
else
{
	echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
	echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
	echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
	
	// 判断当期目录下的 upload 目录是否存在该文件
	// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
	if (file_exists("upload/Documents/" . $_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"] . " 文件已经存在。 ";
	}
	else
	{
		if($DB->connect_error)
				   die('Connect to mysql failed.<br>');
		$sql = "select max(id) as maxid from Document;";
		$result = $DB->query($sql);
		$row = $result->fetch_row();
		$id = $row[0]+1;
		mkdir('upload/Documents/'.$id);

		// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/Documents/" .$id."/". 	iconv("UTF-8","GBK",$_FILES["file"]["name"]));
		echo "文件存储在: " . "upload/Documents/" .$id."/".  $_FILES["file"]["name"];
		$Appendix = "upload/Documents/" .$id."/".  $_FILES["file"]["name"];
	}
}
}


if($DB->connect_error)
    die('Connect to mysql failed.<br>');
$sql = "insert into $TB_NAME ( title, content, Appendix,author) values ( '$title', '$content','$Appendix','$Author');";
$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
else  header("location:backstage.php?status=1") ;
?>