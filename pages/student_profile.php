<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:./login.php");
}

include '../functions/db_connection.php';

$name = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username = '$name'";

$result = mysqli_query($data, $sql);

$info = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/main.css">

</head>

<body>
    <?php
    include '../components/student_layer.php';
    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h1 class="text-4xl mb-2">Student Profile</h1>
            <span class="text-green-600">
                <?php

                if ($_SESSION['messageupdate']) {
                    echo $_SESSION['messageupdate'];

                    unset($_SESSION['messageupdate']); //Unset empty a variable in php
                }
                ?>
            </span>
            <br>

            <div class="w-[400px] bg-sky-300 rounded">
                <form action="../functions/upstudent_check.php" method="POST" class="pt-8 pb-3 px-2">

                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Email</label>
                        <input type="email" name="email" value="<?php echo $info['email'] ?>" class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Phone</label>
                        <input type="number" name="phone" value="<?php echo $info['phone'] ?>" class="border px-1 mx-2 w-[60%] rounded no-sppinner">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Password</label>
                        <input type="text" name="password" value="<?php echo $info['password'] ?>" class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div>
                        <input type="submit" name="update_profile" value="Update profile" class=" text-white text-sm font-semibold bg-green-600 rounded-xl py-2 px-3 mt-5 hover:bg-green-700">
                    </div>
                </form>
            </div>
        </div>
    </center>


</body>

</html>