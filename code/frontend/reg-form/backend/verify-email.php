<?php

/*
    //Title: Verifying Email Upon Sign Up
    //Author: Shanta Maria
*/

session_start();
if (isset($_GET["token"])) {

    include 'config.php';
    $sql = "UPDATE students SET Status='1' WHERE Code='{$_GET["token"]}'";
    mysqli_query($conn, $sql);
    
    $showUserId = mysqli_fetch_assoc(mysqli_query($conn, "SELECT UserID FROM students WHERE Code='{$_GET["token"]}'"));
    $_SESSION["user_id"] = $showUserId['UserID'];
    header("Location: http://localhost/test/frontend/reg-form/login-form.php");
} else {
    $_SESSION['error'] = 'notVerified';
    //header("Location: http://localhost/test/reg-form/register-form.php");
}

?>