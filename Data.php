<?php

require_once("config.php");

header("Content-type:text/html; charset=utf-8");

$sql = "select Name, College, Grade, Sex, Contact, Problem, Worker from Cproblem;";

$result = $DB->query($sql);

while($row = $result->fetch_assoc())
{
    echo $row['Name']." - ". $row['Sex']. " - " .$row['Contact']. " - ". $row['Worker'] ." <br> ".$row['Problem']."<br><br>";
}


?>
