<?php

require '/PHPMailer/PHPMailerAutoload.php';
require_once("config.php");
$TB_NAME = 'Cproblem';


$id = $_GET['manid'];

if($id == 1){
	$address='774500050@qq.com';
	$recipient='来姐';
}
else if($id == 2){
	$address='1055614742@qq.com';
	$recipient='杨增';
 }
else if($id == 3){
	$address='1361421504@qq.com';
	$recipient='王瑞津';
}
else if($id == 4){
	$address='627971428@qq.com';
	$recipient='党宏波';
}


$mailAddress = $address;
$mailRecipient = $recipient;
$report_id = $_GET['report_id'];

$sql = "select problem from $TB_NAME where id=$report_id";
$result = $DB->query($sql);
$row = $result->fetch_row();
$content = $row[0];

$sql = "select name from $TB_NAME where id=$report_id";
$result = $DB->query($sql);
$row = $result->fetch_row();
$name = $row[0];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.126.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cproblemofficial';                 // SMTP username
$mail->Password = '404pagenotfound';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('cproblemofficial@126.com', 'Cproblem');
$mail->addAddress($mailAddress, $mailRecipient);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "电脑问题咨询邮件";
$mail->Body    = "$content";
$mail->AltBody = "$content";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

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