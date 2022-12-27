<?php
include "connection.php";
include "get-answer.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
} else {

    $setQuestions = $_SESSION['setQuestions'];
    $setTime = $_SESSION['setTime'];
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
    <title>Test Page</title>
    <link rel="stylesheet" href="mcq-form-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../favicon.ico">
</head>

<body>

    <div class="navbar sticky-top" id="navbar">

        <!--logo-->
        <div class="logo">
            <!-- <img src="../favicon.png"> TENTO -->

        </div>

        <span id="timer">
            <span id="time" value="<?php echo $setTime; ?>"></span>
        </span>

    </div>

    <?php

    $questionNumber = 1;
    
    $sql = "SELECT * FROM questions natural join choices natural join solutions WHERE TopicID=$setTopicID";
    $result = $conn->query($sql);
    ?>

    <div class="container mb-5">

        <!--insert topic name here-->
        <h1 id="topic-name"><?php echo $setTopicName ?></h1>
        <!--GET THE SCORE-->
        <h6 id="total-score">Total score: <?php echo $setQuestions ?></h6>
        <hr>

        <form method="post" action="get-answer.php" id="mcq-form">

            <?php
            if ($result->num_rows > 0) {
                while ($questionNumber <= $setQuestions) {

                    $row = $result->fetch_assoc();
            ?>

                    <div class="row">
                        <!--question1-->
                        <div class="question<?php echo "{$questionNumber}"; ?>">
                            <div class="col-12">
                                <p class="fw-bold" id="question-1-text">
                                    <?php echo "{$questionNumber}. {$row['QuestionText']}"; ?>
                                <p>
                                    <img id="question-1-img" class="question-image" id="question-1-image" src="" alt="">
                                </p>
                                </p>
                                <div>
                                    <input type="radio" name="box<?php echo "{$questionNumber}"; ?>" id="one<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceAText']; ?>">

                                    <input type="radio" name="box<?php echo "{$questionNumber}"; ?>" id="two<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceBText']; ?>">

                                    <input type="radio" name="box<?php echo "{$questionNumber}"; ?>" id="three<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceCText']; ?>">

                                    <input type="radio" name="box<?php echo "{$questionNumber}"; ?>" id="four<?php echo "{$questionNumber}"; ?>" value="<?php echo $row['ChoiceDText']; ?>">

                                    <!--THE ANSWER FOR POSTING-->
                                    <input type=text name="answer<?php echo "{$questionNumber}"; ?>" class="d-none" value="<?php echo $row['AnswerText']; ?>" />


                                    <label for="one<?php echo "{$questionNumber}"; ?>" class="box one<?php echo "{$questionNumber}"; ?>">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceAText']; ?>
                                                <img id="question-1-img-option-a" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="two<?php echo "{$questionNumber}"; ?>" class="box two<?php echo "{$questionNumber}"; ?>">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceBText']; ?>
                                                <img id="question-1-img-option-b" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="three<?php echo "{$questionNumber}"; ?>" class="box three<?php echo "{$questionNumber}"; ?>">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceCText']; ?>
                                                <img id="question-1-img-option-c" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="four<?php echo "{$questionNumber}"; ?>" class="box four<?php echo "{$questionNumber}"; ?>">
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
            <?php
                    $questionNumber += 1;
                }
            } ?>

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="submit-button" name="submit-answers" id="submit-answers">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>



    <script src="mcq-form-2.js"></script>
    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</body>

</html>