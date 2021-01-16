<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


session_start();

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host= "smtp.gmail.com";
$mail->SMTPAuth="true"; 
$mail->SMTPSecure="tls";
$mail->Port="587";
$mail->Username="mybook2020edition@gmail.com";
$mail->Password="123456789hH@";
$mail->Subject="test email";
$mail->SetFrom("mybook2020edition@gmail.com");
$mail->Body="Félicitation votre compte a été bien crée";
$mail->addAddress($_SESSION['email']);
if($mail->Send()){
    echo"email sent...!";
}
else{
    echo"error";
}
$mail->smtpClose();








?>