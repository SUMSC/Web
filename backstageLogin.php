<?php
	session_start();
	require_once("config.php");
	    echo  $_POST['inputID']."<br>";
		
		$loginID = $_POST['inputID'];
		$loginPW = $_POST['inputPassword'];		

	if($DB->connect_error)
    	{die('Connect to mysql failed.<br>');}

    $sql = "select password from Member where ID = '$loginID';";
    $result = $DB->query($sql);
	$row = $result->fetch_row();
	$getPW = $row['0'];
    if($getPW == $loginPW)
	{
	   	$_SESSION['admin'] = $loginID;
	}
    else
	{
    	$_SESSION['admin'] = "wrong";
	}
	header("location:backstage.php");
?>
