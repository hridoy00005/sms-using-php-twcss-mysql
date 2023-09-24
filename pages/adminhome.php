<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:./login.php");
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
include '../components/admin_sidebar.php';

?>

    <div class="ml-[20%] mt-[5%]">
        <h2 class="text-4xl mb-2">Admin Dashboard</h2>
    </div>

</body>

</html>