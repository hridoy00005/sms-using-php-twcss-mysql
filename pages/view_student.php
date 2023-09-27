<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}

include '../functions/db_connection.php'; //Database Connection

$sql = "SELECT * FROM user WHERE usertype = 'student'";

$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>

    <?php
    include '../components/admin_layer.php';

    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">View Student</h2>
            <span class="text-green-600">
                <?php
                if ($_SESSION['messagedel']) {
                    echo $_SESSION['messagedel'];
                } elseif ($_SESSION['messageupdate'])
                    echo $_SESSION['messageupdate'];

                unset($_SESSION['messagedel']); //Unset empty a variable in php
                unset($_SESSION['messageupdate']); //Unset empty a variable in php
                ?>
            </span>

            <br>
            <table class="mb-2 border">
                <tr>
                    <th class="p-5 border">UserName</th>
                    <th class="p-5 border">Email</th>
                    <th class="p-5 border">Phone</th>
                    <th class="p-5 border">Password</th>
                    <th class="p-5 border">Delete</th>
                    <th class="p-5 border">Update</th>
                </tr>
                <?php
                while ($info = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td class="p-5 border"><?php echo $info["username"] ?></td>
                        <td class="p-5 border"><?php echo $info["email"] ?></td>
                        <td class="p-5 border"><?php echo $info["phone"] ?></td>
                        <td class="p-5 border"><?php echo $info["password"] ?></td>
                        <td class="p-5 border"><?php echo "<a class='text-white text-sm font-semibold bg-red-600 rounded-xl py-2 px-3 hover:bg-red-700' onclick=\"confirm('Are You Sure to Delete?');\" href='../functions/delete.php?student_id={$info['id']}'>Delete</a>" ?></td>
                        <td class="p-5 border"><?php echo "<a class='text-white text-sm font-semibold bg-blue-600 rounded-xl py-2 px-3 hover:bg-blue-700' href='./update_student.php?student_id={$info['id']}'>Update</a>" ?></td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </center>

</body>

</html>