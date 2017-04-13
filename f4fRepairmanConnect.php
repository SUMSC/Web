<?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '6287672liu');
$DB_NAME = 'msc';
$TB_NAME = 'Cproblem';
$DB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);
/////////////
$id = $_GET['manid'];
$report_id = $_GET['report_id'];
$sql = "update Cproblem set worker = $id where id = $report_id;";
$result = $DB->query($sql);
if($id == 1){
	header("Location:http://wpa.qq.com/msgrd?v=3&uin=774500050&site=qq&menu=yes");
}
else if($id == 2){
	header('Location:http://wpa.qq.com/msgrd?v=3&uin=1055614742&site=qq&menu=yes');
 }
else if($id == 3){
	header("Location:http://wpa.qq.com/msgrd?v=3&uin=1361421504&site=qq&menu=yes");
}
else if($id == 4){
	header("Location:http://wpa.qq.com/msgrd?v=3&uin=627971428&site=qq&menu=yes");
}
 ?>