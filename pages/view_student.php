<?php
session_start();

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
    include '../components/admin_sidebar.php';

    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">View Student</h2>
            <br>
            <table class="mb-2">
                <tr>
                    <th class="p-5 border">UserName</th>
                    <th class="p-5 border">Email</th>
                    <th class="p-5 border">Phone</th>
                    <th class="p-5 border">Password</th>
                </tr>
                <?php
                while ($info = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td class="p-5 border"><?php echo $info["username"] ?></td>
                        <td class="p-5 border"><?php echo $info["email"] ?></td>
                        <td class="p-5 border"><?php echo $info["phone"] ?></td>
                        <td class="p-5 border"><?php echo $info["password"] ?></td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </center>

</body>

</html>