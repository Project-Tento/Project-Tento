<?php

session_start();

include "connection.php";

if (isset($_POST['theTopicName'])) {

    $_SESSION['userTopicChoice'] = $_POST['theTopicName'];

    header('Location: ../../dynamic-mcq/take-quiz/take-quiz.php');
}

?>