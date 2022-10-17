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
$sql = "CREATE TABLE topics (
    TopicID INT PRIMARY KEY NOT NULL,
    TopicName VARCHAR(30) NOT NULL,
    SubjectCode INT NOT NULL,
    FOREIGN KEY (SubjectCode) REFERENCES subjects(SubjectCode)
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table topics created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>