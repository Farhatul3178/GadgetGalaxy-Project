<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/schon/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:56:50 GMT -->
<head>
  <!-- set the encoding of your site -->
  <meta charset="utf-8">
  <!-- set the viewport width and initial-scale on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GADGET GALAXY E-COMMERCE</title>
  <!-- include the site stylesheet -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="css/icon-fonts.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="css/main.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="css/responsive.css">
  <style>

p {
    text-align: justify;
  }
  .sidebar {
    position: fixed;
    top: 50px; /* Adjust top position as needed */
    right: -200px; /* Adjust the value to control initial sidebar position */
    width: 200px; /* Adjust the width as needed */
    height: calc(100% - 50px); /* Adjust the height as needed */
    background-color: #f4f4f4; /* Adjust background color */
    transition: right 0.3s ease; /* Add smooth transition effect */
    z-index: 999; /* Ensure the sidebar stays on top of other content */
    border-left: 1px solid #ccc; /* Add border for separation */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
}

.sidebar.open {
    right: 0; /* Show sidebar when it's open */
}

.content {
    padding: 20px;
}

.head {
    background-color: #ccc; /* Adjust header background color */
    padding: 10px;
    text-align: center;
}

.head p {
    margin: 0;
}

.foot {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #ddd; /* Adjust footer background color */
    padding: 10px;
}

  </style>
</head>
<body>
<!-- main container of all the page elements -->
<div id="wrapper">
		<!-- Page Loader -->
		<div id="pre-loader" class="loader-container">
			<div class="loader">
				<img src="images/svg/rings.svg" alt="loader">
			</div>
		</div>
		<!-- W1 start here -->
		<div class="w1">
			<!-- mt header style4 start here -->
			<header id="mt-header" class="style4">
				<!-- mt bottom bar start here -->
				<div class="mt-bottom-bar">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<!-- mt logo start here -->
								<div class="mt-logo"><a href="#"><img src="images/Finallogo.png" alt="gadgetgalaxy"style="width: 150px; height: auto;"></a></div>
								<!-- mt icon list start here -->
								<ul class="mt-icon-list">
									<li class="hidden-lg hidden-md">
										<a href="#" class="bar-opener mobile-toggle">
											<span class="bar"></span>
											<span class="bar small"></span>
											<span class="bar"></span>
										</a>
									</li>
									<li><a href="#" class="icon-magnifier"></a></li>
									<li class="drop">
                  <a href="#" class="icon-heart cart-opener"></a>
										<!-- mt drop start here -->
										
										<span class="mt-mdropover"></span>
									</li>


									<li class="drop">
    <a href="#" class="cart-opener" onclick="toggleCart(event)">
        <span class="icon-handbag"></span>
    
    </a>
    <div class="sidebar" id="cartContainer">
        <div id="root"></div>
        <div class="content">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
                <!-- Add Buy Now button -->
                <button onclick="buyNow()">Buy Now</button>
            </div>
        </div>
    </div>
