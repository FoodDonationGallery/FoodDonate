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
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Message Sent Already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Message Sent Successfully!';
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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/contact.css">

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
\
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
        <h3 data-aos="fade-up" data-aos-delay="300">Conatct US</h3>
    </div>

   </section>

    <!-- button -->
    <a class="float-button" target="_blank" href="donation.php">
        <i class="fa-light fa-hands-holding-dollar"></i>  <span>DONATE NOW<span>
    </a>


<div class="contactus">
    <div class="title">
        <h2>Get In Touch</h2>
    </div>
    <div class="bo">
        <div class="contact form">
        <h3>Send a Message</h3>
        <form action="" method="post">
            <div class="formBox">
                <div class="row50">
                    <div class="inputBox">
                        <span>First Name:</span>
                        <input type="text" name="name" required placeholder="Thanusha Demantha" class="box">
                    </div>
                </div>

                    <div class="inputBox">
                        <span>Email Address:</span>
                        <input type="email" name="email" required placeholder="thanusha@gmail.com" class="box">
                    </div>
                    <div class="inputBox">
                        <span>Mobile Number:</span>
                        <input type="number" name="number" required placeholder="0770344556" class="box">
                    </div>

                <div class="row100">
                    <div class="inputBox">
                        <span>Message:</span>
                        <textarea name="message" class="box" placeholder="Your Message" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                
                <div class="row100">
                    <div class="inputBox">
                    <input type="submit" value="SEND" name="send" class="btn">
                    </div>
                </div>
            </div>
        </form>
        
        </div>

        <div class="contact info">
            <h3>Contact Info</h3>
            <div class="infoBox">
                <div>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <p>The Open University, Nawala <br>Nugeggoda</p>
                </div>
                <div>
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <a href="mailto:thanusha@gmail.com">piyumi123@gmail.com</a>
                </div>
                <div>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <a href="tel:+94770890223">+94 770890223</a>
                </div>

                <ul class="sci">
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/login"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.051836695896!2d79.88172721439595!3d6.884394395025284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fc0237ed5d25%3A0x4c711f0161ac8139!2sThe%20Open%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1672765442498!5m2!1sen!2slk" 
            style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
 <script>


     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         phone:{
            presence:{allowEmpty: false}
         },
         country:{
            presence:{allowEmpty: false}
         },
         msg: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.last_name.value,
             email: form.elements.email.value,
             phone: form.elements.phone.value,
             country: form.elements.country.value,
             msg: form.elements.subject.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);


window.onload = fadeOut;
 </script>
<script src="js/style.js"></script>

</body>
</html>
