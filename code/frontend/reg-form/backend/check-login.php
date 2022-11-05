
<?php

/*
    //Title: Login Verification
    //Author: Shanta Maria
*/

include "connection.php";

session_start();

if (isset($_POST["signin"])) {

    $email = $_POST['login-email'];
    $password = $_POST['sPassword'];

    //to prevent from mysqli injection  
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $password_query = "SELECT Password FROM students where Email = '$email'";
    $result2 = mysqli_query($conn, $password_query);
    $row2 = mysqli_fetch_assoc($result2);
    $hashed_password = $row2["Password"];
    $pass_check = password_verify($password, $hashed_password);

    $check_email = mysqli_query($conn, "SELECT UserID FROM students WHERE Email='$email' AND Password='$hashed_password' AND status='1'");

    if (mysqli_num_rows($check_email) > 0 && $pass_check) {

        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['UserID'];
        echo "Login Done.";
        header('Location: ../dashboard/user-dashboard.php');

    } else {
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
        header('Location: ../login-form.php');
    }
}

?>