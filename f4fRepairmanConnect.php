<?php 
require_once("config.php");
/////////////
$id = $_GET['manid'];
$report_id = $_GET['report_id'];
if($DB->connect_error)
    die('Connect to mysql failed.<br>');

$sql = "update Cproblem set worker = $id where id = $report_id;";
$result = $DB->query($sql);
if( $result <= 0 )
    die("update failed.<br>");
require('SendMail.php');

 ?>