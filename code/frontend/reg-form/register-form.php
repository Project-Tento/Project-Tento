
<?php

include "backend/reg-ver.php";

?>


<!--
    Title: Register and login page
    Author: Nafisa Maliyat
-->

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Tento | Register</title>
    <link rel="stylesheet" href="reg-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">

</head>


<body style="min-height:100vh; max-height:100vh;">
    <div class="fix-background ">
        <nav class="nav-bar sticky-top fixed-top">

            <!--logo-->
            <div class="logo" onclick="window.location.href='../landingPage/landingPage.html';">
                <img src="favicon.png"> TENTO
            </div>

        </nav>

        <!--the whole box-->
        <div class="register-box">

            <div id="register-container">
                <!--for outline-->

                <div class="comm">
                    <!--for controlling visibility of the forms-->
                    <!--register form begins, same format -->
                    <div id="register">

                        <!--<button aria-label='delete item' onClick="window.location.href='../landingPage/landingPage.html'" class='close-button'>X</button>-->

                        <h3>REGISTRATION

                        </h3>



                        <form id="register-form" method="post" action="" autocomplete="off">
                            <div class="icons">
                                <iconify-icon icon="ion:person-circle-sharp" width="120" height="120"></iconify-icon>
                            </div>

                            <div class="form-group">
                                <input class="formField" type="text" name="fullName" id="fullName" placeholder="Full Name *" required>
                            </div>

                            <div class="form-group">
                                <input class="formField" type="email" name="email" id="register-email" onkeydown="validation()" placeholder="Email Address *" required>
                                <span id="emailWarning"></span>
                            </div>

                            <div class="form-group">
                                <input class="formField" type="password" name="rPassword" id="rPassword" placeholder="Password *" required>
                                <i class="bi bi-eye-slash" id="togglePassword" onclick="toggleRegisterPasswordVisibility(this)"></i>

                                <div id="popover-password">
                                    <p><span id="result"></span></p>
                                    <div class="progress">
                                        <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <span class="low-upper-case">
                                                <i class="fas fa-circle" aria-hidden="true"></i>
                                                &nbsp;Lowercase &amp; Uppercase
                                            </span>
                                        </li>
                                        <li class="">
                                            <span class="one-number">
                                                <i class="fas fa-circle" aria-hidden="true"></i>
                                                &nbsp;Number (0-9)
                                            </span>
                                        </li>
                                        <li class="">
                                            <span class="one-special-char">
                                                <i class="fas fa-circle" aria-hidden="true"></i>
                                                &nbsp;Special Character (!@#$%^&*)
                                            </span>
                                        </li>
                                        <li class="">
                                            <span class="eight-character">
                                                <i class="fas fa-circle" aria-hidden="true"></i>
                                                &nbsp;Atleast 8 Character
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="form-group">
                                <input class="formField" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password *" aria-describedby="password-info" required>
                                <i class="bi bi-eye-slash" id="togglePassword" onclick="toggleConfirmPasswordVisibility(this)"></i>
                                <label id="password-info"></label>
                            </div>

                            <div class="form-group">

                            </div>

                            <button class="submitButton" type="submit" name="signup">Sign Up</button>

                            <div class="toggle-register-login">
                                Already have an account? &nbsp;<a href="login-form.php" class="forgot" id="forgot">Sign in
                                    here!</a>
                            </div>
                        </form>
                        <!--register form ends-->

                    </div>
                </div>




            </div>


        </div>
    </div>





    <script src="reg-form.js"></script>
    <script src="email-validation.js"></script>
    <script src="password-validation.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

</body>

</html>