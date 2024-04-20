<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Fetch user data from database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect to homepage
            header("Location: homepage1.php");
            exit();
        } else {
            // Password is incorrect, display error message
            $error_message = "Incorrect username or password.";
        }
    } else {
        // User not found, display error message
        $error_message = "Incorrect username or password.";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/schon/loginpage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:56:47 GMT -->
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
  <style>

.mt-detail-sec {
 
  margin-top: 50px; /* Adjust the value as needed */
}

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
   
  .mt-about-sec {
    padding-top: 50px; /* Adjust the value as needed */
  }

    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    h2 {
      text-align: center;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .input-group input:focus {
      outline: none;
      border-color: #007bff;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0056b3;
    }
    /* Custom CSS to remove blue color and adjust layout */
.btn {
  color: #fff; /* Set text color to white */
}


.btn-facebook, .btn-google {
  display: inline-block;
  margin-right: 10px; /* Adjust margin between buttons */
}

.btn-facebook {
  background-color: #3b5998; /* Facebook color */
}

.btn-google {
  background-color: #dd4b39; /* Google color */
}
.social-icons .social-icon {
  margin-right: 10px; /* Adjust the space between icons as needed */
}
.social-icons .social-icon.gmail-icon i {
  color: #D44638; /* Replace with your desired color code */
}
/* Custom CSS to center the login button and make it round */
.btn-login {
  width: 100px; /* Adjust the width as needed */
  border-radius: 20px; /* Half of the desired button height */
}

/* Centering the login button */
.centered-button {
  display: flex;
  justify-content: center;
}
/* Custom CSS to make input fields round */
.input-group input[type="text"],
.input-group input[type="password"] {
  border-radius: 20px; /* Adjust the roundness as needed */
}
/* Custom CSS for the heading */
.login-heading {
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif; 
}

  </style>
</head>
<body>
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
										<div class="mt-drop">
											<!-- mt drop sub start here -->
											<div class="mt-drop-sub">
												<!-- mt side widget start here -->
												<div class="mt-side-widget">
													
													
												</div><!-- mt side widget end here -->
											</div>
											<!-- mt drop sub end here -->
										</div><!-- mt drop end here -->
										<span class="mt-mdropover"></span>
									</li>
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
												
											</div>
											<!-- mt drop sub end here -->
										</div><!-- mt drop end here -->
										<span class="mt-mdropover"></span>
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
   <!-- Mt About Section of the Page -->
   <section class="mt-about-sec" style="padding-top: 50px; padding-bottom: 0;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="txt wow fadeInUp" data-wow-delay="0.4s">
          <h2>login</h2>
          <p>  </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-detail-sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-push-2">
        <div class="holder">
          <h2 class="login-heading"><b>Sign in to Account</b></h2>

          <form id="loginForm" action="#" method="post">
            <!-- Username Input Field -->
            <div class="input-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" required>
            </div>
            <!-- Password Input Field -->
            <div class="input-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required>
            </div>
            <!-- Login Button -->
            <div class="centered-button">
              <button type="submit" class="btn btn-primary rounded-pill btn-login" name="login_submit">Login</button>
            </div>
          </form>
          <!-- Error Message -->
          <p id="error-message" class="text-danger"><?php if (isset($error_message)) echo $error_message; ?></p>

          <!-- Additional options -->
          <div class="additional-options">
            <p>Forgot your password? <a href="forgot_password.php"><u><b>Reset it here</b></u></a></p>
            <p>Don't have an account? <a href="registerpage.php"><u><b>Sign up now</b></u></a></p>
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

