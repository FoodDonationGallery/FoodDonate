<?php

include 'connect.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/x.css">
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

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="Search Here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <section class="home1">
    <div class="contentts">
        <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Food Donation Gallery</h3>
        <p data-aos="fade-up" data-aos-delay="450">Malnutrition is a major threat of Sri Lanka nowadays. Most of the time rural 
school students face these malnutrition problems. So, we made a solution for it. People can easily make donations for school students to reduce malnutrition of Sri 
Lanka. </p>
        <a data-aos="fade-up" data-aos-delay="600" href="money.php" class="btns">Money Donate Now</a>
    </div>

</section>

    <!-- button -->
    <a class="float-button" href="donation.php">
    <span>DONATE NOW<span>
    </a>

<!-- main body part -->
<section class="malnutrition">

    <div class="heading">
        <h1>Malnurition</h1>
    </div>

    <div class="conten">
        <p>Malnutrition is when the body lacks sufficient vitamins, minerals, and other nutrients needed to thrive.<br>
        Malnutrition refers to deficiencies or excesses in nutrient intake, imbalance of essential nutrients or impaired nutrient utilization. The double burden of malnutrition consists of both undernutrition and overweight and obesity, as well as diet-related noncommunicable diseases.
    <br><br>
    A multilayered issue, malnutrition manifests in many forms. It can refer to an excessive, insufficient or imbalanced intake of nutrients. UNICEF categorizes the forms malnutrition can take as:</p>
    </div>
</section>

<section class="hero-section">
        <div class="card-grid">
          <a class="card" href="#">
            <div class="card__background" style="background-image:url(./images/waste.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Wasting</p>
              <h3 class="card__heading">Wasting, or acute malnutrition, is when one is too thin for their height. It can be a sudden change or one that occurs gradually but persistently. It can be treated, but moderate and severe cases carry an increased risk of death.

              </h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image:url(./images/stunt.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Stunting</p>
              <h3 class="card__heading"> Stunting, or chronic malnutrition, refers to children who are too short for their age. It can occur when children do not have access to diverse nutrients, drink dirty or contaminated water, or lack proper healthcare. Stunted growth in children can cause life-long physical and cognitive damage.

              </h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image:url(./images/micro.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Micronutrient Deficiencies</p>
              <h3 class="card__heading">Micronutrient deficiencies are when the body lacks a type of vitamin or mineral (e.g., iron, iodine, folate, vitamin A, and zinc deficiencies) needed for healthy growth and development.</h3>
            </div>
          </li>
          <a class="card" href="#">
            <div class="card__background" style="background-image:url(./images/over.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Overweight</p>
              <h3 class="card__heading">Overweight means being too heavy for one’s height. If one is overweight, they are at greater risk of diet-related, non-communicable diseases later in life.
              </h3>
            </div>
          </a>
        <div>
      </section>


<!-- image -->
<div class="body-image">
    <img src="images/home-donate.jpg" width="90%" height="600px">
</div>

<!-- sub body part -->
<section class="causes">
    <div class="heading">
        <h1>Causes of Malnurition</h1>
    </div>

    <div class="causes-mal">
        <div class="des">
            <img src="images/cause1.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Poverty </h3>
                <p>Without the proper means to afford food rich in nutrients or any food at all, people often suffer. According to the World Data Lab, 35% of Africans live in extreme poverty, while the World Bank estimates that more than 48 to 59 million people in South Asia became or remained poor because of the COVID-19 pandemic.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>
        <div class="des">
            <img src="images/cause2.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Inequality </h3>
                <p>In any location, poverty and an unequal distribution of resources can seriously undermine one’s ability to consume a well-balanced diet. Women are disproportionately affected by hunger; in nearly two-thirds of the world’s countries, women are more likely than men to suffer from hunger and food insecurity.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>
        <div class="des">
            <img src="images/cause3.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Disease </h3>
                <p>Children who suffer from diseases or illnesses such as malaria, cholera or pneumonia are more susceptible to malnutrition. The combination of disease or illness and malnutrition weakens the metabolism, creating a vicious cycle of infection and undernourishment. The results can be deadly.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>
        <div class="des">
            <img src="images/cause4.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Conflict </h3>
                <p>Violent conflicts can drastically compromise food security. According to the 2021 Global Report of Food Crises by the Food Security Information Network, conflict was the primary driver of food insecurity, with 99.1 million people in 23 countries hungry due to armed violence and insecurity in 2020, a sharp increase of more than 22 million people from 2019.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>
        <div class="des">
            <img src="images/cause5.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Climate Change </h3>
                <p>Climate change is an undeniable fact. If we cannot divert from the expected 2.7°C of warming, there will be devasting global consequences. By 2040, major heat waves will affect more than 3.9 billion people and 700 million more will be exposed to drought risk, while crop yields are expected to drop by 50%.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>
        <div class="des">
            <img src="images/cause6.jpg" alt="">
            <div class="content-part">
                <h3> <i class="fa-solid fa-circle-check"></i> Lack of Clean Drinking Water </h3>
                <p>Lack of potable water, poor sanitation, and dangerous hygiene practices increase vulnerability to infectious and water-borne diseases, which are direct causes of acute malnutrition.</p>
                <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
            </div>
        </div>

    </div>
</section>


<!-- about section starts  -->
<section class="about" id="about">

    <h3 class="sub-heading"> About Us </h3>
    <h1 class="heading"> Why Choose US? </h1>

    <div class="row">

        <div class="video-container">
            <video src="img/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Food Donators</h3>
        </div>

        <div class="content">
        <p>Food Donation Gallery is a donation website to help for those who are suffering from malnutrition in school category of Sri Lanka. In here user will be able to place a food order and check lates update of food categories and experienced fastest delivery service as far as using this website and also will be able to donate food or money. In the critical situation donation is not easy ,so we came up with a solution as users will be able to donate Rs.100 per each above Rs .500 order for the donation as an  indirect method.
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

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Customer's <span>Review</span> </h1>

    <div class="swiper mySwiper review-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide box">
                <img src="images/pic-1.png" alt="">
                <p>So happy with this.. received really quick. Thanks so much.</p>
                <h3>Amila Bandara</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-2.png" alt="">
                <p> Fast delivery. Looks awesome. Would buy from seller again.</p>
                <h3>Natasha Pathirana</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-3.png" alt="">
                <p>Great description of item. Like new. Very prompt as well.</p>
                <h3>Naveen Perera</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-4.png" alt="">
                <p>As described, good quality, arrived quickly, recommended seller.</p>
                <h3>Amali Gunasekara</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>

<!-- review section ends -->

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

<div class="credit">&copy;2023  Created by <span> Achievers Group </span> | All Rights Reserved </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/style.js"></script>

</body>
</html>