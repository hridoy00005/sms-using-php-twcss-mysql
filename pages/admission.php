<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
}


include '../functions/db_connection.php';//Database Connection

$sql = "SELECT * FROM admission";

$result = mysqli_query($data, $sql);

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
            <h2 class="text-4xl mb-2">Applied For Admission</h2>
                <br>
            <table class="mb-2">
                <tr>
                    <th class="p-5 border">Name</th>
                    <th class="p-5 border">Email</th>
                    <th class="p-5 border">Phone</th>
                    <th class="p-5 border">Message</th>
                </tr>
                <?php
                while ($info = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td class="p-5 border"><?php echo $info["name"] ?></td>
                        <td class="p-5 border"><?php echo $info["email"] ?></td>
                        <td class="p-5 border"><?php echo $info["phone"] ?></td>
                        <td class="p-5 border"><?php echo $info["message"] ?></td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </center>


</body>

</html>