</li>



									<li>
                                    <a href="loginpage.php" class="bar-opener">
											<span class="bar"></span>
											<span class="bar small"></span>
											<span class="bar"></span>
										</a>
									</li>
								</ul><!-- mt icon list end here -->
								<!-- navigation start here -->
								<nav id="nav">
									<ul>
										<li>
											<a href="homepage1.php">HOME <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="product-grid-view.php">PRODUCTS <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
										</li>
										
										
										
										<li><a href="about-us.php">About</a></li>
										<li>
											<a  href="contact-us.php">Contact <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
											
										</li>
									</ul>
								</nav>
								<!-- mt icon list end here -->
							</div>
						</div>
					</div>
				</div>
				<!-- mt bottom bar end here -->
				<span class="mt-side-over"></span>
			</header><!-- mt header style4 end here -->
			
			<!-- mt search popup start here -->
			<div class="mt-search-popup">
				<div class="mt-holder">
					<a href="#" class="search-close"><span></span><span></span></a>
					<div class="mt-frame">
						<form action="#">
							<fieldset>
								<input type="text" placeholder="Search...">
								<span class="icon-microphone"></span>
								<button class="icon-magnifier" type="submit"></button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- mt search popup end here -->
      <!-- Main of the Page -->
      <main id="mt-main">
        <!-- Mt Content Banner of the Page -->
        <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(images/a.png);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
             
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Content Banner of the Page end -->
        <!-- Mt About Section of the Page -->
        <section class="mt-about-sec">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="txt wow fadeInUp" data-wow-delay="0.4s">
                  <h2>WHO WE ARE?</h2>
                  <p>We are GadgetGalaxy, your one-stop destination for all things tech and innovation! At GadgetGalaxy, we're passionate about bringing you the latest gadgets, electronics, and accessories to enhance your digital lifestyle.Whether you're a tech enthusiast, a casual user, or someone looking for the perfect gift, we've got you covered. With a curated selection of top-notch products, unbeatable prices, and excellent customer service, we strive to make your shopping experience with us seamless and enjoyable. Join us in exploring the endless possibilities of the tech universe at GadgetGalaxy</p>
                </div>
                <div class="mt-follow-holder">
                  <span class="title">Follow Us</span>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt About Section of the Page -->
        <!-- Mt Team Section of the Page -->
        <section class="mt-team-sec">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h3>OUR TEAM</h3>
                <div class="holder">
                  <!-- col of the Page -->
                  <div class="col wow fadeInUp" data-wow-delay="0.4s">
                    <div class="img-holder">
                      <a href="#">
                        <img src="images/girl2.png" alt="CLARA WOODEN">
                        <ul class="list-unstyled social-icon">
                          <li><i class="fa fa-twitter"></i></li>
                          <li><i class="fa fa-facebook"></i></li>
                          <li><i class="fa fa-linkedin"></i></li>
                        </ul>
                      </a>
                    </div>
                    <div class="mt-txt">
                      <h4><a href="#">Ismotara Dipty</a></h4>
                     
                    </div>
                  </div>
                  <!-- col of the Page end -->
                  <!-- col of the Page -->
                  <div class="col wow fadeInUp" data-wow-delay="0.6s">
                    <div class="img-holder">
                      <a href="#">
                        <img src="images/boy3.png" alt="JOHN WICK">
                        <ul class="list-unstyled social-icon">
                          <li><i class="fa fa-twitter"></i></li>
                          <li><i class="fa fa-facebook"></i></li>
                          <li><i class="fa fa-linkedin"></i></li>
                        </ul>
                      </a>
                    </div>
                    <div class="mt-txt">
                      <h4><a href="#">Md.Farhatul Haider</a></h4>
                    
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt About Section of the Page -->
        <!-- Mt Workspace Section of the Page -->
        <section class="mt-workspace-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h2>OUR WORKSPACE</h2>
              </div>
            </div>
          </div>
          <!-- Work Slider of the Page -->
          <ul class="list-unstyled work-slider">
            <li>
              <div class="img-holder">
                <img src="images/f5.jpg" alt="image description">
              </div>
              <div class="img-holder">
                <div class="coll1">
                  <img src="images/f2.jpg" alt="image description">
                </div>
                <div class="coll2">
                  <img src="images/f3.jpg" alt="image description">
                </div>
                <div class="coll3">
                  <img src="images/f4.jpg" alt="image description">
                </div>
              </div>
            </li>
            <li>
              <div class="img-holder">
                <img src="images/f2.jpg" alt="image description">
              </div>
              <div class="img-holder">
                <div class="coll1">
                  <img src="images/f3.jpg" alt="image description">
                </div>
                <div class="coll2">
                  <img src="images/f4.jpg" alt="image description">
                </div>
                <div class="coll3">
                  <img src="images/f5.jpg" alt="image description">
                </div>
              </div>
            </li>
            <li>
              <div class="img-holder">
                <img src="images/f3.jpg" alt="image description">
              </div>
              <div class="img-holder">
                <div class="coll1">
                  <img src="images/f4.jpg" alt="image description">
                </div>
                <div class="coll2">
                  <img src="images/f5.jpg" alt="image description">
                </div>
                <div class="coll3">
                  <img src="images/f2.jpg" alt="image description">
                </div>
              </div>
            </li>
          </ul>
          <!-- Work Slider of the Page end -->
        </section>
        <!-- Mt Workspace Section of the Page -->
      </main><!-- Main of the Page end -->
      <!-- footer of the Page -->
       <!-- footer of the Page -->
       <footer id="mt-footer" class="style7 wow fadeInUp" data-wow-delay="0.4s">
        <div class="footer-holder bg-grey">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4 mt-paddingbottomsm">
                <!-- F Widget About of the Page -->
                <div class="f-widget-about">
                  <div class="logo">
                    <a href="homepage1.php"><img src="images/Finallogo-wb.png" alt="GG"></a>
                  </div>
                 <p style="font-style:Justify;"> GadgetGalaxy, your ultimate destination for cutting-edge tech and innovative gadgets! Step into a universe where the latest trends in technology converge with unparalleled convenience. At GadgetGalaxy, we're passionate about bringing you the most exciting gadgets that not only enhance your life but also spark your imagination.</p>
                  <ul class="list-unstyled address-list">
                  <li><i class="fa fa-map-marker"></i><address>28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka 1000</address></li>
										<li><i class="fa fa-phone"></i><a href="tel:15553332211">+(888) 01715678901</a></li>
										<li><i class="fa fa-envelope-o"></i><a href="mailto:info@gadgetgalaxy.com">info@gadgetgalaxy.com</a></li>

                  </ul>
                </div>
                <!-- F Widget About of the Page end -->
              </div>
              <nav class="col-xs-12 col-sm-8 col-md-5 mt-paddingbottomsm">
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">Categories</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Headphone</a></li>
                    <li><a href="#">Keybroad</a></li>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Air Conditioner</a></li>
                    <li><a href="#">Mobile Phone</a></li>
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">Information</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">Account</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="#">My Account</a></li>
                    <li><a href="ordertracking.php">Order Tracking</a></li>
                    <li><a href="wishlist.php">Wish List</a></li>
                    <li><a href="order-shopping-cart.php">Shopping Cart</a></li>
                    <li><a href="order-checkout.php">Checkout</a></li>
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
              </nav>
              <div class="col-xs-12 col-md-3 text-right hidden-sm">
                <!-- F Widget Newsletter of the Page -->
                <div class="f-widget-newsletter">
                  <h3 class="f-widget-heading">JOIN OUR CONTEST</h3>
                  <p>Join now to get 15% off <br>on any product</p>
                  <div class="holder">
                    <!-- Newsletter Form of the Page -->
                    <form action="#" class="newsletter-form">
                      <fieldset>
                        <input type="email" placeholder="Your Email" class="form-control">
                        <button type="submit"><i class="fa fa-angle-right"></i></button>
                      </fieldset>
                    </form>
                    <!-- Newsletter Form of the Page end -->
                  </div>
                  <h4 class="f-widget-heading follow">Follow Us</h4>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
                <!-- F Widget Newsletter of the Page end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Area of the Page -->
        <div class="footer-area">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <p>© <a href="homepage1.php">GadgetGalaxy</a> - All rights Reserved</p>
              </div>
              <div class="col-xs-12 col-sm-6 text-right">
                <div class="bank-card-2">
                <img src="images/paymentlogo.png" alt="bank-card">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Area of the Page end -->
      </footer><!-- footer of the Page end -->
    </div>
    <span id="back-top" class="fa fa-arrow-up"></span>
  </div>
  <!-- include jQuery -->
  <script src="js/jquery.js"></script>
  <!-- include jQuery -->
  <script src="js/plugins.js"></script>
  <!-- include jQuery -->
  <script src="js/jquery.main.js"></script>
 

</body>


</html>