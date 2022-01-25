<!DOCTYPE html>
<html lang="en">


<!-- molla/index-2.html  22 Nov 2019 09:55:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - Daily needs</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <?php include 'head.php'?>
</head>

<body>
    <div class="page-wrapper">
    <?php include 'header.php'?>
           <!-- End .header -->

        <main class="main">
            <div class="intro-section bg-lighter pt-5 pb-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="images/4.jpg">
                                                <img src="images/banner8.jpeg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Top Sale Fruits & Vegetables</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Dailyneeds<br>.es</h1><!-- End .intro-title -->

                                            <a href="category.php" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="assets/images/slider/slide-2-480w.jpg">
                                                <img src="images/banner4.jpeg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Organic Manufacturing</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">All Fruits & Vegetables</h1><!-- End .intro-title -->

                                            <a href="category.php" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="assets/images/slider/slide-3-480w.jpg">
                                                <img src="images/banner5.jpeg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Delivery at your office</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Outdoor Delivery at<br> Mininum cost</h1><!-- End .intro-title -->

                                            <a href="category.php" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->
                                </div><!-- End .intro-slider owl-carousel owl-simple -->
                                
                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display">
                                            <a href="#">
                                                <img src="images/banner6.jpeg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="#">Delivery</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Home & Office<br>Within an hour</a></h3><!-- End .banner-title -->
                                                <a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->

                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="#">
                                                <img src="images/banner7.jpeg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="#">New items</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Best Selling <br>Fruits</a></h3><!-- End .banner-title -->
                                                <a href="category.php" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->

                    <div class="mb-6"></div><!-- End .mb-6 -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                        <a href="#" class="brand">
                            <img src="assets/images/brands/1.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/2.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/3.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/4.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/5.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/6.png" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter -->
            <div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                       
                            <blockquote class="testimonial text-center">
                                <!-- <img src="assets/images/testimonials/user-1.jpg" alt="user"> -->
                                <p style="font-size:large;"><b style="font-size: larger;">“</b> Vegetables & fruits  are a significant aspect of our diet as they come with basic nutrients that are required by our body. They are an acceptable wellspring of energy for the body and consequently should be consumed on a daily basis. An eating routine that is wealthy in fruits encourages you to remain fit and healthy. Visiting the market to buy veg &  fruit products consistently is a little bit complex and impractical and that’s where dailyneeds.es  is at your service.<b style="font-size: larger;">”</b></p>
                                <br>
                                <p style="font-size:large;">Enjoy the best of both worlds with our  fruit and vegetable boxes.</p>
                               
                            </blockquote><!-- End .testimonial -->

                    
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div>
            <div class="mb-6"></div><!-- End .mb-6 -->
            <div class="row" style="padding: 20px;">
                        <div class="col-lg-12">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="images/4.jpg">
                                                <img src="images/4.jpg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Top Sale Fruits & Vegetables</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Dailyneeds<br>.es</h1><!-- End .intro-title -->

                                            <a href="category.php" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                  
                                </div><!-- End .intro-slider owl-carousel owl-simple -->
                                
                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->
                    </div><!-- End .row -->

        <?php include 'trendy.php'?>

    		<div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">WHAT WE DO</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>    FRUIT AND VEGETABLES BOX AT YOUR HOME</b></h4>
                
              <h4 class="title-md text-center mb-4" style="color: grey;padding-left:100px;padding-right:100px;">  We send you the best fruits and vegetables at your home <br><br> We guarantee that you will receive the best fresh products on the market at your home (or wherever you want!). Simply place your order online and add everything you need to the shopping cart, then we will take care of delivering it to you. We work with a very high turnover to ensure that the product that we put in your order keeps its freshness intact.</h4>
                <br><div class="row">



               <?php /*
                            include 'config.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {*/?>
        			<div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner9.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/8.jpg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-12 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner10.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

<?php

// }}
?>

        		
        		</div><!-- End .row -->
    		</div><!-- End .container -->
<br><br>
            <div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">FRUIT IN THE OFFICE<br>Eating Fruit is Good for you and has Plenty of Health Benefits</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>    Keep your hard-working team healthy and motivated by giving them farm fresh fruit every week.</b></h4>
                
                <h4 class="title-md text-center mb-4" style="color: grey;padding-left:100px;padding-right:100px;">  We can create a custom program for you that combines office fruit delivery with take-home boxes for essential employees’ families and boxes delivered to remote workers on your behalf. Bring cohesion and unity through the shared weekly experience of healthy fruit.</h4>
                <h4 class="title-md text-center mb-4" style="color: grey;padding-left:100px;padding-right:100px;">  Eating fruits  is one of the healthiest eating habits that we can include in our day to day. They help us maintain the proper weight, since they are very low in calories , and they provide us with  essential vitamins and minerals for our body, helping us to lead a healthier life.</h4>
                <h4 class="title-md text-center mb-4" style="color: grey;padding-left:100px;padding-right:100px;">  Consuming fruit in the workplace not only helps to improve the health of employees , it is also a way to save on your lunch or daily meal and promote 
 
 social relationships, well-being and motivation.
 </h4>
               <br><div class="row">



               <?php /*
                            include 'config.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {*/?>
                            <div class="col-4"></div>
        			<div class="col-4 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner11.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-4"></div>

                   

