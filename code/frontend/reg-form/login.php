/*
//Title: User Info Authentication while Log In
//Author: Shanta Maria
//Date: 18/10/2022
*/

<?php
require "connection.php";

$email = $_POST['email'];
$password = $_POST['spassword'];

//to prevent from mysqli injection  
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM students where Email = '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$password_query = "SELECT Password FROM students where Email = '$email'";
$result2 = mysqli_query($con, $password_query);
$row2 = mysqli_fetch_assoc($result2);
$hashed_password = $row["Password"];
$pass_check = password_verify($password, $hashed_password);

if ($count == 1 && $pass_check) {

    header('Location: ../user-profile/user-profile.html');
    exit();
} else {
    header('Location: reg-form.html#login');
    exit();
}

mysqli_free_result($result);
mysqli_free_result($result2);

mysqli_close($con);

?>