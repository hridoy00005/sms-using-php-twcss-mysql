<?php

session_start();

include './db_connection.php';


if (isset($_POST['update_student'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $user_id = $_GET['student_id'];


    $sql = "UPDATE user SET username='$username', email='$email', phone='$phone', password='$password' WHERE id='$user_id'";

    $result = mysqli_query($data, $sql);
    if ($result) {
        $_SESSION['messageupdate'] = 'Student Data Updated.';
        // header('location:../pages/update_student.php?student_id="'.$user_id.'"');
        header('location:../pages/view_student.php');
    } else {
        die('Data update error');
    }
} elseif (isset($_POST['update_profile'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $name = $_SESSION['username'];

    $sql = "UPDATE user SET email='$email', phone='$phone', password='$password' WHERE username='$name'";

    $result = mysqli_query($data, $sql);
    if ($result) {

        $_SESSION['messageupdate'] = 'Student Profile Updated.';
        header('location:../pages/student_profile.php');
    } else {
        die('Data update error');
    }
}