<?php

// }}
?>

        		
        		</div><!-- End .row -->
    		</div><!-- End .container -->



            <br><br>
            <div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">Fruit BASKETS delivery to office
</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif;padding-left:100px;padding-right:100px"> Once a week, a few times a week, or a fresh delivery everyday – it’s up to you. We deliver office fruit baskets Monday to Saturday, so you can have fresh fruit to munch on all week long.</h4>
                
              <h4 class="title-md text-center mb-4" style="color: grey;padding-left:100px;padding-right:100px;">  Try our fruit baskets delivery today and see the difference in your team as they ditch the unhealthy snacks in favour of tasty fresh fruit. You'll be amazed at what fruit basket deliveries can do for incentivising healthy eating! <br><br> You'll be amazed at the positive impact that a fresh fruit basket delivery can have on the mindset of your team. Consumption of fresh fruit at work is linked to increased productivity and overall satisfaction. Who would have thought that a corporate fruit delivery could do so much good. </h4>
                <br><div class="row">



               <?php /*
                            include 'config.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {*/?>
        			<div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner12.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner13.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-12 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner14.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->

<?php

// }}
?>

        		
        		</div><!-- End .row -->
    		</div><!-- End .container -->

<br><br>
<br><br>
            <div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">GIFTS  BASKETS FOR SPECIAL EVENTS</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>    How exactly do we deliver fruit baskets, we hear you ask. Well, setting up your office fruit basket delivery is easy. Simply choose between the Essential or the Seasonal basket (or add both if you like). Then select which days you’d like deliveries and we’ll create your account.</b></h4>
                
                <h2 class="title-lg text-center mb-4" style="font-family:Serif">Our fruit baskets are perfect for gifts and special events</h2><!-- End .title-lg text-center -->
               
               <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>   You can buy fruit basket online for different events including birthday events, weddings, and commemorations among others on the off chance that you need to include a customary yet satisfying touch to your presents and amazements. We are also offering custom fruit baskets with Toys, Dry Fruits, Indian Sweets, and Chocolates.</b></h4>
             
               <h2 class="title-lg text-center mb-4" style="font-family:Serif">We are Online stores of Special spices<br><br>
Looking to buy Indian spices, masala & herbs online in MADRID, SPAIN  and get it delivered to your home? Choose from a wide range of whole or ground spices like chilli powder, ajwain powder, jeera / cummin seeds, alsi seeds, amchur powder, pomegranate powder, garam masala, triphala, bay leaves, dhania powder, sambar masala, mustard powder, tandoori masala and all the other Indian spices to help you with your everyday Indian cooking or making those special Indian meals.
TS</h2><!-- End .title-lg text-center -->
               
 </h4>
               <br><div class="row">



               <?php /*
                            include 'config.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {*/?>
                            <div class="col-4"></div>
        			<div class="col-4 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner15.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-4"></div>

                   

<?php

// }}
?>

        		
        		</div><!-- End .row -->
    		</div><!-- End .container -->

<br><br>
<div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">WHY US OR BENEFITS DAILYNEEDS.ES ?</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>   We support local growers<br>
Our produce is delivered fresh to us daily<br>
Boxes of goodness<br>
Best Quality with competitive price <br>
You can customize your box<br>
You’ll receive a dedicated account manager for your Office-<br>
Delivery to the door<br>
</b></h4>
               <br>
               
               
               <div class="row">



               <?php /*
                            include 'config.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {*/?>
                            <div class="col-4"></div>
        			<div class="col-4 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="images/banner16.jpeg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="#"><?php echo $output['cat_title']?></a></h3><!-- End .banner-title -->
                				<a href="category.php" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-4"></div>

                   

<?php

// }}
?>

        		
        		</div><!-- End .row -->
    		</div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-6 -->

            
          <?php // include 'recent.php' ?>

            <div class="container">
                <hr>
            

                <div class="mb-2"></div><!-- End .mb-2 -->
            </div><!-- End .container -->
           
            <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(images/5.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-8">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                    <p class="cta-desc text-white">Molla presents the best in interior design</p><!-- End .cta-desc -->
                                </div><!-- End .col -->

                                <div class="col-auto">
                                    <a href="#signin-modal" data-toggle="modal" class="btn btn-outline-white"><span>SIGN UP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->

     <?php include 'footer.php'?>

        <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>



</html>