<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth =true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "bamujonah@gmail.com";
$mail->Password = "tjfy herf urgp srcp";

$mail->setFrom($email,$name);
$mail->addAddress("nagalaalecountryhome@gmail.com");

$mail->Subject = $subject;
$mail->Body = $message;



$mail->send();

echo "email sent";

// header("Location:sent.html");