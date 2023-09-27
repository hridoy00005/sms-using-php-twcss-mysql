<?php

session_start();
error_reporting(0);

include './db_connection.php'; //Database Connection

if (!$data) {
    die("Connection error");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // $sql = "select * from `user` where username='".$username."' and password='".$password."'";
        $sql =  "SELECT * FROM user WHERE username = '" . $username . "' and password='" . $password . "'";

        $result = mysqli_query($data, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);

            if ($row['usertype'] == 'admin') {
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = 'admin';
                header("location:../pages/adminhome.php");

            } elseif ($row['usertype'] == 'student') {
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = 'student';
                header("location:../pages/studenthome.php");

            } else {
                $message = "username or password does not match";
                $_SESSION['loginMessage'] = $message;
                header("location:../pages/login.php");
            }
        } else {
            echo "Fetch error";
        }
    }
}
