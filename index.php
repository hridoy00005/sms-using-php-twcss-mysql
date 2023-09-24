<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Manager</title>
    <link rel="stylesheet" href="./style/main.css">
</head>

<body>
    <nav class="flex justify-between items-center fixed bg-sky-300 h-[70px] w-full z-10">
        <label class="text-2xl ml-5 text-white font-bold">V-School</label>
        <ul class="flex mr-5">
            <li class="mx-3 text-white text-lg"><a>Home</a></li>
            <li class="mx-3 text-white text-lg"><a href="">Contact</a></li>
            <li class="mx-3 text-white text-lg"><a href="">Admission</a></li>
            <li class="mx-3 text-white text-sm bg-green-600 rounded-xl py-2 px-3 hover:bg-green-700"><a href="./pages/login.php">Login</a></li>
        </ul>
    </nav>

    <!-- Hero -->
    <div class="section-1 pt-[70px]">

        <label class="absolute bg-sky-700 text-4xl font-semibold text-white px-5 py-2 top-[20%] left-[32%] rounded-xl">We Give Our Best Service</label>
        <img class="h-[300px] w-full rounded-b-xl" src="./images/school_management.jpg" alt="Hero image">
    </div>

    <!-- Welcome Section -->
    <div class="container px-24 pt-[70px]">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <img class="h-[250px] w-full rounded-xl" src="./images/school2.jpg" alt="">
            </div>
            <div class="col-span-8 flex items-center">
                <div>
                    <h1 class="text-4xl">Welcome To Virtual School</h1>
                    <p class="text-[15px] mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ab optio sint hic, ducimus architecto corporis impedit fugiat accusantium iure esse temporibus! Maiores laborum libero odio impedit architecto! Nam accusamus exercitationem enim dignissimos veniam ad! Incidunt sapiente id sequi impedit rem? Similique fugiat eos, exercitationem placeat excepturi impedit unde consequatur, quaerat, neque inventore ducimus quasi maiores natus voluptates magnam. Nihil aspernatur nostrum vitae eveniet? Officiis pariatur quisquam fuga ratione dicta laborum, dolore iure laudantium enim minima sed fugiat temporibus, minus adipisci, nesciunt ea excepturi dolores laboriosam? Eum architecto et quaerat error libero totam. Debitis quod earum eveniet ipsum ab sequi.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Teacher -->
    <center>
        <h1 class="text-4xl  pt-[70px]">Our Teachers</h1>
    </center>
    <div class="container px-24  pt-[30px]">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/teacher1.jpg" alt="">
                <p class="text-[15px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptates a pariatur aut minus officiis doloribus.</p>
            </div>
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/teacher2.jpg" alt="">
                <p class="text-[15px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptates a pariatur aut minus officiis doloribus.</p>
            </div>
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/teacher3.jpg" alt="">
                <p class="text-[15px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptates a pariatur aut minus officiis doloribus.</p>
            </div>
        </div>
    </div>

    <!-- Courses -->
    <center>
        <h1 class="text-4xl  pt-[70px]">Our Courses</h1>
    </center>
    <div class="container px-24  pt-[30px]">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/web.jpg" alt="">
                <h2 class="text-xl mt-3">Web Developer</h2>
            </div>
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/graphic.jpg" alt="">
                <h2 class="text-xl mt-3">Graphic Designer</h2>
            </div>
            <div class="col-span-4">
                <img class="h-[200px] w-[90%] rounded-xl" src="./images/marketing.png" alt="">
                <h2 class="text-xl mt-3">Marketing</h2>
            </div>
        </div>
    </div>

    <!-- Admission -->
    <center>
        <h1 class="text-4xl  pt-[70px]">Admission Form</h1>
    </center>
    <div align='center' class="pt-[30px]">
        <form action="./functions/data_check.php" method="POST">
            <div>
                <label class="w-24 text-right pr-3" for="">Name</label>
                <input class="w-[30%] h-10 border border-blue-900 rounded-xl p-1" type="text" placeholder="Enter Your Name" name="name">
            </div>
            <div class="py-5">
                <label class="w-24 text-right pr-3" for="">Email</label>
                <input class="w-[30%] h-10 border border-blue-900 rounded-xl p-1" type=" text" placeholder="Enter Your Email" name="email">
            </div>
            <div>
                <label class="w-24 text-right pr-3" for="">Phone</label>
                <input class="w-[30%] h-10 border border-blue-900 rounded-xl p-1" type=" email" placeholder="Enter Your Phone Number" name="phone">
            </div>
            <div class="py-5">
                <label class="w-24 text-right " for="">Message</label>
                <textarea class="mr-1 w-[30%] h-[130px] border border-blue-900 rounded-xl p-1" name="message"></textarea>
            </div>
            <div>
                <input class="w-[15%] relative left-5 mx-3 text-white text-sm font-bold bg-green-600 rounded-xl py-2 px-3 hover:bg-green-700" type="submit" name="apply" value="Apply">
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-sky-300 h-16 flex items-center justify-center mt-5">
        <p class="text-white">All @copyright reserved by V-School</p>
    </footer>
</body>

</html>