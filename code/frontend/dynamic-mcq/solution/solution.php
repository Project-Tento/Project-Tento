<?php
include "connection.php";
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
} else {

    $questionIDs = $_SESSION['questionIDs'];

    $setQuestions = $_SESSION['setQuestions'];
    $score = $_SESSION['userScore'] ? $_SESSION['userScore'] : 0;
    $userAnswers = $_SESSION['userAnswers'];
    $setTopicName = $_SESSION['userTopicChoice'];
    $setTopicID = $_SESSION['setTopicID'];
    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM students WHERE UserID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution</title>
    <link rel="stylesheet" href="solution.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <script src="solution.js"></script>
</head>

<body onload="colorAll(<?php echo $setQuestions ?>)">

    <div class="navbar sticky-top" id="navbar">

        <!--logo-->
        <div class="logo">
            <!-- <img src="../favicon.png"> TENTO -->

        </div>

    </div>

    <?php

    $questionNumber = 1;
    
    $sqlForTopicName = "SELECT TopicName FROM topics WHERE TopicID='$setTopicID'";
    $resultForTopicName = $conn->query($sqlForTopicName);
    $topicName = $resultForTopicName->fetch_assoc();

    ?>

    <div class="container mb-5">
        <span class="float-end">
            <button class="backToDashboardButton" type="button"
                onclick="window.location.href='../../dashboard/user-dashboard.php';">
                <div class="icon fa fa-desktop"></div>
                <span></span>
            </button>
        </span>

        <!--insert topic name here-->
        <h1 id="topic-name"><?php echo $topicName['TopicName'] ?></h1>
        <!--GET THE SCORE-->
        <h6 id="total-score">Obtained Score: <?php echo  $score ?>&nbsp;/&nbsp;<?php echo  $setQuestions ?></h6>
        <hr>

        <form method="post" id="" action="">
            <?php
           
            //echo $i;

            while ($questionNumber<=$setQuestions) {
                $i = $setQuestions - $questionNumber; 


                $sql = "SELECT * FROM questions natural join choices natural join solutions WHERE TopicID='$setTopicID' AND QuestionID = '$questionIDs[$i]'";
                $result = $conn->query($sql);
                $s=0;

                if ($result->num_rows > 0) {

                    
                    $row = $result->fetch_assoc();
            ?>

            <div class="row">
                <!--question1-->
                <div class="question<?php echo "{$questionNumber}"; ?>">
                    <div class="col-12">
                        <p class="fw-bold each-question-text" id="question-1-text">
                            <?php echo "{$questionNumber}. {$row['QuestionText']}"; ?>
                            <span class="tick-mark fa-solid fa-circle-check ml-2 d-none"></span>
                            <span class="cross-mark fa-solid fa-circle-xmark ml-2 d-none"></span>
                        </p>
                        <p>
                            <img id="question-1-img" class="question-image" id="question-1-image">
                        </p>




                        <div>
                            <input type="radio" class="radioButton" name="box<?php echo "{$questionNumber}"; ?>"
                                id="one<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceAText']; ?>"
                                disabled>

                            <input type="radio" class="radioButton" name="box<?php echo "{$questionNumber}"; ?>"
                                id="two<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceBText']; ?>"
                                disabled>

                            <input type="radio" class="radioButton" name="box<?php echo "{$questionNumber}"; ?>"
                                id="three<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceCText']; ?>"
                                disabled>

                            <input type="radio" class="radioButton" name="box<?php echo "{$questionNumber}"; ?>"
                                id="four<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceDText']; ?>"
                                disabled>

                            <!--THE ANSWER FOR POSTING---------------->
                            <input type="text" name="answer<?php echo "{$questionNumber}"; ?>" class="answer d-none"
                                value="<?php echo $row['AnswerText']; ?>" />



                            <!--HIDDEN BUTTON FOR COLORING-->
                            <button type="button" class="d-none" id="greenButton"
                                onclick="colorThisGreen(<?php echo $questionNumber ?>)">CLICK ME!!!!!</button>
                            <button type="button" id="redButton"
                                onclick="colorThisRed('<?php echo $userAnswers[$i] ?>', <?php echo $questionNumber ?>)">
                                CLICK ME RED!!!! <?php echo $userAnswers[$i] ?>
                            </button>

                            <!------------add incorrectBox to the class list
                                        to the label 
                                        example: class="box incorrectBox..."--------------->
                            <label for="one<?php echo "{$questionNumber}"; ?>"
                                class="box one<?php echo "{$questionNumber}"; ?>" disabled>
                                <div class="course">
                                    <!------------add incorrectCircle  to the class list
                                        to the span element with circle class 
                                        example: class="circle incorrectCircle..."--------------->
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $row['ChoiceAText']; ?>
                                        <img id="question-1-img-option-a" alt="">
                                    </span>
                                </div>
                            </label>

                            <label for="two<?php echo "{$questionNumber}"; ?>"
                                class="box two<?php echo "{$questionNumber}"; ?>" disabled>
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $row['ChoiceBText']; ?>
                                        <img id="question-1-img-option-b" alt="">
                                    </span>
                                </div>
                            </label>

                            <label for="three<?php echo "{$questionNumber}"; ?>"
                                class="box three<?php echo "{$questionNumber}"; ?>" disabled>
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $row['ChoiceCText']; ?>
                                        <img id="question-1-img-option-c" alt="">
                                    </span>
                                </div>
                            </label>

                            <label for="four<?php echo "{$questionNumber}"; ?>"
                                class="box four<?php echo "{$questionNumber}"; ?>" disabled>
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $row['ChoiceDText']; ?>
                                    </span>
                                    <img id="question-1-img-option-d" alt="">
                                </div>
                            </label>

                        </div>
                    </div>

                </div>


            </div>

            <div class="solution mt-2">

                <div class="solution-text-section p-2">
                    Solution:&nbsp;
                    <?php echo $row['SolutionText']; ?>
                </div>
                <br>
                <div class="solution-image-section">
                    <!--SOLUTION IMAGE GOES HERE, ADD SRC---------------------->
                    <img id="solution-image">
                </div>
            </div>

            <?php
                    
                }

                $questionNumber += 1;
            }
            ?>

            <!-- <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="submit-button" name="submit-answers">SUBMIT</button>
                </div>
            </div> -->
        </form>
    </div>



    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="solution.js"></script>
    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>

</body>

</html>