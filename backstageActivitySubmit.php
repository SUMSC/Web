<?php 
require_once("config.php");
$TB_NAME = 'Activity';


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $title = $_POST['title'];
    $links = $_POST['links'];
    echo $links.'<br>';
    $content = $_POST['content'];
    $date = date('y-m-d-h-i-s',time());
    $activityTime = $_POST['activityTime'];
    $file = $_POST['file'];
    $place = $_POST['place'];
    $id = $_POST['id'];
    $abstract = $_POST['abstract'];
    // 允许上传的图片后缀
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    echo $_FILES["file"]["size"];
    $extension = end($temp);     // 获取文件后缀名
    if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
        && in_array($extension, $allowedExts))
    {
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
            if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " 文件已经存在。 ";
            }
            else
            {
                if($DB->connect_error)
                    die('Connect to mysql failed.<br>');
                $sql = "select max(id) as maxid from Activity;";
                $result = $DB->query($sql);
                $row = $result->fetch_row();
                $id = $row['maxid']+1;
                $path = "upload/$id";
                mkdir($path);
                chmod($path, 0777);
                // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$id."/". 	iconv("UTF-8","GBK",$_FILES["file"]["name"]));
                echo "文件存储在: " . "upload/" .$id."/".  $_FILES["file"]["name"];
                $pic = "upload/" .$id."/".  $_FILES["file"]["name"];
            }
        }
    }
    else
    {
        echo "非法的文件格式<br>";
    }
}

if($DB->connect_error)
    die('Connect to mysql failed.<br>');
echo "Hello";
$sql = "insert into $TB_NAME ( Name, Infor_path, News_1, Img_path, Time, Location, ActivityTime, Abstract) values ( '$title', '$links', '$content','$pic','$date','$place','$activityTime','$abstract');";
echo "<br>".$sql."<br>";
$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
// else  header("location:backstage.php?status=1") ;
?>
