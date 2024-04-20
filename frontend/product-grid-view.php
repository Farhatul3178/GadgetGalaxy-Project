<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/schon/product-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:56:25 GMT -->
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
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
	<style>
		
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
										<a href="#" class="icon-heart cart-opener"></span></a>
										<!-- mt drop start here -->
										
										<span class="mt-mdropover"></span>
									</li>


									<li class="drop">
    <a href="#" class="cart-opener" onclick="toggleCart(event)">
        <span class="icon-handbag"></span>
        <span class="num"><p id="count">0</p></span>
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
			<!-- mt main start here -->
			<main id="mt-main">
				<!-- Mt Contact Banner of the Page -->
				<section class="mt-contact-banner style4" style="background-image: url(images/lastmodifiedb.png);">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								
							</div>
						</div>
					</div>
				</section><!-- Mt Contact Banner of the Page end -->
				<div class="container">
					<div class="row">
						<!-- sidebar of the Page start here -->
						<aside id="sidebar" class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
							<!-- shop-widget filter-widget of the Page start here -->
							<section class="shop-widget filter-widget bg-grey">
								<h2>FILTER</h2>
								<span class="sub-title">Filter by Brands</span>
								<!-- nice-form start here -->
								<ul class="list-unstyled nice-form">
									<li>
										<label for="check-1">
											<input id="check-1" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Apple</span>
										</label>
										<span class="num">2</span>
									</li>
									<li>
										<label for="check-2">
											<input id="check-2" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Sony</span>
										</label>
										<span class="num">12</span>
									</li>
									<li>
										<label for="check-3">
											<input id="check-3" checked="checked" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Xiaomi</span>
										</label>
										<span class="num">4</span>
									</li>
									<li>
										<label for="check-4">
											<input id="check-4" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Vivo</span>
										</label>
										<span class="num">4</span>
									</li>
									<li>
										<label for="check-5">
											<input id="check-5" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Vision</span>
										</label>
										<span class="num">6</span>
									</li>
									<li>
										<label for="check-6">
											<input id="check-6" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">ASUS</span>
										</label>
										<span class="num">10</span>
									</li>
									<li>
										<label for="check-7">
											<input id="check-7" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">DELL</span>
										</label>
										<span class="num">3</span>
									</li>
								</ul><!-- nice-form end here -->
								<span class="sub-title">Filter by Price</span>
								<div class="price-range">
									<div class="range-slider">
										<span class="dot"></span>
										<span class="dot dot2"></span>
									</div>
									<span class="price">Price &nbsp;   50TK &nbsp;  -  &nbsp;   1000TK</span>
									<a href="#" class="filter-btn">Filter</a>
								</div>
							</section><!-- shop-widget filter-widget of the Page end here -->
							<!-- shop-widget of the Page start here -->
							<section class="shop-widget">
								<h2>CATEGORIES</h2>
								<!-- category list start here -->
								<ul class="list-unstyled category-list">
									<li>
										<a href="#">
											<span class="name">LAPTOP</span>
											<span class="num">12</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">MOBILE PHONE</span>
											<span class="num">24</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">HEADPHONE</span>
											<span class="num">9</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">AIR CONDITIONER</span>
											<span class="num">2</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">MONITOR</span>
											<span class="num">17</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">KEYBROAD</span>
											<span class="num">10</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="name">MOUSE</span>
											<span class="num">23</span>
										</a>
									</li>
								</ul><!-- category list end here -->
							</section><!-- shop-widget of the Page end here -->
							<!-- shop-widget of the Page start here -->
							<section class="shop-widget">
								<h2>HOT SALE</h2>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.php"><img src="images/products/phone5.png" alt="image description"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Galaxy A23</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">22500</del>
										<span class="price">20500</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.php"><img src="images/products/headphone5.png" alt="image description"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.php">OnePlus Bullets Z2 Earphones</a></strong>
										</div>
										<del class="off">2650</del>
										<span class="price">2350</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.php"><img src="images/products/soundbox2.png" alt="image description"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.php">Doss DS1681 SoundBox</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">3150</del>
										<span class="price">2750</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.php"><img src="images/products/monitor1.jpg" alt="image description"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.php">Redmi Monitor 27"</a></strong>
										</div>
										<del class="off">20990</del>
										<span class="price">17990</span>
									</div>
								</div><!-- mt product4 end here -->
							</section><!-- shop-widget of the Page end here -->
						</aside><!-- sidebar of the Page end here -->
						<div class="col-xs-12 col-sm-8 col-md-9 wow fadeInRight" data-wow-delay="0.4s">
							<!-- mt shoplist header start here -->
							<header class="mt-shoplist-header">
								<!-- btn-box start here -->
								<div class="btn-box">
									<ul class="list-inline">
										<li>
											<a href="#" class="drop-link">
												Default Sorting <i aria-hidden="true" class="fa fa-angle-down"></i>
											</a>
											<div class="drop">
												<ul class="list-unstyled">
													<li><a href="#">ASC</a></li>
													<li><a href="#">DSC</a></li>
													<li><a href="#">Price</a></li>
													<li><a href="#">Relevance</a></li>
												</ul>
											</div>
										</li>
										<li><a class="mt-viewswitcher" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
										<li><a class="mt-viewswitcher" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
									</ul>
								</div><!-- btn-box end here -->
								<!-- mt-textbox start here -->
								<div class="mt-textbox">
									<p>Showing  <strong>1–9</strong> of  <strong>65</strong> results</p>
									<p>View   <a href="#">9</a> / <a href="#">18</a> / <a href="#">27</a> / <a href="#">All</a></p>
								</div><!-- mt-textbox end here -->
							</header><!-- mt shoplist header end here -->
							<!-- mt productlisthold start here -->
							<ul class="mt-productlisthold list-inline">
								<li>
								 <!-- mt product1 large start here -->
								 <div class="mt-product1 large">
                <div class="box">
                    <div class="b1">
                        <div class="b2">
                            <a href="product-detail.php"><img src="images/products/Xiaomi-Redmi-Watch.jpg" alt="image description"></a>
                            <ul class="mt-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <ul class="links">
                                <li><a href="#" onclick="addtocart(1)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                                <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                                <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="txt">
                    <strong class="title"><a href="product-detail.php">Xiaomi Redmi Watch 2 </a></strong>
                    <span class="price">&#2547;</span> <span>6000</span>
                </div>
            </div><!-- mt product1 center end here -->
								</li>
								<li>

								
									<div class="mt-product1 large">
    <div class="box">
        <div class="b1">
            <div class="b2">
                <a href="product-detail.php"><img src="images/products/Phone3.jpg" alt="image description"></a>
                <ul class="links">
				<li><a href="#" onclick="addtocart(2)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="txt">
        <strong class="title"><a href="product-detail.php">Xiaomi Redmi Note 10</a></strong>
        <span class="price">&#2547;</span> <span>18999</span>
    </div>
