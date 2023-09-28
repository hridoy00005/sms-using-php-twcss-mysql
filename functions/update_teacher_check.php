<?php

session_start();

include './db_connection.php';


if (isset($_POST['update_teacher'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    echo "Post complete";
    $id = $_GET['teacher_id'];


    $sql = "UPDATE teacher SET name='$name', description='$description' WHERE id='$id'";
    echo $id;
    $result = mysqli_query($data, $sql);
    if ($result) {
        $_SESSION['messageupdate'] = 'Student Data Updated.';
        echo "Updated";
        header('location:../pages/update_student.php?student_id="'.$id.'"');
        header('location:../pages/view_teacher.php');
    } else {
        die('Data update error');
    }
 }else{
    die("post error");
 }
 // elseif (isset($_POST['update_profile'])) {
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $password = $_POST['password'];

//     $name = $_SESSION['username'];

//     $sql = "UPDATE user SET email='$email', phone='$phone', password='$password' WHERE username='$name'";

//     $result = mysqli_query($data, $sql);
//     if ($result) {

//         $_SESSION['messageupdate'] = 'Student Profile Updated.';
//         header('location:../pages/student_profile.php');
//     } else {
//         die('Data update error');
//     }
// }
