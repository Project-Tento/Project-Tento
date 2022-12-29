<?php

include "edit-profile.php";

//Change this to set status to logged in users only

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../reg-form/login-form.php");
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
    <title>Tento | Profile</title>
    <link rel="stylesheet" href="../user-dashboard.scss">
    <link rel="stylesheet" href="../mds.css">
    <link rel="stylesheet" href="../user-dashboard.css">
    <link rel="stylesheet" href="profile.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <h1>
                    <img class="logoImg " src="../favicon.png"><a href="../user-dashboard.php" class="logo logoProfile"> TENTO</a>
                </h1>
                <hr>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="../user-dashboard.php"><span class="fa fa-desktop mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="../user-history/user-history.php"><span class="fa fa-history mr-3"></span> User
                            History</a>
                    </li>
                    <li>
                        <a href="../ranking/ranking.php"><span class=" mr-3"><i class="fa-solid fa-chart-simple"></i></span> Ranking</a>
                    </li>
                    <li>
                        <a href="../topic-list/topic-list.php"><span class="mr-3"><i
                                    class="fa-solid fa-lines-leaning"></i></span> Exam Topics</a>
                    </li>
                    <p class="account-setting-header">Account setting</p>
                    <li class="active">
                        <a href="profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
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

                    <div class="container-fluid">


                        <div class="page-header">
                            <!-----------------the image is in css------------------>
                        </div>
                        <div class="profile-pic-div">
                            <img src="<?php echo $row['ProfilePicture'] ?>" alt="profile photo" id="photo">
                        </div>
                        <div class="card card-body user-profile-card blur shadow-blur mx-4 mt-n6 overflow-hidden">
                            <div class="row gx-4">
                                <!--<div class="col-auto">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="../course.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>-->
                                <div class="col-auto my-auto user-name">
                                    <div class="h-100 ">
                                        <h5 class="mb-1">
                                            <?php echo $row['Name'] ?>
                                        </h5>
                                    </div>
                                </div>
                                <!-- settings erased from here -->
                            </div>
                        </div>

                        <div class="profile-details">
                            <div class="col-12 col-xl-12">
                                <div class="card h-100 ml-4 mt-4 mr-4">
                                    <div class="card-header pb-0 h-100">
                                        <div class="row profile-details-header">
                                            <div class="col-md-8 d-flex align-items-center">
                                                <h3 class="mb-0">Profile Information</h3>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <a href="javascript:;">
                                                    <!-----------WRITE JS OF THIS TO EDIT PROFILE------------->
                                                    <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit Profile" id="edit-pfp"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="form" method="POST" action="edit-profile.php"
                                        enctype="multipart/form-data">
                                        <div class="col-md-12 ">

                                            <div class="p-2 py-3 profile-info">

                                                <div class="row mb-3 ml-2 mr-3">
                                                    <div class="col-md-12 mb-3">
                                                        <!--remove d-none at the edit profile function!!!-->
                                                        <div class="change-photo d-none">
                                                            <label class="labels" id="get-profile-photo"
                                                                name="get-profile-photo">Change Profile Photo</label>
                                                            <img src="<?php echo $row['ProfilePicture'] ?>" alt=""
                                                                class="photo-view" id="photo-view" alt="profile photo">
                                                            <input type="file" id="file1" name="file1"
                                                                class="choose-photo-button" accept="image/*">
                                                            <label for="file1" id="uploadBtn"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label class="labels">Full Name</label>
                                                        <input type="text" class="form-control" id="get-name"
                                                            name="get-name" value="<?php echo $row['Name'] ?>" disabled>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="labels">Bio<span class="bio-word-limit"> (Max 200
                                                                characters)</span></label>

                                                        <textarea type="text" class="form-control" id="get-bio"
                                                            name="get-bio" disabled><?php echo $row['Bio'] ?></textarea>
                                                    </div>

                                                    <div class="col-md-8 mb-3">
                                                        <label class="labels">Institution</label>
                                                        <input type="text" class="form-control" id="get-ins"
                                                            name="get-ins" value="<?php echo $row['Institution'] ?>"
                                                            disabled>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="labels">Level</label>

                                                            <!-------HIDE WHEN PROFILE EDIT MODE IT ON
                                                                TOGGLE D-NONE CLASS OF LEVEL VALUE CLASS (AND NOT FORM-CONTROL!!!!)
                                                                                    THIS
                                                                                    .
                                                                                    .
                                                                                    .
                                                                                    V ----->
                                                            <input type="text" class="form-control level-value"
                                                                value="<?php echo $row['Level'] ?>" id="get-level"
                                                                name="get-level" disabled>

                                                            <!-------------------- SHOW THIS WHEN PROFILE EDIT MODE IS ON
                                                                    AND HIDE WHEN IN NORMAL MODE  
                                                                    TO HIDE, TOGGLE THE D-NONE CLASS OF DROPDOWN
                                                                            
                                                                                        ----------------------->
                                                            <div class="dropdown d-none">
                                                                <select name="get-level" id="get-level">
                                                                    <option value="O Level">O Level</option>
                                                                    <option value="A Level">A Level</option>
                                                                </select>

                                                                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                O Level
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item">O Level</a></li>
                                                                <li><a class="dropdown-item">A Level</a></li>
                                                            </ul> -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <!-----------------------TOGGLE D-NONE CLASS TO SHOW WHEN EDIT MODE IS ON-->
                                        <button type="submit" class="d-none save-profile-button"
                                            name="save-pfp-btn">Save
                                            profile</button>
                                    </form>


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
    <script src="../user-dashboard.js"></script>
    <!-- <script src="profile.js"></script> -->
    <script src="edit-profile.js"></script>
</body>

</html>