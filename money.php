<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $amount = $_POST['amount'];
   $method = mysqli_real_escape_string($conn, $_POST['method']);

   $select_message = mysqli_query($conn, "SELECT * FROM `money_donate` WHERE name = '$name' AND email = '$email' AND number = '$number' AND amount = '$amount' AND method = '$method'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Sent Already!';
   }else{
      mysqli_query($conn, "INSERT INTO `money_donate`(user_id, name, email, number,amount, method) VALUES('$user_id', '$name', '$email', '$number', '$amount','$method')") or die('query failed');
      $message[] = ' Sent Successfully!';
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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>


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
   <section class="malnutrition">

    <div class="heading">
        <h1>Money Donate Now</h1>
    </div>
</section>

   <section class="school">
    <div class="school-name">
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>100/=</h2>
        </div>
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>500/=</h2>
        </div>
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>1000/=</h2>
        </div>
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>2000/=</h2>
        </div>
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>5000/=</h2>
        </div>
        <div class="set">
            <i class="fa-solid fa-rupee-sign"></i>        
            <h2>10000/=</h2>
        </div>

    </div>
</section>

<!-- collect details form -->
<section class="contact_us">

<div class="row_us">

   <div class="image">
      <img src="images/money.svg" alt="">
   </div>

   <form action="" method="post">
      <h3>Fill Your Details</h3>
      <input type="text" name="name" maxlength="50" class="box" placeholder="Enter Your Name" required>
      <input type="email" name="email" maxlength="50" class="box" placeholder="Enter Your Email" required>
      <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="Enter Your Number" required maxlength="10">
      <input type="number" name="amount" min="0" max="9999999999" class="box" placeholder="Enter Donate Amount" required maxlength="10">
    <select name="method" class="box">
               <option value="cash on delivery">Cash on Delivery</option>
               <option value="credit card">Credit Card</option>
               <option value="paypal">Paypal</option>
               <option value="paytm">Paytm</option>
    </select>

      <input type="submit" value="Donate" name="send" class="btn">
   </form>

</div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>