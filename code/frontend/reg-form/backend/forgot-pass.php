
<?php

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
    header("Location: dashboard/user-dashboard.php");
}

if (isset($_POST['reset'])) {

    //echo "<script type=text/javascript>console.log('helloooo');</script>";
    $email = $_POST['login-email'];
    $token = md5(rand());

    //echo "<script type=text/javascript>console.log('$email');</script>";

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT Email FROM students WHERE Email='$email'"));
    
    $sqlForUserID = "SELECT UserID FROM students WHERE Email='$email'";
    $resultID = $conn->query($sqlForUserID);
    $rowID = $resultID->fetch_assoc();
    $userID = $rowID['UserID'];
    $_SESSION['forgotID'] = $userID;
    $full_name = $rowID['Name'];

    //echo "<script type=text/javascript>console.log('$userID');</script>";

    if ($check_email != 1) {

        header('Location: ../register-form.php');
    } else {

        $update = "UPDATE students SET Code = '$token' WHERE UserID = '$userID'";
        $result = $conn->query($update);

        if ($result) {

            $to = $email;
            $subject = "Email verification - Tento";

            $message = "
        <html>
        <head>
        <title>{$subject}</title>
        </head>
        <body>
        <p><strong>Dear {$full_name},</strong></p>
        <p>This email has been sent to reset your password. Click the link below to verify your email and reset your password.</p>
        <p><a href='{$base_url}verify-email-forgot.php?token={$token}'>Verify Email</a></p>
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

                header('Location: ../forgot-password/forgot-password-email-verification.php');
                
                //$_SESSION['error'] = 'emailSent';
                //header('Location: ../forgot-password/reset-password.php');

            } catch (Exception $e) {

                echo 'emailNotSent';
                header('Location: ../forgot-password/forgot-password-email-verification.php');
            }
        } else {

            echo 'tryAgain';
            header('Location: ../forgot-password/forgot-password-email-verification.php');
        }
    }
}

if(isset($_POST['change-pass']))
{
    $password = mysqli_real_escape_string($conn, $_POST["resetPass"]);
    $cPassword = mysqli_real_escape_string($conn, $_POST["resetConfirmPass"]);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); //bcrypt algorithm used
    $userID = $_SESSION['forgotID'];
    
    if (!isPasswordValid($password)) {

        header('Location: ../forgot-password/reset-password.php');
    } elseif ($password != $cPassword) {

        header('Location: ../forgot-password/reset-password.php');
    } else {

        $update = "UPDATE students SET Password = '$hashedPassword' WHERE UserID = '$userID'";
        $result = $conn->query($update);

        if($result)
        {
            header('Location: ../login-form.php');
        }
        else
        {
            header('Location: ../forgot-password/reset-password.php');
        }
    }
}
