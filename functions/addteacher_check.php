<?php
session_start();

include './db_connection.php';

if (isset($_POST['add_teacher'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $pname = $_FILES['file']['name'];

    $tname = $_FILES['file']['tmp_name'];

    $dir = "./images/";

    define('SITE_ROOT', realpath(dirname(__FILE__))); //need define for pc restriction
    move_uploaded_file($tname, SITE_ROOT.$dir.$pname);



    $sql = "INSERT INTO teacher(name,description,image) VALUES('$name','$description','$pname')";

    $result = mysqli_query($data, $sql);

    if($result){
        $_SESSION['message']='Teacher added successful';
        header('location:../pages/add_teacher.php');
    }else{
        die("Teacher add error");
    }
}
