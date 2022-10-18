/*
    //Title: Validation and Checking Functions for Login Form Data
    //Author: Shanta Maria
    //Date: 12/10/2022
*/


//Email Validation
//Checks email in the format example@mail.com
<?php

function isEmailValid($email) {
        return (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) ? FALSE : TRUE;
}

?>

//Full Name Validation
//Checks if name consists of only upper and lower case alphabets and white spaces
<?php

function isNameValid($name) {
        return (!preg_match("/^[a-zA-Z-' ]*$/",$name)) ? FALSE : TRUE;
}

?>

//Password Validation
//Checks if password is between 8 to 20 characters long,
//checks if at least one uppercase alphabet present,
//checks if at least one number present,
//checks if at least one special character present
<?php

function isPasswordValid($password) {
        return (!preg_match("/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/",$password)) ? FALSE : TRUE;
}

?>
