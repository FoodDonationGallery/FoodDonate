<?php

include 'connect.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donation Gallery</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

    <div class="headers">
    <a href="#" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>
        <nav class="navbar">
            <a href="admin_donate.php">Donation Item</a>
            <a href="admin_menu.php">Order Item</a>
            <a href="admin_user.php">Users</a>
            <a href="admin_message.php">Messages</a>
            <a href="admin_money.php">Money Donation</a>

        </nav>
    
        <div class="icons">

            <a href="welcome.php" class="fa-solid fa-user-xmark"></a>
        </div>
    
    </div>

    <section class="home1">
    <div class="contentts">
        <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Admin Panel</h3>
    </div>

   </section>


<script src="js/style.js"></script>

</body>
</html>
