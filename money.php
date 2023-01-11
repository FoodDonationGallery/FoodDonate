<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if (isset($_POST['order_btn'])) {
   $query = "INSERT INTO `fund`(`amount`) VALUES (100)";
   mysqli_query($conn, $query);
   echo "<script>alert('Successfully donated Rs. 100')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Donation Gallery</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/money.css">

</head>
<body>
   
<div class="headers">
        <a href="#" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>
        <nav class="navbar">
        <a class="active" href="home.php">Home</a>
            <a href="donation.php">Donation</a>
            <a href="menu.php">Order</a>
            <a href="treatment.php">Treatment</a>
            <a href="contact.php">Contact US</a>
        </nav>
    
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="profile.php" class="fa-solid fa-user"></a>
            <a href="logout.php" class="fa-solid fa-user-xmark"></a>
        </div>
    
    </div>

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="Search Here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <section class="home1">
    <div class="contentts">
        <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Money Donation</h3>
    </div>

   </section>

   <!-- body part -->
   

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>