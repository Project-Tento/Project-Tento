<?php

include 'config.php';
include '../form-validation.php';
include 'connection.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: ../dashboard/user-dashboard.php");
}

if (isset($_POST["signup"])) {

  $full_name = mysqli_real_escape_string($conn, $_POST["fullName"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["rPassword"]));
  $cPassword = mysqli_real_escape_string($conn, md5($_POST["confirmPassword"]));
  $token = md5(rand());

  // echo "<script>console.log('$token')</script>";

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT Email FROM students WHERE Email='$email'"));

  if ($password != $cPassword) {

    header('Location: ../reg-form.html#register');
    exit();
  } elseif (!isEmailValid($email)) {

    header('Location: ../reg-form.html#register');
    exit();
  } elseif (!isNameValid($fullName)) {

    header('Location: ../reg-form.html#register');
    exit();
  } elseif (!isPasswordValid($password)) {

    header('Location: ../reg-form.html#register');
    exit();
  } elseif ($check_email > 0) {

    header('Location: ../reg-form.html#register');
    exit();
  } else {

    $sql = "INSERT INTO students (UserID, Name, Email, Password, ProfilePicture, Bio, Institution, Level, Status, Code) VALUES (default, '$full_name', '$email', '$password', NULL, NULL, NULL, NULL, '0', '$token')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

      $_POST["fullName"] = "";
      $_POST["email"] = "";
      $_POST["rPassword"] = "";
      $_POST["confirmPassword"] = "";

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
    } else {
      echo "<script>alert('User registration failed.');</script>";
    }
  }
}

if (isset($_POST["signin"])) {
  $email = $_POST['email'];
  $password = $_POST['spassword'];

  //to prevent from mysqli injection  
  $email = stripcslashes($email);
  $password = stripcslashes($password);
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, md5($password));

  $check_email = mysqli_query($conn, "SELECT UserID FROM students WHERE Email='$email' AND Password='$password' AND Status='1'");

  if (mysqli_num_rows($check_email) > 0) {

    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row['UserID'];
    header("Location: ../dashboard/user-dashboard.php");
  } else {

    header('Location: ../reg-form.html#login');
    exit();
  }
}

?>

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'teamtento336572@gmail.com'; //SMTP username
$mail->Password = 'jpepzexnpjjadtzm'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
$mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('teamtento336572@gmai.com', 'Team Tento');
$mail->addAddress('nafisamaliyat@iut-dhaka.edu', 'Nafisa Maliyat'); //Add a recipient

//Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'SUCCESSSSSSS!!!!';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

/*
$mail->IsSMTP();

$mail->CharSet = "UTF-8";
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 1;
$mail->Port = 465; //465 or 587

$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->IsHTML(true);

//Authentication
$mail->Username = "teamtento336572@gmail.com";
$mail->Password = "NmKjijSm";

//Set Params
$mail->SetFrom("teamtento336572@gmail.com");
$mail->AddAddress("shantamaria@iut-dhaka.edu");
$mail->Subject = "Test";
$mail->Body = "hello";


if (!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message has been sent";
}
?>
*/