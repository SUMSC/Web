<?php 
header("charset=utf-8");
require_once("config.php");

$TB_NAME = 'Cproblem';

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

$sql = "insert into $TB_NAME (Name, College, Grade, Sex, Contact, Problem) values ( '$name', '$college', '$grade','$sex','$contact','$problem');";

echo "<br>".$sql."<br>";

$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
else
    $sql = "select max(ID) as MAXID from Cproblem;";
$result = $DB->query($sql);


$row = $result->fetch_assoc();

var_dump($row);

echo $row[0];

$report_id = $row['MAXID'];

echo $report_id;
header("location:fixforfree.php?status=submitted&report_id=$report_id");
?>
