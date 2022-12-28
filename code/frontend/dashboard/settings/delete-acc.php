<?php

if(isset($_POST['delete']))
{
    $userID = $_SESSION['user_id'];
    $sqlStudents = "DELETE FROM students WHERE UserID = $userID";
    $sqlSessions = "DELETE FROM testsessions WHERE UserID = $userID";

    $result1 = $conn->query($sqlStudents);
    $result2 = $conn->query($sqlSessions);

    if($result1 && $result2)
    {
        header('Location: ../../reg-form/register-form.php');
        session_destroy();
    }
    else
    {
        header('Location: settings.php');
    }
}

?>