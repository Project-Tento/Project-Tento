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
$sql = "CREATE TABLE subjects (
SubjectCode INT PRIMARY KEY NOT NULL,
SubjectName VARCHAR(30) NOT NULL,
Level VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table subjects created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>