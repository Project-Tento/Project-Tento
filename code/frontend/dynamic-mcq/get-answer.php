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

    $_SESSION['userAnswers'] = array();
    $_SESSION['questionIDs'] = array();
    $questionNumber = $_SESSION['setQuestions'];
    $calculatedScore=0;

    while($questionNumber>0)
    {
        $postAnswerVariableName = 'answer' . $questionNumber;
        $postUserAnsVariableName = 'box' . $questionNumber;
        $postQuestionIDVariableName = 'questionID' . $questionNumber;

        $correctAnswer = $_POST[$postAnswerVariableName];
        $userAnswer = $_POST[$postUserAnsVariableName];
        $questionID = $_POST[$postQuestionIDVariableName];

        array_push($_SESSION['userAnswers'], $userAnswer?$userAnswer:'null');
        array_push($_SESSION['questionIDs'], $questionID?$questionID:'null');

        if($correctAnswer==$userAnswer)
        {
            $calculatedScore+=1;
        }

        $questionNumber--;
    }

    $_SESSION['userScore']=$calculatedScore;

    header('Location: loader.php');
}

?>