<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_address = mysqli_real_escape_string($conn, $_POST['update_address']);

   mysqli_query($conn, "UPDATE `users` SET name = '$update_name', email = '$update_email',address = '$update_address' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'Old Password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'Confirm Password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `users` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'Password Updated Successfully!';
      }
   }
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donation Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

<!-- form section -->
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Your Name :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>Your Email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>Your Address :</span>
            <input type="address" name="update_address" value="<?php echo $fetch['address']; ?>" class="box">

         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>Old Password :</span>
            <input type="password" name="update_pass" placeholder="Enter Old Password" class="box">
            <span>New Password :</span>
            <input type="password" name="new_pass" placeholder="Enter New Password" class="box">
            <span>Confirm Password :</span>
            <input type="password" name="confirm_pass" placeholder="Confirm New Password" class="box">
         </div>
      </div>
      <input type="submit" value="Update Profile" name="update_profile" class="btn">
      <a href="profile.php" class="delete-btn">Go Back</a>
   </form>

</div>


<!-- footer -->
<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>Follow Us On :</h3>
        <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f" ></a>
            <a href="https://twitter.com/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/login" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>Contact Info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +94765623890</a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +94726598456 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> piyumiparanavithanage@gmail.com | yashora23@gmail.com| dulajyapa2@gmail.com | thanushadeemantha@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Colombo- Srilanka</a>
    </div>

    <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="donation.php" class="links"> <i class="fas fa-arrow-right"></i> Donation </a>
        <a href="menu.php" class="links"> <i class="fas fa-arrow-right"></i> Order </a>
        <a href="treatment.php" class="links"> <i class="fas fa-arrow-right"></i> Treatment </a>
        <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> Contact US </a>
    </div>

    <div class="box">
        <h3>Newsletter</h3>
        <p>Subscribe for latest updates</p>
        <input type="email" placeholder="Your Email" class="email">
        <input type="submit" value="Subscribe" class="btn">
        <img src="images/payment.png" class="payment-img" alt="">
    </div>

</div>

<div class="credit">&copy;2022  Created by <span> Archieves Group </span> | all rights reserved </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/style.js"></script>

</body>
</html>