</div><!-- mt product1 center end here -->

								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/Xiaomi-Headphone.jpg" alt="image description"></a>
													<span class="caption">
														<span class="off">15% Off</span>
													</span>
													<ul class="links">
													<li><a href="#" onclick="addtocart(3)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi TDLYEJ01JY Bluetooth Headphone</a></strong>
											<span class="price">&#2547;</span> <span>5350</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/xiaomi_mouse.jpg" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" onclick="addtocart(4)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi Wireless Mouse Lite</a></strong>
											<span class="price">&#2547;</span> <span>1050</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/sb.png" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" onclick="addtocart(5)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi Mi Computer Speaker</a></strong>
											<span class="price">&#2547;</span> <span>3495</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/laptopx1.jpg" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" onclick="addtocart(6)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi Mi NoteBook Ultra Core i7 </a></strong>
											<span class="price">&#2547;</span> <span>97500</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/ipad2.png" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" onclick="addtocart(7)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi Mi Pad 5</a></strong>
											<span class="price">&#2547;</span> <span>4999</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/iron.jpg" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" onclick="addtocart(8)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">Xiaomi Lofans LCD Steam Iron</a></strong>
											<span class="price">&#2547;</span> <span>3495</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php"><img src="images/products/buds.PNG" alt="image description"></a>
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<ul class="links">
													<li><a href="#" class="add-to-cart-btn" data-product-id="1"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
													
														<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
														<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php">XIAOMI Redmi Buds 4 </a></strong>
											<span class="price">&#2547;</span> <span>19505</span>
										</div>
									</div><!-- mt product1 center end here -->
								</li>
							</ul><!-- mt productlisthold end here -->
							<!-- mt pagination start here -->
							<nav class="mt-pagination">
								<ul class="list-inline">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
								</ul>
							</nav><!-- mt pagination end here -->
						</div>
					</div>
				</div>
			</main><!-- mt main end here -->
			<!-- footer of the Page -->
			<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
				<!-- Footer Holder of the Page -->
				<div class="footer-holder dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<!-- F Widget About of the Page -->
								<div class="f-widget-about">
									<div class="logo">
										<a href="#"><img src="images/Finallogo-wb.png" alt="gadgetgalaxy"></a>
									</div>
									<p>GadgetGalaxy, your ultimate destination for cutting-edge tech and innovative gadgets! Step into a universe where the latest trends in technology converge with unparalleled convenience. At GadgetGalaxy, we're passionate about bringing you the most exciting gadgets that not only enhance your life but also spark your imagination.</p>
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
								<!-- F Widget About of the Page end -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<div class="f-widget-news">
									<h3 class="f-widget-heading">Twitter</h3>
									<div class="news-articles">
										<div class="news-column">
											<i class="fa fa-twitter"></i>
											<div class="txt-box">
												<p>Join us for exclusive updates, reviews, and insider insights into the world of technology.<a href="#">https://t.co/@GadgetGalaxyHQ</a></p>
											</div>
										</div>
										<div class="news-column">
											<i class="fa fa-twitter"></i>
											<div class="txt-box">
												<p>Dive into the galaxy of gadgets with us!<br><a href="#">https://t.co/@GalaxyGadgetHub</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
								<!-- Footer Tabs of the Page -->
								<div class="f-widget-tabs">
									<h3 class="f-widget-heading">Product Tags</h3>
									<ul class="list-unstyled tabs">
										<li><a href="#">Mobile</a></li>
										<li><a href="#">Laptop</a></li>
										<li><a href="#">Headphone</a></li>
										<li><a href="#">Monitor</a></li>
										<li><a href="#">SSD</a></li>
										<li><a href="#">watch</a></li>
										<li><a href="#">Air Conditioner</a></li>
										<li><a href="#">Air Cooler Fan</a></li>
										<li><a href="#">Microwave Oven</a></li>
										<li><a href="#">Keybroad</a></li>
										<li><a href="#">Mouse</a></li>
										<li><a href="#">Soundbox</a></li>
										<li><a href="#">Lens</a></li>
										<li><a href="#">Camera</a></li>
									</ul>
								</div>
								<!-- Footer Tabs of the Page -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 text-right">
								<!-- F Widget About of the Page -->
								<div class="f-widget-about">
									<h3 class="f-widget-heading">Information</h3>
									<ul class="list-unstyled address-list align-right">
										<li><i class="fa fa-map-marker"></i><address>28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka 1000</address></li>
										<li><i class="fa fa-phone"></i><a href="tel:15553332211">+(888) 01715678901</a></li>
										<li><i class="fa fa-envelope-o"></i><a href="mailto:info@gadgetgalaxy.com">info@gadgetgalaxy.com</a></li>

									</ul>
								</div>
								<!-- F Widget About of the Page end -->
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Holder of the Page end -->
				<!-- Footer Area of the Page -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p>© <a href="#">GadgetGalaxy</a> - All rights Reserved</p>
							</div>
							<div class="col-xs-12 col-sm-6 text-right">
								<div class="bank-card">
									<img src="images/paymentlogo.png" alt="bank-card">
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</footer><!-- footer of the Page end -->
		</div><!-- W1 end here -->
		<span id="back-top" class="fa fa-arrow-up"></span>
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
<script>

