
<?php

/*
    //Title: Sign Up Validation and Verification
    //Author: Shanta Maria
*/

include 'config.php';
include 'form-validation.php';
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

if (isset($_POST['signup'])) {

    $full_name = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["rPassword"]);
    $cPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); //bcrypt algorithm used
    $token = md5(rand());

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT Email FROM students WHERE Email='$email'"));

    if ($password != $cPassword) {

        header('Location: ../reg-form/register-form.php');

    } elseif (!isEmailValid($email)) {

        header('Location: ../reg-form/register-form.php');

    } elseif (!isNameValid($fullName)) {

        header('Location: ../reg-form/register-form.php');

    } elseif (!isPasswordValid($_POST["rPassword"])) {

        header('Location: ../reg-form/register-form.php');

    } elseif ($check_email > 0) {

        header('Location: ../reg-form/register-form.php');

    } else {

        $sqlForPFP="SELECT * FROM pfp ORDER BY RAND() LIMIT 1";
        $resultPFP = $conn->query($sqlForPFP);
        $row = $resultPFP->fetch_assoc();
        $randomPFP = $row['pfp_link'];

        $sql = "INSERT INTO students (UserID, Name, Email, Password, ProfilePicture, Bio, Institution, Level, Status, Code) VALUES (default, '$full_name', '$email', '$hashedPassword', '$randomPFP', NULL, NULL, NULL, '0', '$token')";

        $result = $conn->query($sql);

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
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  //Enable verbose debug output
                $mail->isSMTP();                                        //Send using SMTP
                $mail->Host       = $smtp['host'];                      //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                               //Enable SMTP authentication
                $mail->Username   = $smtp['user'];                      //SMTP username
                $mail->Password   = $smtp['pass'];                      //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
                $mail->Port       = $smtp['port'];                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($my_email, $my_name);
                $mail->addAddress($email, $full_name);                  //Add a recipient

                //Content
                $mail->isHTML(true);                                    //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;

                $mail->send();
                echo "<script>console.log('Hereeee 4' );</script>";
                echo "<script>alert('We have sent a verification link to your email - {$email}.');</script>";
                header('Location: ../reg-form/login-form.php');
                
            } catch (Exception $e) {
                echo "<script>alert('Mail not sent. Please try again.');</script>";
                header('Location: ../reg-form/register-form.php');
            }
        } else {
            echo "<script>alert('User registration failed.');</script>";
            header('Location: ../reg-form/register-form.php');
        }
    }
}