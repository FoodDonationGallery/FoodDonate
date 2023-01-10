<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `m_cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `m_cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
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
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="headers">
        <a href="#" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>
        <nav class="navbar">
        <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>

            <a class="active" href="home.php">Home</a>
            <a href="donation.php">Donation</a>
            <a href="menu.php">Order</a>
            <a href="treatment.php">Treatment</a>
            <a href="contact.php">Contact US</a>
            <a href="menu_cart.php">Cart <span>(<?php echo $cart_rows_number; ?>)</span></a>

        </nav>
    
        <div class="icons">

            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="profile.php" class="fa-solid fa-user"></a>
            <a href="logout.php" class="fa-solid fa-user-xmark"></a>
        </div>
    
    </div>

        <!-- button -->
        <a class="float-button" target="_blank" href="donation.php">
        <i class="fa-light fa-hands-holding-dollar"></i>  <span>DONATE NOW<span>
    </a>

    <section class="home2">
    <div class="contentts">
        <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Orders</h3>
    </div>

   </section>

<section class="products">

   <h1 class="heading">Donation Items</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">LKR. <?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Add to Menu Cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">No Items Added Yet!</p>';
      }
      ?>
   </div>

</section>

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



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>