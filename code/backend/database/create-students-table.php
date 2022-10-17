<?php
$servername = "localhost";
$username = "root";
$password = "Kji1357924680";
$dbname = "tentodatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE students (
UserID INT PRIMARY KEY NOT NULL,
Name VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Password VARCHAR(100) NOT NULL,
ProfilePicture LONGBLOB
)";

if ($conn->query($sql) === TRUE) {
  echo "Table students created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>