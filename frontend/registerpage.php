<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into database
    $sql = "INSERT INTO users (first_name, last_name, username, email, phone, address, password)
            VALUES ('$first_name', '$last_name', '$username', '$email', '$phone', '$address', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful registration
        header("Location: loginpage.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/schon/registerpage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:56:47 GMT -->
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-ZFgo8Z2ae0Pvo4Pv2Nb13PeYJJ5QByrjXboH3ATphcqbV2czc+8VQuFYX3ZLq2gM" crossorigin="anonymous">

<style>.custom-placeholder::placeholder {
  color: white; /* Change placeholder color here */
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
                  <li><a href="#" class="icon-heart"></a></li>
                  <li class="drop">
                    <a href="#" class="cart-opener">
                      <span class="icon-handbag"></span>
                    
                    </a>
                    <!-- mt drop start here -->
                    <div class="mt-drop">
                      <!-- mt drop sub start here -->
                      <div class="mt-drop-sub">
                        <!-- mt side widget start here -->
                        <div class="mt-side-widget">
                         
                        <!-- mt side widget end here -->
                      </div>
                      <!-- mt drop sub end here -->
                    </div>
                    <!-- mt drop end here -->
                    <span class="mt-mdropover"></span>
                  </li>
                </ul>
                <!-- mt icon list end here -->
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
    
        <!-- Mt About Section of the Page -->
        <section class="mt-about-sec" style="padding-bottom: 0;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
              <div class="txt wow fadeInUp" data-wow-delay="0.4s" style="text-align: center;">
    <h2>Register for our Great Service!</h2>
</div>

              </div>
            </div>
          </div>
        </section>
        <!-- Mt About Section of the Page -->
        <!-- Mt Detail Section of the Page -->
        <section class="mt-detail-sec toppadding-zero">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-push-1">
              <div class="holder" style="margin: 0;">
                  <div class="mt-side-widget">
                      <header>
                          <h2 style="margin: 0 0 5px;">Register To  GadgetGalaxy</h2>
                      </header>
                 
                      <form action="registerpage.php" method="post" style="margin: 0 0 80px;">
    <fieldset>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="first_name" placeholder="First Name" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="last_name" placeholder="Last Name" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="username" placeholder="Username" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="email" name="email" placeholder="Your Email" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="phone" placeholder="Your Phone" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
            <div class="col-xs-12 col-sm-6">
                <textarea name="address" placeholder="Address" class="input custom-placeholder" style="color: blue; font-size: 18px;"></textarea>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-6">
                <input type="password" name="password" placeholder="Password" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="password" name="password_confirmation" placeholder="Re-type Password" class="input custom-placeholder" style="color: blue; font-size: 18px;">
            </div>
           
        </div>
        <div class="box">
                                  <a href="#" class="help">Help?</a>
                              </div>
                             
                              <button type="submit" class="btn-type1">Register Me</button>
    </fieldset>
</form>

                      <div class="social-register">
                          <header>
                              <h2 style="margin: 20px 0 5px;">Register with Social</h2>
                              <p>Create an account using social below here</p>
                          </header>
                          <div class="social-icons">
    <a href="https://www.facebook.com" style="display: inline-block; vertical-align: middle; margin-right: 10px;"><img src="images/fb-wb.png" alt="Facebook" style="width: 25px; height: 25px;"></a>
    <a href=" https://ail.google.com" style="display: inline-block; vertical-align: middle; margin-right: 10px;"><img src="images/gmail (2).png" alt="Google" style="width: 20px; height: 20px;"></a>
    <a href=" https://www.google.com" style="display: inline-block; vertical-align: middle;"><img src="images/g-wb.png" alt="Email" style="width: 25px; height: 25px;"></a>
</div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
        
        
      
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
                 <p> GadgetGalaxy, your ultimate destination for cutting-edge tech and innovative gadgets! Step into a universe where the latest trends in technology converge with unparalleled convenience. At GadgetGalaxy, we're passionate about bringing you the most exciting gadgets that not only enhance your life but also spark your imagination.</p>
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