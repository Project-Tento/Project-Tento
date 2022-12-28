<?php

include "../connection.php";
include "../get-answer.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
} else {

    $setTopicID = $_SESSION['setTopicID'];
    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM students WHERE UserID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    //Motivation Quote ID Calculation and Fetching

    $score = $_SESSION['userScore']?$_SESSION['userScore']:0;
    $numberOfQuestions = $_SESSION['setQuestions']; 
    $searchID = floor(($score * 5) / $numberOfQuestions);

    $sql = "SELECT * FROM motivationalquotes WHERE QuoteID='$searchID'";
    $result = $conn->query($sql);

    $storeScore = $score . '/' . $numberOfQuestions;

    $sqlTestSession = "INSERT INTO testsessions (SessionID, Score, DateTime, UserID, TopicID) values (default, '$storeScore', now(), '$id', '$setTopicID')";
    $insert = $conn->query($sqlTestSession);

    // for($i=0; $i<count($_SESSION['userAnswers']); $i++)
    // {
    //     echo '<td>' . $_SESSION['userAnswers'][$i] . 'break' . '</td>';
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="score.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../../dashboard/mds.css">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>And the score is...</title>
</head>

<body>

    <div class="card">
        <header>
            <div class="logo">
                <span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 235 60">
                        <style>
                            .st0 {
                                fill: none;
                                stroke: #181887;
                                stroke-width: 5;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <path d="M.6 1.4L116.9 52l117-50.6" class="st0" />
                    </svg> -->

                </span>
                <i class="fas fa-award achievement-icon"></i>
            </div>
        </header>
        <div class="announcement">
            <div class="writing">
                <h3>You scored...</h3>
                <h1><span class="score"><strong><?php echo $score ?></strong></span> out of <span class="total-score"><?php echo $numberOfQuestions ?></span></h1>
                <h4 class="italic">
                    <?php

                    while ($row = $result->fetch_assoc()) {
                        echo $row["Quote"];
                    }

                    ?>
                </h4>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="submit-button" onclick="window.location.href='../solution/solution.php' ;">View Solution</button>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="score.js"></script>
</body>

</html>