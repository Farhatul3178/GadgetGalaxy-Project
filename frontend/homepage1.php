<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/schon/homepage1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 13:55:49 GMT -->
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
                <h2 id="total"> 0.00</h2>
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
			<!-- mt main slider start here -->
			<div class="mt-main-slider">
				<!-- slider banner-slider start here -->
				<div class="slider banner-slider">
					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(images/sliders/banner1.png);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text centerize">
										
										<h2>Explore the Infinite Universe of Gadgets at GadgetGalaxy</h2>
										<div class="txt">
											<p>Where Innovation Meets Infinity</p>
										</div>
										<a href="product-grid-view.php" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->

					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(images/sliders/banner2.png);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text right">
										<strong class="title">Explore the Infinite Universe of Gadgets at GadgetGalaxy</strong>
										<h1>ASUS ProArt Studiobook </h1>
										<h2>Pro 17</h2>
										<div class="txt">
											
										</div>
										<a href="product-detail.php" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->
					
					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(images/sliders/banner3.png);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text">
										<strong class="title">Explore the Infinite Universe of Gadgets at GadgetGalaxy</strong>
										<h1>iPhone 14</h1>
										
										<div class="txt">
											
										</div>
										<a href="product-detail.html" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->
				</div>
				<!-- slider regular end here -->
			</div><!-- mt main slider end here -->
			<!-- mt main start here -->
			<main id="mt-main">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- banner frame start here -->
							<div class="banner-frame">
								<!-- banner-1 start here -->
								<div class="banner-1 wow fadeInLeft" data-wow-delay="0.4s">
									<img alt="image description" src="images/banner/image002.png">
									<div class="holder">
										<h2 style="font-size: 30px;">HP Spectre x360 (14”)</h2>
										<div class="txts">
											<a class="btn-shop" href="product-detail.php">
												<span>shop now</span>
												<i class="fa fa-angle-right"></i>
											</a>
											<div class="discount">
												<span>-20%</span>
											</div>
										</div>
									</div>
								</div>
								<!-- banner-1 end here -->

								<!-- banner-box first start here -->
								<div class="banner-box first">
									<!-- banner-2 start here -->
									<div class="banner-2 wow fadeInUp" data-wow-delay="0.4s">
										<img alt="image description" src="images/banner/image001.png">
										<div class="holder">
											<h2>iPhone 13 Pro</h2>
											<span class="price">TK <b>.</b> 118000</span>
											<a class="btn-shop" href="product-detail.html">
												<span>shop now</span>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</div>
									<!-- banner-2 end here -->

									<!-- banner-3 start here -->
									<div class="banner-3 right wow fadeInDown" data-wow-delay="0.4s">
										<img alt="image description" src="images/banner/image003.png">
										<div class="holder">
											<h2>Mibro Lite 2 BT Calling Watch</h2> <br> <br>
											<span class="price">TK <b>.</b> 5999</span>
											<a href="product-detail.html" class="shop">SHOP NOW</a>
										</div>
									</div>
									<!-- banner-3 end here -->
								</div>
								<!-- banner-box first end here -->

								<!-- banner-4 start here -->
								<div class="banner-4 hidden-sm wow fadeInRight" data-wow-delay="0.4s">
									<img alt="image description" src="images/banner/image004.png">
									<div class="holder">
										<h2>Telephoto Lenses for Smart Phones</h2>
										<span class="price">TK <b>.</b> 2500</span>
										<a class="btn-shop add" href="product-detail.html">
											<span>shop now</span>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div>
								<!-- banner-4 end here -->
							</div>
							<!-- banner frame end here -->
							<!-- mt producttabs start here -->
							<div class="mt-producttabs wow fadeInUp" data-wow-delay="0.4s">
								<!-- producttabs start here -->
								<ul class="producttabs">
									<li><a href="#tab1" class="active">FEATURED</a></li>
									<li><a href="#tab2">LATEST</a></li>
									<li><a href="#tab3">BEST SELLER</a></li>
								</ul>
								<!-- producttabs end here -->
								<div class="tab-content text-center">
									<div id="tab1">
										<!-- tabs slider start here -->
										<div class="tabs-slider">
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="images/products/product1.png" alt="image description"></a>
																<span class="caption">
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																<li><a href="#" onclick="addtocart(11)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Vivo Y17</a></strong>
														<span class="price">&#2547;</span> <span>14,499</span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.php"><img src="images/products/headphone1.png" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																<li><a href="#" onclick="addtocart(12)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.php">AULA S505 Wired Gaming Headphone</a></strong>
														<span class="price">&#2547;</span> <span>1550</span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/watch1.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(13)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Mi Smart Band 7</a></strong>
															<span class="price">&#2547;</span> <span>4500</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/fan2.jfif" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(14)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Dreo Smart 9" Air Circulator Fan</a></strong>
															<span class="price">&#2547;</span> <span>8,000</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/keybroad2.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(15)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">7KEYS Wireless Keyboard and Mouse Gaming Combo</a></strong>
															<span class="price">&#2547;</span> <span>2500</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/airbuts1.jpeg" alt="image description"></a>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(16)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Lenovo HT18 True Wireless Earbuds</a></strong>
															<span class="price">&#2547;</span> <span>800</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/monitor1.jpg" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																		<span class="new">NEW</span>
																	</span>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(17)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Univision LED350 22" AH FHD Monitor</a></strong>
															<span class="price">&#2547;</span> <span>7800</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/laptop1.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(18)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">ASUS D415DA Ryzen 3 3250U 14-inch HD Laptop</a></strong>
															<span class="price">&#2547;</span> <span>46,000</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/mouse1.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(19)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Glorious Model O- Wired Gaming Mouse</a></strong>
															<span class="price">&#2547;</span> <span>3500</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/phone2.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(20)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Infinix Smart 7HD</a></strong>
															<span class="price">&#2547;</span> <span>13000</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/ssd1.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(21)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Adata SU650 240GB M.2 SATA SSD</a></strong>
															<span class="price">&#2547;</span> <span>1750</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/lens1.jpg" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(22)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Canon EF 50mm f/1.8 STM Lens</a></strong>
															<span class="price">&#2547;</span> <span>15500</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
											</div>
											<!-- tabs slider end here -->
										</div>
										<div id="tab2">
											<!-- tabs slider start here -->
											<div class="tabs-slider">
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/Phone3.jpg" alt="image description"></a>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(23)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
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
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/laptop3.png" alt="image description"></a>
																	<span class="caption">
																		<span class="new">NEW</span>
																	</span>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(24)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Apple MacBook Air 13.3 </a></strong>
															<span class="price">&#2547;</span> <span>113930</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/airbuds2.png" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(25)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">
																Apple AirPods 3rd generation </a></strong>
															<span class="price">&#2547;</span> <span>22800</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/watch2.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(26)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Apple Watch Series 9 Smart Watch</a></strong>
															<span class="price">&#2547;</span> <span>59000</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/oven1.png" alt="image description"></a>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(27)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">VISION G25 Microwave Oven 25Ltr Smart
															</a></strong>
															<span class="price">&#2547;</span> <span>13990</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/Ac1.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(28)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">ELITE EHS-12CRN Air Conditioner</a></strong>
															<span class="price">&#2547;</span> <span>35000</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/headphone2.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(29)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Havit H654U Headphone </a></strong>
															<span class="price">&#2547;</span> <span>1875</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/fan3.jfif" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																		<span class="new">NEW</span>
																	</span>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(30)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Baseus Flyer Turbine Handheld Fan</a></strong>
															<span class="price">&#2547;</span> <span>1750</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/aircooler1.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(31)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">
																Kenstar KCB-18W3H-CFR Air Cooler
															</a></strong>
															<span class="price">&#2547;</span> <span>10900</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/camera1.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(32)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.html">Canon EOS 1500D 24.1MP Camera</a></strong>
															<span class="price">&#2547;</span> <span>34400</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/keybraod3.jfif" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(33)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.html">TKL Mechanical Keyboard</a></strong>
															<span class="price">&#2547;</span> <span>7500</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.html"><img src="images/products/mouse2.jpeg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(34)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.html">Logitech B100 Optical USB Mouse</a></strong>
																<span class="price">&#2547;</span> <span>500</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
											</div>
											<!-- tabs slider end here -->
										</div>
										<div id="tab3">
											<!-- tabs slider start here -->
											<div class="tabs-slider">
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/headphone3.png" alt="image description"></a>
																	<span class="caption">
																		<span class="new">NEW</span>
																	</span>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(35)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Sony WH-CH520, Wireless Headphones</a></strong>
															<span class="price">&#2547;</span> <span>7790</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/phone4.jpeg" alt="image description"></a>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(36)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.html">Vivo Y22</a></strong>
															<span class="price">&#2547;</span> <span>20999</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/monitor2.jpg" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(37)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">MSI G32CQ5P 31.5 Gamming Monitor</a></strong>
															<span class="price">&#2547;</span> <span>42300</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/lens2.png" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(38)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Sony FE 50mm Full Frame Lens</a></strong>
															<span class="price">&#2547;</span> <span>30000</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/phone5.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(39)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Samsung Galaxy A54 </a></strong>
															<span class="price">&#2547;</span> <span>36000</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/airbuds3.png" alt="image description"></a>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(40)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Audionic Airbud 500 </a></strong>
															<span class="price">&#2547;</span> <span>3899</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/mouse3.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(41)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Logitech G402 Hyperion Fury Mouse</a></strong>
															<span class="price">&#2547;</span> <span>3000</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/keybroad3.jpg" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																		<span class="new">NEW</span>
																	</span>
																	<ul class="mt-stars">
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star-o"></i></li>
																	</ul>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(42)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">ROYAL KLUDGE RK G68 Mechanical Gaming</a></strong>
															<span class="price">&#2547;</span> <span>4399</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/oven2.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(43)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">39L LG Smart Microwave Oven</a></strong>
															<span class="price">&#2547;</span> <span>54900</span>
														</div>
													</div><!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/headphone4.jpg" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(44)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">OnePlus Bullets Wireless Headphone</a></strong>
															<span class="price">&#2547;</span> <span>1190</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
												<!-- slide start here -->
												<div class="slide">
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/laptop4.jpg" alt="image description"></a>
																	<span class="caption">
																		<span class="off">15% Off</span>
																	</span>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(45)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.php">Lenovo 15.6" IdeaPad Slim 3 Notebook</a></strong>
															<span class="price">&#2547;</span> <span>83500</span>
														</div>
													</div>
													<!-- mt product1 center end here -->
													<!-- mt product1 center start here -->
													<div class="mt-product1 mt-paddingbottom20">
														<div class="box">
															<div class="b1">
																<div class="b2">
																	<a href="product-detail.php"><img src="images/products/Soundbox.PNG" alt="image description"></a>
																	<ul class="links">
																	<li><a href="#" onclick="addtocart(46)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="txt">
															<strong class="title"><a href="product-detail.html">Doss Audio Sound Box</a></strong>
															<span class="price">&#2547;</span> <span>9899</span>
														</div>
													</div><!-- mt product1 center end here -->
												</div>
												<!-- slide end here -->
											</div>
											<!-- tabs slider end here -->
										</div>
									</div>
								</div>
								<!-- mt producttabs end here -->
							</div>
						</div>
					</div>
				
				<!-- mt bestseller start here -->
				<div class="mt-bestseller bg-grey text-center wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 mt-heading text-uppercase">
								<h2 class="heading">BEST SELLER</h2>
								
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="bestseller-slider">
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/phone5-wb.png" alt="image description"></a>
														<span class="caption">
															<span class="best-price">Best Price</span>
														</span>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(39)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Samsung Galaxy A54</a></strong>
												<span class="price">&#2547;</span> <span>36000</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/Soundbox-wb.png" alt="image description"></a>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(46)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Doss Audio Sound Box</a></strong>
												<span class="price">&#2547;</span> <span>9899</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/headphone-wb.png" alt="image description"></a>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(49)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.php">Wireless headphones BO12</a></strong>
												<span class="price">&#2547;</span> <span>1490</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/monitor2-wb.png" alt="image description"></a>
														<span class="caption">
															<span class="best-price">Best Price</span>
														</span>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(50)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.php">MSI G32CQ5P 31.5 Gamming Monitor</a></strong>
												<span class="price">&#2547;</span> <span>42300</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/oven2-wb.png" alt="image description"></a>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(43)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.php">39L LG Smart Microwave Oven</a></strong>
												<span class="price">&#2547;</span> <span>54900</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.php"><img src="images/products/laptop4-wb.png" alt="image description"></a>
														<span class="caption">
															<span class="off">15% Off</span>
														</span>
														<ul class="links add">
														<li><a href="#" onclick="addtocart(45)"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
                        <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                        <li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.php">Lenovo 15.6" IdeaPad Slim 3 Notebook</a></strong>
												<span class="price">&#2547;</span> <span>83500</span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mt bestseller start here -->
				<div class="mt-smallproducts">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm wow fadeInLeft" data-wow-delay="0.4s">
								<h3 class="heading">Hot Sale</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/phone5.png"></a>
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
										<a href="product-detail.html"><img alt="image description" src="images/products/headphone5.png"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">OnePlus Bullets Z2 Earphones</a></strong>
										</div>
										<del class="off">2650</del>
										<span class="price">2350</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/soundbox2.png"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Doss DS1681 SoundBox</a></strong>
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
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm wow fadeInLeft" data-wow-delay="0.4s">
								<h3 class="heading">Featured Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/monitor1.jpg"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Redmi Monitor 27"</a></strong>
										</div>
										<del class="off">20990</del>
										<span class="price">17990</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/mouse4.PNG"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Microsoft Bluetooth Mouse</a></strong>
										</div>
										<del class="off">3300</del>
										<span class="price">2500</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/laptop5.jpeg"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">HP Stream 14 Laptop</a></strong>
										</div>
										<del class="off">32450</del>
										<span class="price">28450</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs wow fadeInRight" data-wow-delay="0.4s">
								<h3 class="heading">Sale Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/mobile1.jpg"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Samsung Galaxy S22 5G</a></strong>
										</div>
										<del class="off">65000</del>
										<span class="price">56000</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/oven3.PNG"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Samsung CE76JD-M 21 Microwave Oven</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">21990</del>
										<span class="price">18990</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/watch3.jpg"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">D20 Smart Watches Waterproof</a></strong>
										</div>
										<del class="off">2000</del>
										<span class="price">1250</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="0.4s">
								<h3 class="heading">Top Rated Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/coller1.png"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Portable Mini Water Air Cooler Table Fan </a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$7000</del>
										<span class="price">$5000</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/headphone6.jpg"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Sony WH-1000XM4 Wireless Headphones</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">36500</del>
										<span class="price">32000</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="images/products/iphone1.PNG"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">iPhone 15 Pro</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">138000</del>
										<span class="price">132000</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
						</div>
					</div>
				</div><!-- mt bestseller end here -->
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
				<!-- Footer Area of the Page end -->
			</footer><!-- footer of the Page end -->
		</div><!-- W1 end here -->
		<span id="back-top" class="fa fa-arrow-up"></span>
	</div>
	<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">NEWSLETTER</a>
	<!-- Popup Holder of the Page -->
	<div class="popup-holder">
		<!-- Popup of the Page -->
		<div id="popup1" class="lightbox">
			<!-- Mt Product Detial of the Page -->
			<section class="mt-product-detial">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Slider of the Page -->
							<div class="slider">
								<!-- Comment List of the Page -->
								<ul class="list-unstyled comment-list">
									<li><a href="#"><i class="fa fa-heart"></i>27</a></li>
									<li><a href="#"><i class="fa fa-comments"></i>12</a></li>
									<li><a href="#"><i class="fa fa-share-alt"></i>14</a></li>
								</ul><!-- Comment List of the Page end -->
								<!-- Product Slider of the Page -->
								<div class="product-slider">
									<div class="slide">
										<img src="images/img03.jpg" alt="image descrption">
									</div>
									<div class="slide">
										<img src="images/img03.jpg" alt="image descrption">
									</div>
									<div class="slide">
										<img src="images/img03.jpg" alt="image descrption">
									</div>
									<div class="slide">
										<img src="images/img03.jpg" alt="image descrption">
									</div>
								</div><!-- Product Slider of the Page end -->
								<!-- Pagg Slider of the Page -->
								<ul class="list-unstyled slick-slider pagg-slider">
									<li><img src="images/img03.jpg" alt="image description"></li>
									<li><img src="images/img03.jpg" alt="image description"></li>
									<li><img src="images/img03.jpg" alt="image description"></li>
									<li><img src="images/img03.jpg" alt="image description"></li>
									<li><img src="images/img03.jpg" alt="image description"></li>
									<li><img src="images/img03.jpg" alt="image description"></li>
								</ul><!-- Pagg Slider of the Page end -->
							</div><!-- Slider of the Page end -->
							<!-- Detail Holder of the Page -->
							<div class="detial-holder">
								<!-- Breadcrumbs of the Page -->
								<ul class="list-unstyled breadcrumbs">
									<li><a href="#">Chairs <i class="fa fa-angle-right"></i></a></li>
									<li>Products</li>
								</ul>
								<!-- Breadcrumbs of the Page end -->
								<h2>KAILA FABRIC CHAIR</h2>
								<!-- Rank Rating of the Page -->
								<div class="rank-rating">
									<ul class="list-unstyled rating-list">
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<span class="total-price">Reviews (12)</span>
								</div><!-- Rank Rating of the Page end -->
								<ul class="list-unstyled list">
									<li><a href="#"><i class="fa fa-share-alt"></i>SHARE</a></li>
									<li><a href="#"><i class="fa fa-exchange"></i>COMPARE</a></li>
									<li><a href="#"><i class="fa fa-heart"></i>ADD TO WISHLIST</a></li>
								</ul>
								<div class="txt-wrap">
									
								<div class="text-holder">
									<span class="price">$ 79.00 <del>399,00</del></span>
								</div><!-- Product Form of the Page -->
								<form action="#" class="product-form">
									<fieldset>
										<div class="row-val">
											<label for="qty">qty</label>
											<select id="clr">
												<option>1</option>
											</select>
										</div>
										<div class="row-val">
											<button type="submit">ADD TO CART</button>
										</div>
									</fieldset>
								</form><!-- Product Form of the Page end -->
							</div><!-- Detail Holder of the Page end -->
						</div>
					</div>
				</div>
			</section><!-- Mt Product Detial of the Page end -->
		</div><!-- Popup of the Page end -->
		<!-- Popup of the Page -->
		<!-- Popup of the Page -->
		<div id="popup2" class="lightbox">
			<!-- Mt Newsletter Popup of the Page -->
			<section class="mt-newsletter-popup">
				<span class="title">Contest</span>
				<div class="holder">
					<div class="txt-holder">
						<h1>JOIN OUR CONTEST </h1>
						<span class="txt">Join now to get <b>15%</b> off on any product!</span>
						<!-- Newsletter Form of the Page -->
						<form action="#" class="newsletter-form">
							<fieldset>
								<input type="email" class="form-control" placeholder="Enter your e-mail">
								<button type="submit">JOIN</button>
							</fieldset>
						</form><!-- Newsletter Form of the Page -->
					</div>
					<div class="img-holder">
						<img src="images/popup.png" alt="image description">
					</div>
				</div><!-- Popup Form of the Page -->
				<form action="#" class="popup-form">
					<fieldset>
						<input type="checkbox" class="form-control">Don’t show this popup again
					</fieldset>
				</form><!-- Popup Form of the Page end -->
			</section><!-- Mt Newsletter Popup of the Page -->
		</div><!-- Popup of the Page end -->
	</div><!-- Popup Holder of the Page end -->
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
	<script>
    function buyNow() {
        window.location.href = "payment.php";
    }



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
	11: { name: "Vivo Y17", price: 14499 },
