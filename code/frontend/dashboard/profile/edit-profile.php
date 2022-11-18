
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

    // File upload path
    $filename = $_FILES["file1"]["name"];
    $tempname = $_FILES["file1"]["tmp_name"];
    $folder = "./uploads/" . $filename;

    $sql = "SELECT * FROM students WHERE UserID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $checkID = $row['UserID'];

    if ($checkID === $id) {

        // Allow certain file formats
        // $allowTypes = array('jpg','png','jpeg','gif');

        // if(in_array($fileType, $allowTypes)){
        //     // Upload file to server
        //     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

        //         $update = "UPDATE students SET Name='$name', ProfilePicture='".$targetFilePath."', Bio='$bio', Institution='$ins', Level='$level' where UserID='$id'";
        //     }
        //     else
        //     {
        $update = "UPDATE students SET Name='$name', ProfilePicture='$folder', Bio='$bio', Institution='$ins', Level='$level' where UserID='$id'";
        // $insert = "INSERT INTO students(ProfilePicture) VALUES ('$folder')";
        // }
        // }

        $result2 = $conn->query($update);
        // $conn->query($insert);
        move_uploaded_file($tempname, $folder);

        if ($result2) {
            /*Successful*/
            header('Location: profile.php');
        } else {
            /*sorry your profile is not update*/
            header('Location: profile.php');
        }
    } else {
        /*sorry your id is not match*/
        header('Location: profile.php');
    }
}

?>