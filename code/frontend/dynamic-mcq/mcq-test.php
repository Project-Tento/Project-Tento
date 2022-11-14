<?php
include "connection.php";
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
    <!--
        reference for fetching question text & image, 
        answer option (four each) and their image(if any)
        
        id of total score: total-score
        id of topic name: topic-name
        id of question text: 
        question-1-text
        question-2-text
        question-3-text
        question-4-text
        question-5-text
        question-6-text
        question-7-text
        question-8-text
        question-9-text
        question-10-text

        id of question image
        question-1-image
        question-2-image
        question-3-image
        question-4-image
        question-5-image
        question-6-image
        question-7-image
        question-8-image
        question-9-image
        question-10-image


        id of radio buttons (the circle portion of the option)
        one-one
        one-two
        .
        .
        .
        ten-three
        ten-four

        
        id of images in option format
        question-1-img-option-a
        question-1-img-option-b
        question-1-img-option-c
        question-1-img-option-d
        question-2-img-option-a
        .
        .
        .
        question-10-img-option-d
        
    -->

    <div class="navbar sticky-top" id="navbar">

        <!--logo-->
        <div class="logo">
            <img src="../favicon.png"> TENTO

        </div>

        <span id="timer">
            <span id="time"></span>
        </span>

    </div>

    <?php

            $questionNumber = 1;
            $sql = "SELECT * FROM questions natural join choices WHERE TopicID=402401";
            $sqlForTopicName = "SELECT TopicName FROM topics WHERE TopicID=402401";
            $result = $conn->query($sql);
            $resultForTopicName = $conn->query($sqlForTopicName);
            $topicName = $resultForTopicName->fetch_assoc();
    ?>

    <div class="container mb-5">

        <!--insert topic name here-->
        <h1 id="topic-name"><?php echo $topicName['TopicName'] ?></h1>
        <h6 id="total-score">Total score: 10</h6>
        <hr>

        <form method="post" action="">
            
        <?php
            if ($result->num_rows > 0) {
                while ($questionNumber<6) {
                    
                    $row = $result->fetch_assoc();
        ?>

                    <div class="row">
                        <!--question1-->
                        <form class="question1">
                            <div class="col-12">
                                <p class="fw-bold" id="question-1-text">
                                    <?php echo "{$questionNumber}. {$row['QuestionText']}"; ?>
                                <p>
                                    <img id="question-1-img" class="question-image" id="question-1-image" src="" alt="">
                                </p>
                                </p>
                                <div>
                                    <input type="radio" name="box" id="one-one">
                                    <input type="radio" name="box" id="one-two">
                                    <input type="radio" name="box" id="one-three">
                                    <input type="radio" name="box" id="one-four">

                                    <label for="one-one" class="box one-one">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceAText']; ?>
                                                <img id="question-1-img-option-a" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="one-two" class="box one-two">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceBText']; ?>
                                                <img id="question-1-img-option-b" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="one-three" class="box one-three">
                                        <div class="course">
                                            <span class="circle"></span>
                                            <span class="subject">
                                                <?php echo $row['ChoiceCText']; ?>
                                                <img id="question-1-img-option-c" alt="">
                                            </span>
                                        </div>
                                    </label>

                                    <label for="one-four" class="box one-four">
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
                        </form>
                    </div>
                <?php 
                    $questionNumber+=1;   
                }
            } ?>

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="submit-button" onclick="redirectToScorePage()">SUBMIT</button>
                </div>
            </div>
    </div>
    </div>

    </form>

    <script src="mcq-form-2.js"></script>
</body>

</html>