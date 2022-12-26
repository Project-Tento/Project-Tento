<?php

session_start();

include "../connection.php";
//include "../../dashboard/topic-list/topic-list.php";
//include "../../dashboard/topic-list/topic-session.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
} else {

    // $_SESSION['userSetQuestionNo'];
    //$topicName = $_SESSION['userTopicChoice'];
    
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="take-quiz.css">
    <link rel="stylesheet" href="../dashboard/mds.css">


    <title>Customize Quiz</title>
</head>

<body>
    <div class="navbar sticky-top" id="navbar">

        <!--logo-->
        <div class="logo" onclick="window.location.href='../dashboard/user-dashboard.php';">
            <img src="favicon.png"> TENTO

        </div>

        <span id="timer">
            <span id="time"></span>
        </span>

    </div>


    <div class="container mb-5">
        <span id="header">
            <h1 class="dark-blue"><strong><?php echo $_SESSION['userTopicChoice'] ?></strong></h1>
            <h4>Choose <strong class="dark-blue">Default</strong> settings or <strong
                    class="underline">Customize</strong> your Quiz</h4>
        </span>
        <hr>

        <!--the form begins----------------------->
        <form method="post">
            <div class="set-font-size">

                <!--selecting the setting: custom or default-------
                    default selected (by default)----------------------------->
                <div class="row">
                    <div class="col-4 text-center">
                        <label class="labels ml-3">Choose your settings: </label>
                    </div>

                    <div class="col-md-8 fix-radio-button-position">
                        <label>
                            <input type="radio" name="setting" value="default" checked="checked"
                                onclick="showDefaultSettingDetails()">Default Settings
                        </label>
                        <label>
                            <input type="radio" name="setting" value="customized"
                                onclick="showCustomSettingDetails()">Customize Settings
                        </label>


                        <!--the label shows description about the selected settings-->
                        <label id="default-setting-label" class="dark-blue text-justify">Default setting includes <strong>10
                            questions</strong> in timed mode with a duration of <strong>20 minutes</strong>. </label>
                        <label id="customized-setting-label" class="dark-blue text-justify d-none">Customized setting
                            allows choosing number of questions and the time duration. </label>
                    </div>

                </div>



                
                <div class="change-at-default-mode">

                    <!--NUMBER OF QUESTION---------------------->
                    <div class="row mt-1">

                        <div class="col-4 text-center">
                            <label class="labels question-count-label ml-3 grey">Number of questions: </label>
                        </div>

                        <div class="col-md-8">

                            <div class="dropdown question-count-dropdown">
                                <select name="get-question-count" id="get-question-count" disabled onchange="javascript:dynamicdropdown(this.options[this.selectedIndex].value);">
                                    <option value="5">5</option>
                                    <option value="10" selected="selected">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!--QUIZ MODE: timed or untimed-------------------------------->
                    <div class="row mt-1">
                        <div class="col-4 text-center">
                            <label class="labels ml-3 quiz-mode-label grey">Quiz Mode: </label>
                        </div>

                        <div class="col-md-8 time-mode-selection-radio grey">
                            <label>
                                <input type="radio" name="quiz-mode" id="untimed" value="Untimed" disabled onclick="disableTimeSelection()">Untimed
                            </label>
                            <label>
                                <input type="radio" name="quiz-mode" id="timed" value="Timed" checked="checked" disabled onclick="enableTimeSelection()">Timed

                            </label>
                        </div>
                    </div>

                    <!--TOTAL TIME of the quiz----------------------->
                    <div class="row mt-1">
                        <div class="col-4 text-center">
                            <label class="labels ml-3 total-time-label grey">Total time (in minutes): </label> &nbsp; &nbsp;
                        </div>

                        <div class="col-md-8">

                            <div class="dropdown time-dropdown">
                                <select name="get-time" id="get-time" disabled onchange="javascript:changeRecommndedLabel(this.options[this.selectedIndex].value);">
                                    <option value="10">10</option>
                                    <option value="20" selected="selected">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                            </div>

                            <!--WILL SHOW IF THE SELECTED TIME IS THE RECOMMENDED (JUST A LABEL)-->
                            <label id="recommended-time" class="red mt-1 d-none">(Recommended)</label> &nbsp; &nbsp;
                        </div>
                    </div>
                </div>

            </div>



            <!--SUBMIT BUTTON----------------------->
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <!--Cannot add window.location.href because of type=submit, maybe redirect in php-->
                    <button type="submit" class="submit-button">Continue</button>
                </div>
            </div>

        </form>
    </div>





    <script src="take-quiz.js"></script>
</body>

</html>