12: { name: "AULA S505 Wired Gaming Headphone", price: 1550 },
13: { name: "Mi Smart Band 7", price: 4500 },
14: { name: "Dreo Smart 9\" Air Circulator Fan", price: 8000 },
15: { name: "7KEYS Wireless Keyboard and Mouse Gaming Combo", price: 2500 },
16: { name: "Lenovo HT18 True Wireless Earbuds", price: 800 },
17: { name: "Univision LED350 22\" AH FHD Monitor", price: 7800 },
18: { name: "ASUS D415DA Ryzen 3 3250U 14-inch HD Laptop", price: 46000 },
19: { name: "Glorious Model O- Wired Gaming Mouse", price: 3500 },
20: { name: "Infinix Smart 7HD", price: 13000 },
21: { name: "Adata SU650 240GB M.2 SATA SSD", price: 1750 },
22: { name: "Canon EF 50mm f/1.8 STM Lens", price: 15500 },

23: { name: "Xiaomi Redmi Note 10", price: 18999 },
24: { name: "Apple MacBook Air 13.3", price: 113930 },
25: { name: "Apple AirPods 3rd generation", price: 22800 },
26: { name: "Apple Watch Series 9 Smart Watch", price: 59000 },
27: { name: "VISION G25 Microwave Oven 25Ltr Smart", price: 13900 },
28: { name: "ELITE EHS-12CRN Air Conditioner", price: 3500 },
29: { name: "Havit H654U Headphone ", price: 1875 },
30: { name: "Baseus Flyer Turbine Handheld Fan", price: 1750 },
31: { name: "Kenstar KCB-18W3H-CFR Air Cooler", price: 10900 },
32: { name: "Canon EOS 1500D 24.1MP Camera", price: 34400 },
33: { name: "TKL Mechanical Keyboard", price: 7500 },
34: { name: "Logitech B100 Optical USB Mouse", price: 500 },

35: { name: "Sony WH-CH520, Wireless Headphones", price: 7790 },
36: { name: "Vivo Y22", price: 20999 },
37: { name: "MSI G32CQ5P 31.5 Gamming Monitor", price: 42300 },
38: { name: "Sony FE 50mm Full Frame Lens", price: 30000 },
39: { name: "Samsung Galaxy A54 ", price: 36000},
40: { name: "EAudionic Airbud 500", price: 3899 },
41: { name: "Logitech G402 Hyperion Fury Mouse ", price: 3000 },
42: { name: "ROYAL KLUDGE RK G68 Mechanical Gaming", price: 4300 },
43: { name: "39L LG Smart Microwave Oven", price: 54900 },
44: { name: "OnePlus Bullets Wireless Headphone", price: 1190 },
45: { name: "Lenovo 15.6 IdeaPad Slim 3 Notebook", price: 83500 },
46: { name: "Doss Audio Sound Box", price: 9899 },
50: { name: "MSI G32CQ5P 31.5 Gamming Monitor", price: 42300 },
49: { name: "Wireless headphones BO12", price: 1490 }
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



</script>


</body>


</html>