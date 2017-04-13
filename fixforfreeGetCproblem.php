<?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '6287672liu');
$DB_NAME = 'msc';
$TB_NAME = 'Cproblem';
$DB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);
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
$sql = "select max(id) as maxid from cproblem;";
$result = $DB->query($sql);
$row = $result->fetch_row();
$report_id = $row[0];
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
else
    
    setcookie('problem',$problem);
    setcookie('name',$name);

header("location:fixforfree.php?status=submitted&report_id=".$report_id);
?>