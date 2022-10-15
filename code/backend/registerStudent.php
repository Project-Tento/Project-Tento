<?php
require "formValidation.php";
$name=$_POST['name'];
$emailAddress=$_POST['emailAddress'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
$hashedPassword=password_hash($password,PASSWORD_DEFAULT);

if($password==$confirmPassword)
{
  $bothPasswordsValid=true;
}
else
{
  $bothPasswordsValid=false;
  echo "Passwords do not match.\n";
}
if(!isEmailValid($emailAddress))
{
  echo "Email invalid.\n";
}
if(!isNameValid($name))
{
  echo "Name format invalid.\n";
}
if(!isUsernameValid($username))
{
  echo "Username format invalid.\n";
}
if(!isPasswordValid($password))
{
  echo "Password format invalid.\n";
}
if($bothPasswordsValid && isEmailValid($emailAddress) && isNameValid($name) && isUsernameValid($username) && isPasswordValid($password))
{
   $servername = "localhost";
   $user = "root";
   $dbpassword = "Kji1357924680";
   $dbname = "tentodatabase";
   $conn = new mysqli($servername, $user, $dbpassword, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    $query =  $conn->prepare( "INSERT INTO students (Username, Name, Email, Password) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss",$username, $name, $emailAddress, $hashedPassword);
    $query->execute();
    $query->close();
}
?>