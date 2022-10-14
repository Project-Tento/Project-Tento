/*
    //Title: Validation and Checking Functions for Login Form Data
    //Author: Shanta Maria
    //Date: 12/10/2022
*/


//Email Validation
//Checks email in the format example@mail.com
<?php

function isEmailValid($email) {
        return (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? FALSE : TRUE;
}

?>

//Full Name Validation
//Checks if name consists of only upper and lower case alphabets and white spaces
<?php

function isNameValid($name) {
        return (!preg_match("/^[a-zA-Z-' ]*$/",$name)) ? FALSE : TRUE;
}

?>

//Username Validation
//Checks if username is between 7 to 20 characters long,
//starts with lowercase/uppercase alphabet,
//does not end with '_',
//contains alphabets or numbers or '_',
//case sensitive
<?php

function isUsernameValid($userName) {
        return (!preg_match('/^[a-z]\w{7,20}[^_]$/i', $userName)) ? FALSE : TRUE;
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
