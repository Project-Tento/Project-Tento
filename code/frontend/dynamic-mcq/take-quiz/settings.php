<?php

session_start();

if(isset($_POST['submit-settings']))
{
    $settingOption = $_POST['setting'];

    //echo 'Something';

    if($settingOption == "default")
    {
        //echo "default";
        $_SESSION['setQuestions'] = 10;
        $_SESSION['setTime'] = 20;
    }
    else
    {
        $_SESSION['setQuestions'] = $_POST['get-question-count'];

        $checkQuizMode = $_POST['quiz-mode'];
        if($checkQuizMode == "Timed")
        {
            $_SESSION['setTime'] = $_POST['get-time'];
        }
        else
        {
            $_SESSION['setTime'] = 0;
        }
    }

    //echo "Helloooo";
    //echo $_SESSION['setQuestions'];
    //echo $_SESSION['setTime'];

    header('Location: ../mcq-test.php');
    
}


?>