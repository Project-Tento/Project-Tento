/*
    //Title: Database Connection
    //Author: Shanta Maria
    //Date: 18/10/2022
*/

<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "tentodatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  

    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
