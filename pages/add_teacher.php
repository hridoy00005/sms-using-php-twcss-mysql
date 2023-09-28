<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}


if ($_SESSION['uploaded']) {
    $message2 = $_SESSION['uploaded'];
    echo "<script type='text/javascript'>
    alert('$message2');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    include '../components/admin_layer.php';
    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">Add Teacher</h2>

            <span class="text-green-600">
                <?php
                if ($_SESSION['message']) {
                    echo $_SESSION['message'];
                }

                unset($_SESSION['message']); //Unset empty a variable in php
                ?>
            </span>

            <br>

            <div class="w-[400px] bg-sky-300 rounded">
                <form action="../functions/addteacher_check.php" method="post" enctype="multipart/form-data" class="pt-8 pb-3 px-2">

                    <div class="flex mb-3">
                        <label class="w-[30%] text-right font-semibold py-2">Teacher Name</label>
                        <input type="text" name="name" class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Description</label>
                        <textarea name="description" class="mx-2 w-[60%] rounded"></textarea>
                        <!-- <input type="text" name="description" class="border px-1 mx-2 w-[60%] rounded"> -->
                    </div>
                    
                    <br>
                    
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold">Image</label>
                        <input type="file" name="file" class="px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div>
                        <input type="submit" name="add_teacher" value="Add" class=" text-white text-sm font-bold bg-green-600 rounded-xl py-2 px-5 mt-5 hover:bg-green-700">
                    </div>
                </form>
            </div>

        </div>
    </center>


</body>

</html>