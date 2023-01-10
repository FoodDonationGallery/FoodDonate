<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);

   if(!empty($name)){
      $update_name = $conn->prepare("UPDATE `user` SET name = ? WHERE id = ?");
      $update_name->execute([$name, $user_id]);
   }

   if(!empty($email)){
      $select_email = $conn->prepare("SELECT * FROM `user` WHERE email = ?");
      $select_email->execute([$email]);
      if($select_email->rowCount() > 0){
         $message[] = 'Email Already Taken!';
      }else{
         $update_email = $conn->prepare("UPDATE `user` SET email = ? WHERE id = ?");
         $update_email->execute([$email, $user_id]);
      }
   }

   if(!empty($number)){
      $select_number = $conn->prepare("SELECT * FROM `user` WHERE number = ?");
      $select_number->execute([$number]);
      if($select_number->rowCount() > 0){
         $message[] = 'Number Already Taken!';
      }else{
         $update_number = $conn->prepare("UPDATE `user` SET number = ? WHERE id = ?");
         $update_number->execute([$number, $user_id]);
      }
   }
   
   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $select_prev_pass = $conn->prepare("SELECT password FROM `user` WHERE id = ?");
   $select_prev_pass->execute([$user_id]);
   $fetch_prev_pass = $select_prev_pass->fetch(PDO::FETCH_ASSOC);
   $prev_pass = $fetch_prev_pass['password'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = sha1($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if($old_pass != $empty_pass){
      if($old_pass != $prev_pass){
         $message[] = 'Old Password Not Matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'Confirm Password Not Matched!';
      }else{
         if($new_pass != $empty_pass){
            $update_pass = $conn->prepare("UPDATE `user` SET password = ? WHERE id = ?");
            $update_pass->execute([$confirm_pass, $user_id]);
            $message[] = 'Password Updated Successfully!';
         }else{
            $message[] = 'Please Enter a New Password!';
         }
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
    <link rel="stylesheet" href="css/update.css">
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
        <?php
            $count_user_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_user_cart_items->execute([$user_id]);
            $total_user_cart_items = $count_user_cart_items->rowCount();
         ?>
        <!-- <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);}
         ?> -->

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

    <section class="homes9" id="home">

        <div class="contentt">
            <h3>WELCOME TO</h3>
            <span>Update Profile </span>
        </div>

    </section>

<div class="form-container">

        <form action="" method="post">
        <h3>Update Profile</h3>
        <!-- <?php
            $select_profile = $conn->prepare("SELECT * FROM `user` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);}
         ?> -->

        <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" class="box">
        <input type="email" name="email" placeholder="<?= $fetch_profile['email']; ?>" class="box">
        <input type="number" name="number" placeholder="Enter Your Number" class="box" min="0" max="9999999999" maxlength="10">
        <input type="password" name="old_pass" placeholder="Enter Your Old Password"  class="box">
        <input type="password" name="new_pass" placeholder="Enter Your New Password"  class="box">
        <input type="password" name="confirm_pass" placeholder="Confirm Your New Password"  class="box">
        <input type="submit" name="submit" value="Update Now" class="btn" name="submit">

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
        <input type="submit" value="subscribe" class="btn">
        <img src="images/payment.png" class="payment-img" alt="">
    </div>

</div>

<div class="credit">&copy;2022  Created by <span> Archieves Group </span> | all rights reserved </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/style.js"></script>

</body>
</html>