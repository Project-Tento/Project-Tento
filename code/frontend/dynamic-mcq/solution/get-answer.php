<?php

/*
    //Title: Fetching Answers for Evaluation
    //Author: Shanta Maria
    //Date: 26/12/2022
*/

session_start();

include "connection.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (isset($_POST['submit-answers'])) {

    $questionNumber = $_SESSION['userSetQuestionNo'];
    $calculatedScore=0;

    while($questionNumber>0)
    {
        $postAnswerVariableName = 'answer' . $questionNumber;
        $postUserAnsVariableName = 'box' . $questionNumber;

        $correctAnswer = $_POST[$postAnswerVariableName];
        $userAnswer = $_POST[$postUserAnsVariableName];

        if($correctAnswer==$userAnswer)
        {
            $calculatedScore+=1;
        }

        $questionNumber--;
    }

    $_SESSION['userScore']=$calculatedScore;

    header('Location: score-page/score.php');
}

?>