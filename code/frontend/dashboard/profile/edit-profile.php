
<?php

/*
    //Title: Updating Database with Edits
    //Author: Shanta Maria
    //Date: 15/11/2022
*/

session_start();

include "connection.php";

if (isset($_POST['save-pfp-btn'])) {

    $id = $_SESSION['user_id'];
    $name = $_POST['get-name'];
    $bio = $_POST['get-bio'] ? $_POST['get-bio'] : 0;
    $ins = $_POST['get-ins'] ? $_POST['get-ins'] : 0;
    $level = $_POST['get-level'] ? $_POST['get-level'] : 0;

    echo "<script>console.log('M'+ '$id' );</script>";

    $sql = "SELECT * FROM students WHERE UserID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $checkID = $row['UserID'];

    echo "<script>console.log('$checkID' );</script>";

    if ($checkID === $id) {

        $update = "UPDATE students SET Name='$name', Bio='$bio', Institution='$ins', Level='$level' where UserID='$id'";
        $result2 = $conn->query($update);

        if ($result2) {
            /*Successful*/
            echo "<script>alert('User account updated!')</script>";
            header('Location: ../user-dashboard.php');
            
        } else {
            /*sorry your profile is not update*/
            echo "<script>alert('User not account updated!')</script>";
            header('Location: profile.php');
        }

    } else {
        /*sorry your id is not match*/
        echo "<script>alert('ID does not match!')</script>";
        header('Location: profile.php');
    }
}

?>