<?php

include 'connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `money_donate` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_money.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_styles.css">

</head>
<body>
   
<div class="headers">
    <a href="#" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>    
        <div class="icons">

            <a href="admin_home.php" class="fa-solid fa-user-xmark"></a>
        </div>
    
    </div>

<section class="messages">

   <h1 class="heading"> Money Donations </h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM `money_donate`") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   <div class="box">
      <p> User ID : <span><?php echo $fetch_message['user_id']; ?></span> </p>
      <p> Name : <span><?php echo $fetch_message['name']; ?></span> </p>
      <p> Number : <span><?php echo $fetch_message['number']; ?></span> </p>
      <p> Email : <span><?php echo $fetch_message['email']; ?></span> </p>
      <p> Amount : <span><?php echo $fetch_message['amount']; ?></span> </p>
      <p> Method : <span><?php echo $fetch_message['method']; ?></span> </p>
      <a href="admin_money.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">You Have No Money Donations!</p>';
   }
   ?>
   </div>

</section>



<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>