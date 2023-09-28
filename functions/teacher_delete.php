<?php
session_start();

include './db_connection.php';

if ($_GET['teacher_id']) {
    $user_id = $_GET['teacher_id'];
    $sql = "DELETE FROM teacher WHERE id='$user_id'";

    $result = mysqli_query($data, $sql);

    if ($result) {

        $_SESSION['messagedel'] = 'The Student Deleted Successfully';
        header("location:../pages/view_teacher.php");
    }
}
