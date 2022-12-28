<?php

include "../profile/connection.php";

session_start();

function isPasswordValid($password) {
    return (!preg_match("/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/",$password)) ? FALSE : TRUE;
}

if(isset($_POST['reset-pass']))
{
    $currPass = mysqli_real_escape_string($conn, $_POST['updateCurrentPass']);
    $newPass = mysqli_real_escape_string($conn, $_POST['updateNewPass']);
    $newPassCon = mysqli_real_escape_string($conn, $_POST['updateConfirmPass']);
    $hashedPassword = password_hash($newPass, PASSWORD_BCRYPT); //bcrypt algorithm used

    $userID = $_SESSION['user_id'];
    $sqlForPass = "SELECT Password FROM students WHERE UserID = '$userID'";
    $resultPass = $conn->query($sqlForPass);
    $row = $resultPass->fetch_assoc();

    $passCheck = password_verify($currPass, $row['Password']);

    if($currPass == $row['Password'])
    {
        header('Location: settings.php');
    } elseif (!isPasswordValid($newPass)) {

        header('Location: settings.php');
    } elseif ($newPass != $newPassCon) {

        header('Location: settings.php');
    }  else {

        $update = "UPDATE students SET Password = '$hashedPassword' WHERE UserID = '$userID'";
        $result = $conn->query($update);

        if($result)
        {
            header('Location: ../user-dashboard.php');
        }
        else
        {
            header('Location: settings.php');
        }
    }
}
