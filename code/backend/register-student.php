/*
    //Title: Validation and Checking Functions for Login Form Data
    //Author: Shanta Maria, Kazi Jawadul Islam Jishan
    //Date: 12/10/2022, 18/10/2022
*/

<?php
require "form-validation.php";
$fullName = filter_input(INPUT_POST, 'fullName');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'rPassword');
$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
$hashedPassword = password_hash($password, PASSWORD_BCRYPT); //bcrypt algorithm used

if ($password == $confirmPassword) {
  $bothPasswordsValid = true;
} else {
  $bothPasswordsValid = false;
  echo "Passwords do not match.\n";
}
if (!isEmailValid($email)) {
  echo "Email invalid.\n";
}
if (!isNameValid($fullName)) {
  echo "Name format invalid.\n";
}
/*if(!isUsernameValid($username))
{
  echo "Username format invalid.\n";
}*/
if (!isPasswordValid($password)) {
  echo "Password format invalid.\n";
}
if ($bothPasswordsValid && isEmailValid($email) && isNameValid($fullName) && /*isUsernameValid($username) &&*/ isPasswordValid($password)) {
  $servername = "localhost";
  $user = "root";
  $dbpassword = "";
  $dbname = "tentodatabase";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = new mysqli($servername, $user, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  else {
    $INSERT="INSERT INTO students (UserID, Name, Email, Password, ProfilePicture) VALUES (default, ?, ?, ?, NULL)";
    $SELECT="SELECT Email FROM students WHERE Email=? LIMIT 1";

    $query =  $conn->prepare($SELECT);
    $query->bind_param("s", $email);
    $query->execute();
    $query->bind_result($email);
    $query->store_result();
    $rnum=$query->num_rows();

    if($rnum==0)
    {
      $query->close();
      $query =  $conn->prepare($INSERT);
      $query->bind_param("sss", $fullName, $email, $hashedPassword);
      $query->execute();

      echo "New record inserted successfully!";
    }
    else
    {
      echo "Email has already been used!";
    }
    
    $query->close();
    $conn->close();
  }
}
