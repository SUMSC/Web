<?php 
require_once('config.php');
$DB_NAME = 'msc';
$TB_NAME = 'Activity';
$DB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $Name = $_POST['Name'];
    $Content = $_POST['Content'];
    $Pressname = $_POST['Pressname'];
    $file = $_POST['file'];
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
	$pic = "upload/" .$id."/".  $_FILES["file"]["name"];
}

if($DB->connect_error)
    die('Connect to mysql failed.<br>');
$sql = "insert into $TB_NAME ( Name, Content, Pressname, Imgpath) values ( '$Name', '$Content', '$Pressname','$pic');";
$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
//else  header("location:backstage.php?status=1") ;
?>
