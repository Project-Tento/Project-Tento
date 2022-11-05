<?php
$questionID = filter_input(INPUT_POST, 'questionID');
$questionText = filter_input(INPUT_POST, 'questionText');
$topicID = filter_input(INPUT_POST, 'topicID');
$choiceAText = filter_input(INPUT_POST, 'choiceAText');
$choiceBText = filter_input(INPUT_POST, 'choiceBText');
$choiceCText = filter_input(INPUT_POST, 'choiceCText');
$choiceDText = filter_input(INPUT_POST, 'choiceDText');
$hint = filter_input(INPUT_POST, 'hint');
$solutionText = filter_input(INPUT_POST, 'solutionText');

  $servername = "localhost";
  $user = "root";
  $dbpassword = "Kji1357924680";
  $dbname = "tentodatabase";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = new mysqli($servername, $user, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    $query =  $conn->prepare( "INSERT INTO questions (QuestionID, QuestionText, TopicID) VALUES (?, ?, ?)");
    $query->bind_param("sss", $questionID, $questionText, $topicID);
    $query->execute();

    $query =  $conn->prepare( "INSERT INTO choices (QuestionID, ChoiceAText, ChoiceBText, ChoiceCText, ChoiceDText) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $questionID, $choiceAText, $choiceBText, $choiceCText, $choiceDText);
    $query->execute();

    $query =  $conn->prepare( "INSERT INTO solutions (QuestionID, SolutionText, Hint) VALUES (?, ?, ?)");
    $query->bind_param("sss", $questionID, $solutionText, $hint);
    $query->execute();

    $query->close();
    $conn->close();
  }