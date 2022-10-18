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
$sql = "CREATE TABLE testSessions (
SessionID INT PRIMARY KEY NOT NULL,
Score INT NOT NULL,
DateTime DATETIME NOT NULL,
UserID INT NOT NULL,
TopicID INT NOT NULL,
FOREIGN KEY (TopicID) REFERENCES topics(TopicID),
FOREIGN KEY (UserID) REFERENCES students(UserID)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table for test sessions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>