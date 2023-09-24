<?php

session_start();
// include '../functions/db_connection.php'; //Database Connection
include './db_connection.php';

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $usertype = 'student';

    $check = "SELECT * FROM user WHERE username = '$username'";
    $check_user = mysqli_query($data, $check);
    $row_counts = mysqli_num_rows($check_user); //similar row checking in a dabase table
    if ($row_counts == 1) {
        $_SESSION['uploaded'] = 'This username is already exist. Try another one.';
        header("location:../pages/add_student.php");
    } else {
        $sql = "INSERT INTO user(username,phone,email,usertype,password) VALUES('$username','$phone ','$email','$usertype','$password')";

        $result = mysqli_query($data, $sql);

        if ($result) {
            $_SESSION['uploaded'] = 'Data Uploaded Successfully';
            header("location:../pages/add_student.php");
        } else {
            echo "Data Upload Failed";
        }
    }
}
