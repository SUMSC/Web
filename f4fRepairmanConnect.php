<?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '6287672liu');
$DB_NAME = 'msc';
$DB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);
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