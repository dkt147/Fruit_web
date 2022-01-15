<!DOCTYPE html>
<html lang="en">


<!-- molla/contact-2.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <?php include 'head.php' ?>
</head>

<body>
    <div class="page-wrapper">
    <?php include 'header.php' ?>
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Get in touch<span>Contact</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div id="map" class="mb-5"></div><!-- End #map -->
                <div class="container">
                	<div class="row">
                		<div class="col-md-4">
                			<div class="contact-box text-center">
        						<h3>Email</h3>

        						<address>clientedailyneeds@gmail.com</address>
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->

                		<div class="col-md-4">
                			<div class="contact-box text-center">
        						<h3>Start a Conversation</h3>


        						<div><a href="tel:#">Call us: 916440521</a></div>
								<div><a href="tel:#">Whatsapp: 0034643884829 </a></div>
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->

                		<div class="col-md-4">
                			<div class="contact-box text-center">
        						<h3>Social</h3>

        						<div class="social-icons social-icons-color justify-content-center">
			    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
			    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
			    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
			    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
			    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
			    				</div><!-- End .soial-icons -->
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->
                	</div><!-- End .row -->
				
				
				
				
					<div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4" style="font-family:Serif">Store Opening Hours</h2><!-- End .title-lg text-center -->
               
                <h4 class="title-md text-center mb-4" style="color: darkgrey;font-family:Serif"><b>  <br> Monday: 0830- 1800<br>
Tuesday: 0830 - 1800<br>
Wednesday: 0830 - 1800<br>
Thursday: 0830 - 1800<br>
Friday: 0830 - 1800<br>
Saturday: 0830 - 1500<br>
Sunday: Closed<br>
</b></h4>
                
              
               <br>
			   
    		</div><!-- End .container -->

<br><br>


                	<hr class="mt-3 mb-5 mt-md-1">
                	<div class="touch-container row justify-content-center">
                		<div class="col-md-9 col-lg-7">
                			<div class="text-center">
                			<h2 class="title mb-1">Visit us</h2><!-- End .title mb-2 -->
                		<p class="mb-3">Shop:  dailyneeds , calle …..      madrid 28947 . spain</p><br>
						<p class="lead text-primary">
							Sign up to receive  weekly online offers of fruits and vegetables  and consult related products.
                			</p><!-- End .lead text-primary -->
                			
							<p class="mb-3">Please do not forget to rate the quality of the vegetables and fruits purchased  to  share your opinion with other users . This is how we can all check the  ratings to know the opinion of other users  before buying fruits and vegetables online .
</p>
                			</div><!-- End .text-center -->
                			<form action="_contact.php" class="contact-form mb-2" method="POST">
                				
									<label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" name="email" required>
                				
                                <label for="csubject" class="sr-only">Subject</label>
        						<input type="text" class="form-control" id="csubject" placeholder="Subject" name="subject">

                                <label for="cmessage" class="sr-only">Message</label>
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *" name="message"></textarea>
								
								<div class="text-center">
	                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm" name="submit">
	                					<span>SUBMIT</span>
	            						<i class="icon-long-arrow-right"></i>
	                				</button>
                				</div><!-- End .text-center -->
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-md-9 col-lg-7 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php include 'footer.php' ?>
    <!-- Google Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/contact-2.html  22 Nov 2019 10:04:03 GMT -->
</html>