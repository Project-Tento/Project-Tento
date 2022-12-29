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
    <title>Tento | User History</title>
    <link rel="stylesheet" href="../user-dashboard.scss">
    <link rel="stylesheet" href="../mds.css">
    <link rel="stylesheet" href="../user-dashboard.css">
    <link rel="stylesheet" href="user-history.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="shortcut icon" href="../favicon.ico">
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
                <h1><img class="logoImg" src="../favicon.png"><a href="../user-dashboard.php" class="logo logoHistory"> TENTO</a>
                </h1>
                <hr>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="../user-dashboard.php"><span class="fa fa-desktop mr-3"></span> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="user-history.php"><span class="fa fa-history mr-3"></span> User History</a>
                    </li>
                    <li>
                        <a href="../ranking/ranking.php"><span class=" mr-3"><i class="fa-solid fa-chart-simple"></i></span> Ranking</a>
                    </li>
                    <li>
                        <a href="../topic-list/topic-list.php"><span class="mr-3"><i class="fa-solid fa-lines-leaning"></i></span> Exam Topics</a>
                    </li>
                    <p class="account-setting-header">Account setting</p>
                    <li>
                        <a href="../profile/profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
                    </li>
                    <li>
                        <a href="../settings/settings.php"><span class="fa fa-cog mr-3"></span> Settings</a>
                    </li>
                    <li>
                        <a href="../../reg-form/backend/logout.php"><span class="fa fa-sign-out mr-3"></span> Log
                            out</a>
                    </li>

                </ul>


            </div>
        </nav>


        <div class="move-to-left">

            <div class="content">
                <div class="all-contents-without-footer">



                    <div class="row mt-4 top-bar">
                        <div class="col-8">
                            <div class="page-header">
                                <span class="m-8"> View History</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <!-- <div class="row mb-3">
                                    <div class="col-6">
                                        <div id="bootstrap-data-table_filter" class="dataTables_filter">
                                            <label>
                                                Search by topic:<input type="search" class="inputFields searchField ml-4"
                                                    placeholder="Type topic name..."
                                                    aria-controls="bootstrap-data-table">
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                    <div class="row">
                                        <div class="col-sm-12">


                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12">
                                                    <div class="white-box">
                                                        <div class="table-responsive">
                                                            <table class="table no-wrap">
                                                                <thead>
                                                                    <tr>
                                                                        <!--the table headings-->
                                                                        <th class="border-top-0">#</th>
                                                                        <th class="border-top-0">Topic Name</th>
                                                                        <th class="border-top-0">Date</th>
                                                                        <th class="border-top-0">Score</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php

                                                                    $sqlLoop = "SELECT * FROM testsessions WHERE UserID = '$id'";
                                                                    $resultLoop = $conn->query($sqlLoop);
                                                                    $row_count = $resultLoop->num_rows;
                                                                    $count = 1;

                                                                    //echo $count;

                                                                    if ($row_count > 0) {
                                                                        while ($rowL = $resultLoop->fetch_assoc()) {
                                                                            $topicID = $rowL['TopicID'];
                                                                            $sqlTopicName = "SELECT TopicName from topics WHERE TopicID = '$topicID'";
                                                                            $resultTN = $conn->query($sqlTopicName);
                                                                            $rowTN = $resultTN->fetch_assoc();
                                                                            $topicName = $rowTN['TopicName']; ?>

                                                                            <!--ONE ROW!!!!!-->
                                                                            <tr class="mt-2 mb-2">
                                                                                <td><?php echo $count ?></td>
                                                                                <!--INCREASE THIS BY 1 EACH TIME-->
                                                                                <td class="txt-oflo"><?php echo $topicName ?></td>
                                                                                <td class="txt-oflo"><?php echo $rowL['DateTime']; ?></td>
                                                                                <td><span class="text-success"><?php echo $rowL['Score']; ?></span></td>
                                                                            </tr>
                                                                            <!--end of row-->
                                                                        <?php $count++;
                                                                        }
                                                                    } else { ?>

                                                                        <tr class="mt-2 mb-2">
                                                                            <td> <?php echo "You have not participated in any quiz yet."; ?> </td>
                                                                        </tr>

                                                                    <?php
                                                                    }
                                                                    ?>






                                                                    <!--test loop begins-->

                                                                    <!--end of test loop-->

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <footer class="footer pt-3  ">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="../user-dashboard.js"></script>
    <!-- <script src="profile.js"></script> -->
    <script src="edit-profile.js"></script>
</body>

</html>