function toggleCart(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    var cartContainer = document.getElementById("cartContainer");
    cartContainer.classList.toggle("open");
}

// Function to add a product to the cart
function addtocart(productId) {
    // Simulate fetching product details based on productId
    var productDetails = getProductDetails(productId);

    // Check if productDetails is not null or undefined
    if (productDetails) {
        // Update the cart UI with the product details
        updateCartUI(productDetails);
    }
}

// Product details object containing productId as keys and product details as values
var products = {
    1: { name: "Xiaomi Redmi Watch 2", price: 6000 },
    2: { name: "Xiaomi Redmi Note 10", price: 18999 },
    3: { name: "Xiaomi TDLYEJ01JY Bluetooth Headphone", price: 5350 },
    4: { name: "Xiaomi Wireless Mouse Lite", price: 1050 },
    5: { name: "Xiaomi Mi Computer Speaker", price: 3495 },
    6: { name: "Xiaomi Mi NoteBook Ultra Core i7", price: 97500 },
    7: { name: "Xiaomi Mi Pad 5", price: 4999 },
    8: { name: "Xiaomi Lofans LCD Steam Iron", price: 3495 },
    9: { name: "XIAOMI Redmi Buds 4", price: 19505 },
    // Add more product details as needed
};

// Function to add a product to the cart
function addtocart(productId) {
    // Fetch product details based on productId
    var productDetails = getProductDetails(productId);

    // Check if productDetails is not null or undefined
    if (productDetails) {
        // Update the cart UI with the product details
        updateCartUI(productDetails);
    }
}

