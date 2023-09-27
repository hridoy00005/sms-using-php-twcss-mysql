<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}


include '../functions/db_connection.php';

$user_id = $_GET['student_id'];

$sql = "SELECT * FROM user WHERE id={$user_id}";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Page</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    include '../components/admin_layer.php';
    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">Update Student</h2>
    
            <br>

            <div class="w-[400px] bg-sky-300 rounded">
                <form action="../functions/upstudent_check.php?student_id=<?php echo $user_id; ?>" method="POST" class="pt-8 pb-3 px-2">

                    <div class="flex mb-3">
                        <label class="w-[30%] text-right font-semibold py-2">Username</label>
                        <input type="text" name="username" value=<?php echo $info['username'] ?> class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Email</label>
                        <input type="email" name="email" value=<?php echo $info['email'] ?> class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Phone</label>
                        <input type="number" name="phone" value=<?php echo $info['phone'] ?> class="border px-1 mx-2 w-[60%] rounded no-sppinner">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Password</label>
                        <input type="text" name="password" value=<?php echo $info['password'] ?> class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div>
                        <input type="submit" name="update_student" value="Update" class=" text-white text-sm font-semibold bg-green-600 rounded-xl py-2 px-3 mt-5 hover:bg-green-700">
                    </div>
                </form>
            </div>

        </div>
    </center>


</body>

</html>