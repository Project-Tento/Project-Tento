<!--
    Title: Register and login page
    Author: Nafisa Maliyat
-->

<?php

include "../backend/forgot-pass.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
    <link rel="stylesheet" href="../reg-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
</head>


<body style="min-height: 100vh; max-height:100vh;">

    <div class="fix-background ">
        <nav class="nav-bar sticky-top fixed-top">

            <!--logo-->
            <div class="logo" onclick="window.location.href='../../landingPage/landingPage.html';">
                <img src="favicon.png"> TENTO
            </div>

        </nav>

        <!--the whole box-->
        <div class="forgot-pass-box">

            <div id="forgot-pass-container">
                <!--for outline-->

                <div class="comm">
                    <!--for controlling visibility of the forms-->
                    <!--login form starts-->
                    <div id="login">
                        <form method="post" action="" autocomplete="off">


                            <div class="forgot-pass-header">
                                <!--header-->
                                <h3>Enter Email Address</h3>
                                <h6>A reset password link will be sent to your mail shortly that will let you choose a new password</h6>
                            </div>


                            <!--the fields-->
                            <div class="form-group forgot-pass-email-validate">
                                <input class="formField" type="email" name="login-email" id="login-email"
                                    placeholder="Email *" required>
                            </div>

                            <div class="form-group">
                                <button class="submitButton forgot-pass-mail-btn" type="submit" name="reset" id="reset">Get Reset Link</button>
                            </div>

                        </form>
                        <!--login form ends-->
                    </div>

                </div>

            </div>


        </div>
    </div>

    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>