// Function to fetch product details based on productId
function getProductDetails(productId) {
    // Return product details if productId exists in the products object
    return products[productId];
}

// Function to update the cart UI with product details
function updateCartUI(productDetails) {
    // Get the cart container element
    var cartContainer = document.getElementById("cartItem");

    // Check if the cart container exists
    if (cartContainer) {
        // Create a new list item element
        var listItem = document.createElement("li");

        // Set the inner HTML of the list item with product details
        listItem.innerHTML = '<span class="productName">' + productDetails.name + '</span><span class="productPrice">&#2547; ' + productDetails.price + '</span>';

        // Append the new list item to the cart container
        cartContainer.appendChild(listItem);

        // Update the total price in the cart
        updateTotalPrice(productDetails.price);
    }
}

// Function to update the total price in the cart
function updateTotalPrice(productPrice) {
    // Get the total price element
    var totalPriceElement = document.getElementById("total");

    // Check if the total price element exists
    if (totalPriceElement) {
        // Get the current total price
        var currentTotal = parseFloat(totalPriceElement.innerText.replace("&#2547; ", ""));

        // Calculate the new total price by adding the product price
        var newTotal = currentTotal + productPrice;

        // Update the total price element with the new total
        totalPriceElement.innerHTML = "&#2547; " + newTotal.toFixed(2);
    }
}

// Function to update the cart UI with product details
function updateCartUI(productDetails) {
    // Get the cart container element
    var cartContainer = document.getElementById("cartItem");

    // Check if the cart container exists
    if (cartContainer) {
        // Remove the "Your cart is empty" message if it exists
        if (cartContainer.innerText.trim() === "Your cart is empty") {
            cartContainer.innerHTML = ""; // Clear the cart container
        }

        // Create a new list item element
        var listItem = document.createElement("li");

        // Set the inner HTML of the list item with product details
        listItem.innerHTML = '<span class="productName">' + productDetails.name + '</span><span class="productPrice">&#2547; ' + productDetails.price + '</span>';

        // Append the new list item to the cart container
        cartContainer.appendChild(listItem);

        // Update the total price in the cart
        updateTotalPrice(productDetails.price);

        // Update the count of items in the cart icon
        updateCartCount();
    }
}

// Function to update the count of items in the cart icon
function updateCartCount() {
    // Get the count element
    var countElement = document.getElementById("count");

    // Get the current count value
    var currentCount = parseInt(countElement.innerText);

    // Increment the count by 1
    currentCount++;

    // Update the count element with the new count value
    countElement.innerText = currentCount;
}
// Function to update the total price in the cart
function updateTotalPrice(price) {
    // Get the total element
    var totalElement = document.getElementById("total");

    // Get the current total value
    var currentTotal = parseFloat(totalElement.innerText.replace("Tk. ", ""));

    // If the currentTotal is NaN, set it to 0
    if (isNaN(currentTotal)) {
        currentTotal = 0;
    }

    // Add the price of the newly added product to the current total
    var newTotal = currentTotal + price;

    // Update the total element with the new total value
    totalElement.innerText = "Tk. " + newTotal.toFixed(2);
}

function buyNow() {
        window.location.href = "payment.php";
    }


</script>
</body>

<!-- Mirrored from htmlbeans.com/html/schon/product-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:56:26 GMT -->
</html>