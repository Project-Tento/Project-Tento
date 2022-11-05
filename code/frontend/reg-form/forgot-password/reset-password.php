<!--
    Title: Register and login page
    Author: Nafisa Maliyat
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset password</title>
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
        <div class="reset-pass-box">

            <div id="reset-pass-container">
                <!--for outline-->

                <div class="comm">
                    <!--for controlling visibility of the forms-->
                    <!--login form starts-->
                    <div id="login">
                        <form method="post" action="" autocomplete="off">


                            <div class="reset-pass-header">
                                <!--header-->
                                <h3>Reset password</h3>
                            </div>

                            <!--icon-->
                            <div class="icons">
                                <iconify-icon icon="fluent:key-reset-20-filled"></iconify-icon>
                            </div>

                            <div class="form-group">
                                <input class="formField" type="password" name="resetPass" id="resetPass"
                                    placeholder="Password *" required>
                                <!--toggle password option-->
                                <i class="bi bi-eye-slash" id="togglePassword"
                                    onclick="toggleResetPasswordVisibility(this)"></i>
                            </div>


                            <div class="form-group pb-3">
                                <input class="formField" type="password" name="resetConfirmPass" id="resetConfirmPass"
                                    placeholder="Confirm Password *" required>
                                <!--toggle password option-->
                                <i class="bi bi-eye-slash" id="togglePassword"
                                    onclick="toggleResetConfirmPasswordVisibility(this)"></i>
                            </div>


                            <div class="form-group">
                                <button class="submitButton reset-pass-btn" type="submit">Reset Password</button>
                            </div>

                        </form>
                        <!--login form ends-->
                    </div>

                </div>

            </div>


        </div>
    </div>
    <script src="../reg-form.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>