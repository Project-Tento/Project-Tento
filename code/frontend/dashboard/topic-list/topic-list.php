<?php
session_start();

// $_SESSION['userTopicChoice']

include "../profile/connection.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
} else {

    // $_SESSION['userTopicChoice'] = "Topic Name";

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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


    <script src="topic-list.js"></script>
    <link rel="stylesheet" href="topic-list.css">
    <link rel="stylesheet" href="../mds.css">
    <link rel="stylesheet" href="../user-dashboard.css">

    <link rel="shortcut icon" href="favicon.ico">
    <title>Test Topics</title>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch ">
        <nav id="sidebar">
            <!--<div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
            </div>-->

            <div class="p-4">
                <h1><img class="logoImg" src="favicon.png"><a href="../user-dashboard.php" class="logo"> TENTO</a></h1>
                <hr>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="../user-dashboard.php"><span class="fa fa-desktop mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-history mr-3"></span> User History</a>
                    </li>
                    <li>
                        <a href="#"><span class=" mr-3"><i class="fa-solid fa-chart-simple"></i></span> Ranking</a>
                    </li>
                    <li class="active">
                        <a href="topic-list.php"><span class="mr-3"><i class="fa-solid fa-lines-leaning"></i>
                            </span> Exam Topics</a>
                    </li>
                    <p class="account-setting-header">Account setting</p>
                    <li>
                        <a href="../profile/profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
                    </li>
                    <li>
                        <a href=#><span class="fa fa-cog mr-3"></span> Settings</a>
                    </li>
                    <li>
                        <a href="../reg-form/backend/logout.php"><span class="fa fa-sign-out mr-3"></span> Log out</a>
                    </li>

                </ul>


            </div>
        </nav>


        <div class="move-to-left">


            <div class="content">

                <div class="col-12 mb-xl-0 mb-4">



                    <div class="row mt-4 top-bar">
                        <div class="col-8">
                            <div class="topic-page-header">
                                <span class="m-8">Topics</span>
                            </div>
                        </div>

                        <div class="col-4 text-end">

                            <!--the profile picture-->
                            <div class="user-area dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- Specifying image source as default or user-updated one -->
                                    <?php
                                    $check = 'uploads';
                                    $print = strpos($row['ProfilePicture'], $check);
                                    if (strpos($row['ProfilePicture'], $check)) {
                                        $src = './../profile/';
                                        $src .= $row['ProfilePicture'];
                                    } else {
                                        $src = $row['ProfilePicture'];
                                    }
                                    ?>
                                    <img class="user-avatar rounded-circle" src="<?php echo $src ?>" alt="User Avatar">
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="../profile/profile.php"><i class="fa fa-user"></i> My Profile</a>

                                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                                    <a class="nav-link" href="../reg-form/backend/logout.php"><i class="fa fa-power-off"></i>
                                        Logout</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="topic-list-body">
                            <div class="search-and-filter">

                                <!--o and a level filters-->
                                <div class="level-filter-buttons">
                                    <button tabindex="0" type="button" label="O Level" class="select-level-filter oLevel" onclick="selectLevel(this)">O
                                        Level</button>
                                    <button tabindex="0" type="button" label="A Level" class="select-level-filter aLevel" role="radio" onclick="selectLevel(this)">A
                                        Level</button>
                                </div>


                                <!--searchbox-->
                                <div class="searchBar">
                                    <input class="search" type="text" placeholder="Search topics...">
                                    <button class="search-button" onclick="changeIcon()">
                                        <i class="fa fa-search search-icon p-2"></i>
                                    </button>
                                </div>

                                <?php

                                $subject = "SELECT * FROM subjects ORDER BY SubjectCode";
                                $resultS = $conn->query($subject);

                                ?>

                                <!--topic filter-->
                                <div class="dropdown topic-dropdown">
                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split topic-filter-dropdown-button select-level-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="label-icon">Filter by Subjects</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-left topic-filter-dropdown">

                                        <div class="topic-checkbox-list" onclick="topicDropDownStaysOpen(this)">
                                            <!--loop this-->

                                            <?php

                                            if ($resultS->num_rows > 0) {
                                                while ($rowS = $resultS->fetch_assoc()) {
                                            ?>

                                                    <label class="topic-filter-checkbox-and-label">
                                                        <input type="checkbox" class="checkbox" name="option[]">
                                                        <?php echo $rowS['SubjectCode'], ' ', $rowS['SubjectName'] ?>
                                                    </label>

                                            <?php
                                                }
                                            }
                                            ?>
                                            <!--end loop item-->
                                        </div>


                                        <!--clear filter button-->
                                        <div class="topic-filter-footer">
                                            <button type="button" class="clear-filter-button ml-2" onclick="clearFilter()">Clear filter</button>
                                            <button type="button" class="dropdown-filter-button">Filter</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <section class="topic-display-container l-container ml-3">
                                <div class="topic-display-header">
                                    <div> TITLE </div>
                                </div>
                                <!--loop item begins-->
                                <?php

                                $sql = "SELECT * FROM topics natural join subjects ORDER BY TopicName";
                                $result = $conn->query($sql);
                                $count = 0;

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>

                                        <div class="topic-item-begins c-programs-item">
                                            <button type="button" aria-expanded="false" aria-controls="id-jcnbk8" aria-haspopup="dialog" class="topic-name-class c-programs-item__title-link" onclick="makeExamButtonsVisible(<?php echo $count ?>)">
                                                <!--to make the buttons visible
                                                PASS THE APPROPIRATE INDEX!!!!!!!!!!!!!!! 
                                                INDEXES START FROM 0 TO ONWARDS-->

                                                <span class="a-btn__text">
                                                    <h1 class="c-programs-item__title"><?php echo $row['TopicName'] ?></h1>
                                                </span>
                                            </button>

                                            <div class="hidden-by-default hidden">
                                                <!--to be expanded-->
                                                <div class="topic-level">
                                                    <div class="c-programs-item__initals__comma-separator">
                                                        <div class="topic-level__initial">
                                                            <div tabindex="0" aria-describedby="id-lqerb9">
                                                                <span class="topic-level mt-2"><?php echo $row['SubjectName'], ' ', $row['SubjectCode'] ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="topic-level__initial">
                                                            <div tabindex="0" aria-describedby="id-lqerb9">
                                                                <span class="topic-level mt-2"> <?php echo $row['Level'] ?> Level </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="topic-quiz-button mt-3">



                                                    <button class="take-quiz" name="take-quiz" onclick="takeQuizButtonFunction('<?php echo $row['TopicName'] ?>')">
                                                        Take quiz
                                                    </button>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end of loop item-->


                                <?php
                                        //$_SESSION['userTopicChoice'] = $row['TopicName'];
                                        $count += 1;
                                    }
                                } ?>

                                <form method="post" action="topic-session.php" id="topic-form">
                                    <input name="theTopicName" id="theTopicName" class="d-none" value="">
                                    <button name="submit-topic" id="submit-topic" class="d-none"></button>
                                </form>

                                <!--test looped items-->

                                <!--end of test loop-->
                            </section>
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <script src="quiz-button.js"></script>
</body>

</html>