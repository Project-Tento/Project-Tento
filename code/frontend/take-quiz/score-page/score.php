<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="score.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../../dashboard/mds.css">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>And the score is...</title>
</head>

<body>


    <div class="card" >
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
                <h1><span class="score"><strong>5</strong></span> out of <span class="total-score">10</span></h1>
                <h4 class="italic">
            <?php
                $score = 7;
                $numberOfQuestions = 10; // we need to find ways to pass these two variables into this page
                $searchID = floor((7 * 5) / 10);
                $servername = "localhost";
                $username = "root";
                $password = "Kji1357924680";
                $dbname = "tentodatabase";
                $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM motivationalquotes WHERE QuoteID='$searchID'";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["Quote"];
           }
           $conn->close();
            ?></h4>



                <div class="d-flex justify-content-center">
                    <button type="submit" class="submit-button">View Solution</button>
                </div>
            </div>

        </div>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="score.js"></script>
</body>

</html>