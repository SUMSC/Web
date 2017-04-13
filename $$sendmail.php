<?php
	require_once "email.class.php";

	if ($_GET['manid'] == 1) {
		$mailat = '2359981832@qq.com';
	} else {
		$mailat = 'cproblemofficial@126.com';
	}

	$smtpserver = "smtp.163.com";
	$smtpserverport =465;
	$smtpusermail = "xaviernj@163.com";
	$smtpemailto = $mailat;
	$smtpuser = "xaviernj";
	$smtppass = "980527qiu";
	$mailtitle = "来自".$_COOKIE['name']."的问题描述";
	$mailcontent = $_COOKIE['problem'];
	$mailtype = "HTML";




	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	$smtp->debug = true;
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);


		echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
		echo "<a href='index.html'>点此返回</a>";
		exit();
	}
	echo "恭喜！邮件发送成功！！";
	echo "<a href='index.html'>点此返回</a>";
	echo "</div>";

	

header("location:fixforfree.php?status=submitted");



?>