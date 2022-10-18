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
$sql = "CREATE TABLE solutions (
QuestionID INT NOT NULL,
SolutionText LONGTEXT NOT NULL,
SolutionPicture LONGBLOB,
Hint LONGTEXT NOT NULL,
AnswerText LONGTEXT,
AnswerPic LONGBLOB,
FOREIGN KEY (QuestionID) REFERENCES questions(QuestionID)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table solutions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>