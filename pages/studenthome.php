<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:./login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <!-- <header class="bg-sky-300 h-[70px] flex justify-between items-center px-7">
        <a class="text-white text-lg font-bold" href="">Student Dashboard</a>
        <a class=" text-white text-sm bg-green-600 rounded-xl py-2 px-3 hover:bg-green-700" href="../functions/logout.php">Logout</a>
    </header>

    <aside class="">
        <ul class="bg-gray-700 w-[17%] h-full fixed text-center pt-[5%]">
            <li class="mb-7 text-base text-white font-bold hover:text-blue-300"><a href="">My Courses</a></li>
            <li class="mb-7 text-base text-white font-bold hover:text-blue-300"><a href="">My Result</a></li>

        </ul>
    </aside> -->

    <?php
    include '../components/student_layer.php';
    ?>


    <div class="ml-[20%] pt-[100px]">
        <h2 class="text-4xl mb-2">Hello Student</h2>
    </div>

</body>

</html>