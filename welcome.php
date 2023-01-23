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
    <link rel="stylesheet" href="css/welcome.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>


    <div class="headers">
        <a href="#" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>
        <div class="icons">
            <i class="fas fa-search" id="search-icon"></i>
            <a href="login.php" class="fa-solid fa-user-lock"></a>

        </div>
    
    </div>

<!-- Slider -->
<div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				<h1 class="topic">Welcome to Food Donation Gallery</h1>
				<p class="sub_topic">Whoever is happy will make others happy too.<br>Let’s grab healthy & delicious food to be wealthy in donations.</p>
			</div>
			<img src="img/img1.jpg"  style= "width: 100%; height: 100%; filter: brightness(50%);">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Let’s join hands to feed the hungry.</h1>
				<p>Alone we can do little; Together we  can do so much.<br>Let’s work hand in hand against hunger.</p>
			</div>
			<img src="img/img2.jpg" style="width: 100%; height: 100%; filter: brightness(50%);">
		</div>
				
		<div class="myslide fade">
			<div class="txt">
				<h1>Enjoy the best food with best taste</h1>
				<p>Need delicious and healthy food to eat? <br> Welcome to our food gallery where you can get good food easily</p>
			</div>
			<img src="img/img4.jpg" style="width: 100%; height: 100%; filter: brightness(50%);">
		</div>
		
    <div class="myslide fade">
			<div class="txt">
				<h1>Help us lift up young spirits</h1>
				<p>Being generous today will build a hunger-free tomorrow</p>
			</div>
			<img src="img/img3.jpg" style="width: 100%; height: 100%; filter: brightness(50%);">
		</div>

		<div class="myslide fade">
			<div class="txt">
				<h1>Healthy food for wealthy mood</h1>
				<p>We give you an eating experience that you'll never forget</p>
			</div>
			<img src="img/img5.jpg" style="width: 100%; height: 100%; filter: brightness(40%);">
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
		<!-- /onclick js -->
	</div>
<!-- Slider -->






<!-- main content -->
  <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/donate.jpg" />
          <div class="card-content">
            <h1 class="card-header">Food & Money Donate</h1>
            <p class="card-text">
            Want to became a earth protector? This is the best option to protect life on earth by donating Foods or Money. Choose what you prefer. Lives are waiting for you!  
            </p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img" src="./img/f_order.jpg"/>
          <div class="card-content">
            <h1 class="card-header">Food Order & Fund</h1>
            <p class="card-text">
            Busy schedule? Food donation Gallery is the best solution to ease your busy life. With one click on get your ordered foods to your.             </p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/treatments.jpg" />
          <div class="card-content">
            <h1 class="card-header">Treatments</h1>
            <p class="card-text">
            Malnutrition is a critical problem in now a day. View best Recommended Treatments for prevent Malnutrition.            </p>
          </div>
        </div>
      </div>
    </div>



<!-- about section -->
<section class="about" id="about">

    <h3 class="sub-heading"> About US </h3>
    <h1 class="heading"> Why Choose US? </h1>

    <div class="row">

        <div class="video-container">
            <video src="img/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Food Donators</h3>
        </div>

        <div class="content">
            <p>Food Donation Gallery is a donation website to help for those who are suffering from malnutrition in school category of Sri Lanka. In here user will be able to place a food order and check lates update of food categories and experienced fastest delivery service as far as using this website and also will be able to donate food or money. In the critical situation donation is not easy ,so we came up with a solution as users will be able to donate Rs.100 per each above Rs .500 order for the donation as an  indirect method.
            </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Free Delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Easy Payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
            <a href="#" class="btn">Learn More</a>
        </div>
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
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Donation </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Order </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Treatment </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Contact US </a>
        </div>
    
        <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe for latest updates</p>
            <input type="email" placeholder="Your Email" class="email">
            <input type="submit" value="Subscribe" class="btn">
            <img src="images/payment.png" class="payment-img" alt="">
        </div>
    
    </div>
    
    <div class="credit">&copy;2022  Created by <span> Archievers Group </span> | all rights reserved </div>
    
    </section>
    
    
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/jsfile.js"></script>
<script src="js/anim.js"></script>
<script src="js/style.js"></script>

</body>
</html>

