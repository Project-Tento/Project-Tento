<?php

session_start();

include "connection.php";

if (isset($_POST['theTopicName'])) {

    $_SESSION['userTopicChoice'] = $_POST['theTopicName'];
    $_SESSION['setTopicID'] = $_POST['theTopicID'];

    //echo $_SESSION['setTopicID'];

    $topicID = $_SESSION['setTopicID'];

    $sql = "SELECT * FROM questions WHERE TopicID = '$topicID'";
    $check = mysqli_num_rows(mysqli_query($conn, $sql));

    if($check > 0)
    {
        header('Location: ../../dynamic-mcq/take-quiz/take-quiz.php');
    }
    else
    {
        header('Location: ../../dynamic-mcq/no-quiz-loader.php');
    }


    
}

?>