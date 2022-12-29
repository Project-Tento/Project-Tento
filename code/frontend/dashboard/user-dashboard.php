<?php
session_start();

include "profile/connection.php";

if (!isset($_SESSION["user_id"])) {
	header("Location: ../reg-form/login-form.php");
} else {

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
    <title>Tento | User dashboard</title>
    <link rel="stylesheet" href="user-dashboard.scss">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="mds.css">
    <link rel="stylesheet" href="user-dashboard.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <!--<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>-->

            <div class="p-4">
                <h1><img class="logoImg" src="favicon.png"><a href="user-dashboard.php" class="logo"> TENTO</a></h1>
                <hr>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="user-dashboard.php"><span class="fa fa-desktop mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="user-history/user-history.php"><span class="fa fa-history mr-3"></span> User
                            History</a>
                    </li>
                    <!-- <li>
                        <a href="#"><span class=" mr-3"><i class="fa-solid fa-chart-simple"></i></span> Ranking</a>
                    </li> -->
                    <li>
                        <a href="topic-list/topic-list.php"><span class="mr-3"><i
                                    class="fa-solid fa-lines-leaning"></i></span> Exam topics</a>
                    </li>
                    <p class="account-setting-header">Account setting</p>
                    <li>
                        <a href="profile/profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
                    </li>
                    <li>
                        <a href="settings/settings.php"><span class="fa fa-cog mr-3"></span> Settings</a>
                    </li>
                    <li>
                        <a href="../../reg-form/backend/logout.php"><span class="fa fa-sign-out mr-3"></span> Log out</a>
                    </li>

                </ul>


            </div>
        </nav>


        <div class="move-to-left">


            <div class="content">

                <div class="all-content-without-footer">
                    <div id="cont" class="mt-0 p-md-5">
                        <!-- Header-->
                        <div class="header dashboard-header">

                            <div class="col-12 mb-xl-0 mb-4">

                                <div class="row">
                                    <div class="col-8">
                                        <div class="user-greeting">
                                            <h1>Welcome, <span id="user-name"><?php echo $row['Name'] ?></span>!</h1>
                                        </div>
                                    </div>

                                    <div class="col-4 text-end">

                                        <!--the profile picture-->
                                        <div class="user-area dropdown">
                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">

                                                <!-- Specifying image source as default or user-updated one -->
                                                <?php
										$check = 'uploads';
										$print = strpos($row['ProfilePicture'], $check);
										if (strpos($row['ProfilePicture'], $check)) {
											$src = './profile/';
											$src .= $row['ProfilePicture'];
										} else {
											$src = $row['ProfilePicture'];
										}
										?>

                                                <img class="user-avatar rounded-circle" src="<?php echo $src ?>"
                                                    alt="User Avatar">
                                            </a>

                                            <div class="user-menu dropdown-menu">
                                                <a class="nav-link" href="profile/profile.php"><i
                                                        class="fa fa-user"></i> My Profile</a>

                                                <a class="nav-link" href="settings/settings.php"><i class="fa fa-cog"></i> Settings</a>

                                                <a class="nav-link" href="../reg-form/backend/logout.php"><i
                                                        class="fa fa-power-off"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="dashboard-first-row">
                            <!-----------------THREE CARDS -------------------->
                            <div class="row">
                                <!--changed the xl-->
                                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                    <div class="card">
                                        <!--changed the p6-->
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="numbers">
                                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Summary
                                                        </p>
                                                        <h5 class="font-weight-bolder mb-0">
                                                            Total Quizes Attended
                                                            <!-------=================================================================
								  ============---insert total number of quizzes---==========================
								  ==============================================================----------->
                                                            <?php

                                                            $sqlNoQuiz = "SELECT COUNT(*) AS count FROM testsessions WHERE UserID = '$id'";
                                                            $resultNoQuiz = $conn->query($sqlNoQuiz);
                                                            $rowNoQuiz = $resultNoQuiz->fetch_assoc();
                                                            $totalQuiz = $rowNoQuiz['count'];

                                                            $sqlScore = "SELECT * FROM testsessions WHERE UserID = '$id' ORDER BY SessionID DESC LIMIT 1";
                                                            $resultScore = $conn->query($sqlScore);
                                                            $rowScore = $resultScore->fetch_assoc();
                                                            $recentScore = $rowScore['Score'];

                                                            ?>

                                                            <div class="text-success text-md font-weight-bolder"><?php echo $totalQuiz; ?>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-end float-right">
                                                    <div
                                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                        <i class="fa-solid fa-layer-group"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                                    <div class="card quote-card">
                                        <img src="open-book-2.jpg" class="quote-img">
                                        <div class="card-body p-4">
                                            <div class="row">


                                                <div class="numbers">
                                                    <p
                                                        class="text-md mb-0 text-capitalize text-justify font-weight-bold">
                                                        Education is the most powerful weapon which you can use to
                                                        change the world
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->



                                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                    <div class="card">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="numbers">
                                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Recents
                                                        </p>
                                                        <h5 class="font-weight-bolder mb-0">
                                                            Your Most Recent Score
                                                            <!-------=================================================================
								  ============---insert recent score---==================================
								  ==============================================================----------->
                                                            <div class="text-success text-md font-weight-bolder"
                                                                id="recent-score">
                                                                <?php echo $recentScore; ?>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <div
                                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md ">
                                                        <i class="fa-solid fa-hashtag"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>





                        <div class="dashboard-second-row">


                            <!--------------------------- view topics--------------------------->
                            <div class="row mt-4">
                                <div class="col-lg-7 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="d-flex flex-column h-100">
                                                        <h3 class="font-weight-bolder mb-4 pt-2">Check out our exam
                                                            topics</h3>
                                                        <p class="mb-5 sub-heading">Tento provides you with all
                                                            necessary
                                                            practice
                                                            materials to
                                                            prepare for your
                                                            upcoming
                                                            exams at your home.</p>
                                                        <a class="card-link text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                                            href="topic-list/topic-list.php">
                                                            Explore topics
                                                            <i class="fas fa-arrow-right text-sm ms-1"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                                    <div class="bg-gradient-primary border-radius-lg h-100">
                                                        <div
                                                            class="position-relative d-flex align-items-center justify-content-center h-100">
                                                            <!------------------------------===========================================
													============insert image for courses=======================================
													  ========================================-=-------------------------------->
                                                            <img class="w-100 position-relative z-index-2 pt-4"
                                                                src="course.png" alt="books">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-----------------------------------History---------------------------------------->
                                <div class="col-lg-5">
                                    <div class="card h-100 p-3 history-card">
                                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                                            style="background-image: url('../assets/img/ivancik.jpg');">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div
                                                class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                                <h3 class="text-white font-weight-bolder mb-4 pt-2">View User History
                                                </h3>
                                                <p class="mb-5 text-white sub-heading">See your previous accomplishments
                                                    and
                                                    work
                                                    harder than you can
                                                    did yesterday
                                                    so you can have the best preparation you can.</p>
                                                <a class="card-link text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                                    href="user-history/user-history.php">
                                                    View History
                                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        <!---text was removed here -->
                                    </div>
                                </div>
                                <!-------=====================================================
						===================insert links==============================
						==============================================================-->
                                <div class="col-lg-12 text-end">
                                    Copyright © 2022 Tento
                                </div>
                            </div>
                        </div>
                    </footer>



                </div>
            </div>
        </div>






        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="user-dashboard.js"></script>
    </div>
</body>

</html>