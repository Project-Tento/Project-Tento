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
AnswerText LONGTEXT NOT NULL,
AnswerPic LONGBLOB,
TopicID INT NOT NULL,
ChoiceAText LONGTEXT NOT NULL,
ChoiceBText LONGTEXT NOT NULL,
ChoiceCText LONGTEXT NOT NULL,
ChoiceDText LONGTEXT NOT NULL,
ChoiceAPic LONGBLOB,
ChoiceBPic LONGBLOB,
ChoiceCPic LONGBLOB,
ChoiceDPic LONGBLOB,
FOREIGN KEY (TopicID) REFERENCES topics(TopicID)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table questions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>