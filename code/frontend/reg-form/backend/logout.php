<?php

/*
    //Title: Logout Session Destroy
    //Author: Shanta Maria
    //Date: 05/11/2022
*/

session_start();
session_unset();
session_destroy();
header("Location: register-form.php");

?>