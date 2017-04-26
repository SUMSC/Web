<?php
$status = $_GET['status'];
$report_id = $GET['report_id'];
?>


<html class="no-js"> <!--<![endif]-->
    <head>
    <!--这里是头部连接-->
    <?php require_once('headlink.php'); ?>

    </head>
    <body>


    <div id="fh5co-page">	
    <!--这里是Bar-->
<?php
require_once('head.php'); 

if($status == "submitted"){ 

    require_once('f4fRepairmanIntro.php');
} 
else{ 
    require_once('fixforfreecontent.php');

} 

require_once('ending.php'); 

?>

    </div>


    <!--这里js库-->
    <?php require_once('endlink.php'); ?>

    </body>
</html>

