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
$sql = "CREATE TABLE choices (
QuestionID INT NOT NULL,
ChoiceAText LONGTEXT,
ChoiceBText LONGTEXT,
ChoiceCText LONGTEXT,
ChoiceDText LONGTEXT,
ChoiceAPic LONGTEXT,
ChoiceBPic LONGTEXT,
ChoiceCPic LONGTEXT,
ChoiceDPic LONGTEXT,
FOREIGN KEY (QuestionID) REFERENCES questions(QuestionID)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table choices created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>