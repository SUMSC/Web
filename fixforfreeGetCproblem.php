<?php 
require_once("config.php");
$TB_NAME = 'Cproblem';

/////////////
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $college = $_POST['college'];
    $grade = $_POST['grade'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $problem = $_POST['problem'];
    echo $name." ".$college." ".$grade." ".$sex." ".$contact." ".$problem." <br>";
}
if($DB->connect_error)
    die('Connect to mysql failed.<br>');
$sql = "insert into $TB_NAME (name, college, grade, sex, contact, problem) values ( '$name', '$college', '$grade','$sex','$contact','$problem');";
$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
else
$sql = "select max(id) as maxid from cproblem;";
$result = $DB->query($sql);
$row = $result->fetch_row();
$report_id = $row[0];



header("location:fixforfree.php?status=submitted&report_id=".$report_id);
?>