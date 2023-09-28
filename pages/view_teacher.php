<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}

include '../functions/db_connection.php'; //Database Connection

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Teacher</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>

    <?php
    include '../components/admin_layer.php';

    ?>

    <center>
        <div class="ml-[20%] pt-[100px]">
            <h2 class="text-4xl mb-2">View Teacher</h2>
            <!-- <span class="text-green-600">
                <?php
                // if ($_SESSION['messagedel']) {
                //     echo $_SESSION['messagedel'];
                // } elseif ($_SESSION['messageupdate'])
                //     echo $_SESSION['messageupdate'];

                // unset($_SESSION['messagedel']); //Unset empty a variable in php
                // unset($_SESSION['messageupdate']); //Unset empty a variable in php
                ?>
            </span> -->

            <br>
            <table class="mb-2 border">
                <tr>
                    <th class="p-5 border">Name</th>
                    <th class="p-5 border">About</th>
                    <th class="p-5 border">Image</th>
                </tr>
                <?php
                while ($info = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td class="p-5 border"><?php echo $info["name"] ?></td>
                        <td class="p-5 border"><?php echo $info["description"] ?></td>
                        <td class="p-5 border "><img height="110px" width="110px" src="../images/teacher1.jpg" alt=""></td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </center>

</body>

</html>