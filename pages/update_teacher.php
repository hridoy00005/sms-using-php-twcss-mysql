<?php
session_start();
// error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}


include '../functions/db_connection.php';

$user_id = $_GET['teacher_id'];

$sql = "SELECT * FROM teacher WHERE id={$user_id}";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Page</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    include '../components/admin_layer.php';
    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">Update Teacher</h2>
    
            <br>

            <div class="w-[400px] bg-sky-300 rounded">
                <form action="../functions/update_teacher_check.php?teacher_id=<?php echo $user_id; ?>" method="POST" class="pt-8 pb-3 px-2" enctype="multipart/form-data">

                    <div class="flex mb-3">
                        <label class="w-[30%] text-right font-semibold py-2">Name</label>
                        <input type="text" name="name" value=<?php echo $info['name'] ?> class="border px-1 mx-2 w-[60%] rounded">
                    </div>
                    <div class="flex mb-3 ">
                        <label class="w-[30%] text-right font-semibold py-2">Description</label>
                        <textarea name="description" value=<?php echo $info['description'] ?> rows="4" class="border px-1 mx-2 w-[60%] rounded"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="update_teacher" value="Update" class=" text-white text-sm font-semibold bg-green-600 rounded-xl py-2 px-3 mt-5 hover:bg-green-700">
                    </div>
                </form>
            </div>

        </div>
    </center>


</body>

</html>