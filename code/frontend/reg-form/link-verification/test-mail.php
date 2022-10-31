<?php

include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$email="shantamaria@iut-dhaka.edu";
$full_name="Shanta Maria";
$token=md5(rand());

$to = $email;
$subject = "Email verification - Tento";

$message = "
  <html>
  <head>
  <title>{$subject}</title>
  </head>
  <body>
  <p><strong>Dear {$full_name},</strong></p>
  <p>Thanks for registration! Verify your email to access our website. Click below link to verify your email.</p>
  <p><a href='{$base_url}verify-email.php?token={$token}'>Verify Email</a></p>
  </body>
  </html>
  ";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = $smtp['host'];                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = $smtp['user'];                     //SMTP username
  $mail->Password   = $smtp['pass'];                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = $smtp['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom($my_email, $my_name);
  $mail->addAddress($email, $full_name);     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $subject;
  $mail->Body    = $message;

  $mail->send();
  echo "<script>alert('We have sent a verification link to your email - {$email}.');</script>";
} catch (Exception $e) {
  echo "<script>alert('Mail not sent. Please try again.');</script>";
}

?>