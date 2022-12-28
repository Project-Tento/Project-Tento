<?php
session_start();

include "../profile/connection.php";

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
    <link rel="stylesheet" href="setting.css">
    <link rel="stylesheet" href="../../reg-form/reg-form.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
                <h1><img class="logoImg logoImgSetting" src="../favicon.png"><a href="../user-dashboard.php" class="logo logoSetting"> TENTO</a>
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
                    <!-- <li>
                        <a href="#"><span class=" mr-3"><i class="fa-solid fa-chart-simple"></i></span> Ranking</a>
                    </li> -->
                    <li>
                        <a href="../topic-list/topic-list.php"><span class="mr-3"><i
                                    class="fa-solid fa-lines-leaning"></i></span> Exam Topics</a>
                    </li>
                    <p class="account-setting-header">Account setting</p>
                    <li>
                        <a href="../profile/profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
                    </li>
                    <li class="active">
                        <a href="settings.php"><span class="fa fa-cog mr-3"></span> Settings</a>
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



                    <div class="row  mt-3 ml-3">
                        <div class="settings-page-header">
                            <span class="page-heading">
                                <h2>Settings</h2>
                            </span>
                        </div>
                    </div>


                    <div class="update-pass-section">

                        <div class="card mt-4 ml-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="post" action="" autocomplete="off">
                                        <div class="row mt-3 ml-1">


                                            <!--header-->
                                            <div class="col-5 mt-3">
                                                <div class="update-pass-header">

                                                    <h4 class="text-left">Update password</h4>
                                                    <h6>Ensure your account has a long, random password to stay safe
                                                    </h6>
                                                </div>
                                                <!--icon-->
                                                <!-- <div class="icons">
                                                <iconify-icon icon="fluent:key-reset-20-filled"></iconify-icon>
                                            </div> -->
                                            </div>


                                            <!-- the fields of update password-->
                                            <div class="col-7 ">
                                                <div class="form-group w-100">
                                                    <input class="formField" type="password" name="resetCurrentPass"
                                                        id="updateCurrentPass" placeholder="Current Password *"
                                                        required>
                                                    <!--toggle password option-->
                                                    <i class="bi bi-eye-slash" id="togglePassword"
                                                        onclick="toggleUpdateCurrentPasswordVisibility(this)"></i>
                                                </div>

                                                <div class="form-group w-100">
                                                    <input class="formField" type="password" name="resetPass"
                                                        id="updateNewPass" placeholder=" New Password " required>
                                                    <!--toggle password option-->
                                                    <i class="bi bi-eye-slash" id="togglePassword"
                                                        onclick="toggleUpdateNewPasswordVisibility(this)"></i>
                                                </div>
                                                <div class="form-group pb-3 w-100">
                                                    <input class="formField" type="password" name="resetConfirmPass"
                                                        id="updateConfirmPass" placeholder="Confirm Password " required>
                                                    <!--toggle password option-->
                                                    <i class="bi bi-eye-slash" id="togglePassword"
                                                        onclick="toggleUpdateConfirmPasswordVisibility(this)"></i>
                                                </div>
                                                <div class="form-group">
                                                    <button class="update-pass-btn align-self-end mr-4"
                                                        type="submit">Update Password</button>
                                                </div>
                                            </div>

                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <hr class="section-divider"> -->


                    <div class="update-pass-section">

                        <div class="card mt-4 ml-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="post" action="" autocomplete="off">
                                        <div class="row mt-3 ml-1">


                                            <!--header-->
                                            <div class="col-5 mt-3">
                                                <div class="reset-pass-header">

                                                    <h4 class="text-left">Delete Account</h4>
                                                    <h6 class="">Permanently delete your account
                                                    </h6>
                                                </div>
                                                <!--icon-->
                                                <!-- <div class="icons">
                                                <iconify-icon icon="fluent:key-reset-20-filled"></iconify-icon>
                                            </div> -->
                                            </div>


                                            <!-- the fields of update password-->
                                            <div class="col-7 ">

                                                <h6 class="text-justify delete-account-msg mb-3 mt-3 mr-3 mb-5">
                                                    Once your account is deleted, all of its resources and data will be
                                                    permanently deleted.
                                                    Before deleting your account, please download any data or
                                                    information
                                                    that you wish to retain.
                                                </h6>

                                                <div class="form-group">
                                                    <button class="update-btn align-self-end mr-4" type="submit">Delete
                                                        Account</button>
                                                </div>
                                            </div>

                                        </div>



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
    <script src="password-visibility.js"></script>
    <!-- <script src="profile.js"></script> -->
    <!-- <script src="edit-profile.js"></script> -->
</body>

</html>