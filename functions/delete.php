<?php
session_start();

include './db_connection.php';

if ($_GET['student_id']) {
    $user_id = $_GET['student_id'];
    $sql = "DELETE FROM user WHERE id='$user_id'";

    $result = mysqli_query($data, $sql);

    if ($result) {

        $_SESSION['messagedel'] = 'The Student Deleted Successfully';
        header("location:../pages/view_student.php");
    }
}
