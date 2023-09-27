<?php
session_start();
error_reporting(0);

//Login Check
if ($_SESSION['usertype'] == 'student') {
    header("location:./studenthome.php");
    exit();
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:./adminhome.php");
    echo 'admin';
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body background="../images/school2.jpg" class="bg-no-repeat bg-cover">
    <div class="container  flex justify-center items-center h-screen ">
        <div class=" bg-sky-300 rounded-xl w-[400px] p-5">
            <center>
                <h1 class="text-4xl text-white font-bold py-6">Login Form</h1>
                <h2 class="text-lg text-red-700 mb-4">
                    <?php
                    session_start();
                    session_destroy();
                    echo $_SESSION["loginMessage"];
                    ?>
                </h2>
            </center>

            <form action="../functions/login_check.php" method="POST">
                <div class="">
                    <label class="text-xl text-white font-semibold mr-3" for="">Username</label>
                    <input class="border border-blue-900 rounded-xl p-4 w-[70%]" type="text" placeholder="Enter Your Username" name="username">
                </div>
                <div class="py-5">
                    <label class="text-xl text-white font-semibold mr-4" for="">Password</label>
                    <input class="border border-blue-900 rounded-xl p-4 w-[70%]" type="text" placeholder="Enter Your Password" name="password">
                </div>
                <div class="flex justify-center">
                    <input class="w-full text-white text-base font-bold bg-green-600 rounded-xl py-2 px-3 hover:bg-green-700" type="submit" placeholder="Submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>