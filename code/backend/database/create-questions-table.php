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
$sql = "CREATE TABLE questions (
QuestionID INT PRIMARY KEY NOT NULL,
QuestionText LONGTEXT NOT NULL,
QuestionPicture LONGBLOB,
SolutionText LONGTEXT NOT NULL,
SolutionPicture LONGBLOB,
Hint LONGTEXT NOT NULL,
Answer VARCHAR(30) NOT NULL,
TopicID INT NOT NULL,
hoiceA LONGTEXT NOT NULL,
ChoiceB LONGTEXT NOT NULL,
ChoiceC LONGTEXT NOT NULL,
ChoiceD LONGTEXT NOT NULL,
FOREIGN KEY (TopicID) REFERENCES topics(TopicID)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table questions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>