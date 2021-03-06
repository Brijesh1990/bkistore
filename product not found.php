<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bike Store</title>
<meta name="keywords" content="Latest Blog" />
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800&display=swap" rel="stylesheet">
<script src="js/wow.min.js" type="text/javascript"></script>
<link href="css/animate.css" rel="stylesheet"/>
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link href="css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
<script src="js/swiper.jquery.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/common.js" type="text/javascript"></script>
<script src="js/jquery.zoom.js"></script>
<script src="js/thestore.js"></script>
<link href="css/opencart.css" type="text/css" rel="stylesheet" media="screen" />
<link href="css/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script>
       new WOW().init();
</script>
</head>
<body>
<!-- loader -->
	<div class="loader" id="window">
		<img src="image/preloader.gif" id="hourglass2" alt="hourglass" title="hourglass">
	</div>
<!-- loader end -->
 <script>
$(window).load(function(){
   setTimeout(function(){
   $('#window').hide();
   },500);          
})
</script> 
<!-- top section -->
<nav id="top">
	<div class="container-fluid">
		<div class="row">
		   <a href="" class="phone_contact">Welcome to our online store!</a>
			<div id="top-links" class="nav pull-right">
				<ul class="list-inline">
					<li>
					<a href="#" title="Compare (0)">
					<i class="fa fa-balance-scale"></i> 
					<span class="hidden-xs hidden-sm hidden-md">Compare (0)</span></a>
					</li>
				    <li>
						<div class="pull-left">
							<form action="#" method="post"  enctype= "multipart/form-data" id="form-currency">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown"><strong>$</strong><span class="hidden-xs hidden-sm hidden-md">USD</span>&nbsp;<i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu">
								<li><button class="currency-select btn btn-link btn-block" type="button" name="EUR">??? Euro</button></li>
								<li> <button class="currency-select btn btn-link btn-block" type="button" name="GBP">?? Pound Sterling</button></li>
								<li><button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button></li>
								</ul>
							</div>
								<input type="hidden" name="code" value="" />
								<input type="hidden" name="redirect" value="image" />
							</form>
						</div>
                    </li>
				    <li>
						<div class="pull-left">
							<form action="#" method="post" enctype="multipart/form-data" id="form-language">
								<div class="btn-group">
									<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<img src="image/en-gb.png" alt="English" title="English">
									<span class="hidden-xs hidden-sm hidden-md">English</span>&nbsp;<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu">
									<li>
									<button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="image/en-gb.png" alt="English" title="English" /> English</button>
									</li>
									<li>
									<button class="btn btn-link btn-block language-select" type="button" name="ar"><img src="image/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
									</li>
									</ul>
								</div>
									<input type="hidden" name="code" value="" />
									<input type="hidden" name="redirect" value="image" />		
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- end -->
<!-- header section -->
<header class="main-menu">
	<div class="header_wrapper_home">
		<div class="container-fluid">
			<!-- destop vergian -->
			<div class="row header_sec destop_header">
				<div class="col-sm-4 rtl_logo">
					<div id="logo">
						<a href="index.html"><img src="image/logo1.png" title="Your Store" alt="Your Store" class="img-responsive" /></a>
					</div>
				</div>
				<!-- my account -->
				<div class="col-sm-8">
					<div class="text_account_wrapper pull-right">
						<div class="header_transaction header_account">
							<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o faicons"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-right megamenu">
								<li><a href="register.html">Register</a>
								</li>
								<li><a href="login.html">Login</a>
								</li>
							</ul>					  
						</div>
						<!-- wishlist -->
							<div class="header_transaction header_wishlist">
							<a href="wish-list.html" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart-o faicons"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a>
							</div>
						<!-- cart -->
						<div class="header_transaction heder_cart">
							<div id="cart" class="btn-group btn-block">
								<button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><p class="cart_data_p"><i class="fa fa-shopping-cart faicons"></i> My Cart <span class="cart_qut">0</span></p> </button>
								<ul class="dropdown-menu pull-right cheekout_weap">
								<li>
								 <p class="text-center">Your shopping cart is empty!</p>
								</li>
                                </ul>
							</div>
						</div>
						 <!-- search -->
						<div class=" search_and_cart_wrapper_header">
							<div class="text-right cart-menu">
								<div class="search_wrapper">
								<a class="ebsearch"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div id="search" class="input-group">
							    <span class="close">x</span>
								<div class="bikes_search">					
								<p>Find Your Desire</p>
								</div>
								<input value="" class="esearch" name="search" type="search" placeholder="Search here" >
								<span class="input-group-btn searchicon">
								<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<script>
	$(document).ready(function(){
		$('.ebsearch').on('click', function(event) { 
			$('#search').addClass('open');
			$('#search > form > input[type="search"]').focus();
		});            
		$('#search, #search button.close').on('click keyup', function(event) {
			if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
				$(this).removeClass('open');
			}
		});            
	});
</script>
</header>
<!-- header section end-->

<!--menu-->
<div class="header_menu">
	<div class="container-fluid">
		<div class="row">
			 <nav id="menu" class="navbar">
				<div class="navbar-header"><span id="category" class="visible-xs"> Categories </span>
				<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<i class="fa fa-bars"></i></button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Racing Bicycles</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">               
									<ul class="list-unstyled">
										<li><a href="catagory.html">Racing Bicycle Thin Tyre (0)</a></li>
										<li><a href="catagory.html">Racing Bicycle Alminium Frame (2)</a></li>
										<li><a href="catagory.html">Racing Bicycle Down Frame (2)</a></li>
										<li><a href="catagory.html">Racing Bicycle Magnesium (3)</a></li>
										<li><a href="catagory.html">Racing Bicycle Alminium Break (4)</a></li>
									</ul>
								</div>
								<a href="#" class="see-all">Show All Racing Bicycles</a> 
							</div>
						</li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Baby Try Cycles</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">               
									<ul class="list-unstyled">
										<li><a href="catagory.html">Tri Cycle With Push Handle (5)</a>
										</li>
										<li><a href="catagory.html">Tri Cycle With Back Basket (4)</a>
										</li>
										<li><a href="catagory.html">Tri Cycle With Basket (5)</a>
										</li>
										<li><a href="catagory.html">Tri Cycle With Plastic Tyre (5)</a>
										</li>
										<li><a href="catagory.html">Tri Cycle With Rubber Tyre (4)</a>
										</li>
								  </ul>
								</div>
									<a href="index.html" class="see-all">Show All Baby Try Cycles</a> 
							</div>
						</li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fat Bikes</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">               
									<ul class="list-unstyled">
										<li><a href="catagory.html">Aliminium Frame Body (4)</a>
										</li>
										<li><a href="catagory.html">Fat Bike Front Disc (4)</a>
										</li>
										<li><a href="catagory.html">Iron Frame Body (4)</a>
										</li>
										<li><a href="catagory.html">Fat Bike Back Disc (4)</a>
										</li>
										<li><a href="catagory.html">Fat Bike Combo Disc (4)</a>
										</li>
									</ul>
								</div>
									<a href="index.html" class="see-all">Show All 		Fat 			Bikes</a> 
							</div>
						</li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hybrid Bicycles</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">              
      								<ul class="list-unstyled">
									<li><a href="catagory.html">Hybrid Powerfull Breaks (0)</a>
									</li>
									<li><a href="catagory.html">Hybrid Bicycle With Disc (2)</a>
									</li>
									<li><a href="catagory.html">Hybrid Bicycle Without Disc (1)</a>
									</li>
									<li><a href="catagory.html">Hybrid Bicycle With Gear (1)</a>
									</li>
									<li><a href="catagory.html">Hybrid Bicycle Without Gear (2)</a>
									</li>
									</ul>
								</div>
									<a href="index.html" class="see-all">Show All Hybrid Bicycles</a> 
							</div>
						</li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Track Bicycles</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">               
									<ul class="list-unstyled">
										<li><a href="catagory.html">Track Bicycle Heavy Body (2)</a></li>
										<li><a href="catagory.html">Track Bicycle With Adustable Seat (2)</a></li>
										<li><a href="catagory.html">Track Bicycle Sports Look (1)</a></li>
										<li><a href="catagory.html">Track Bicycle With Adustable Handle (3)</a></li>
										<li><a href="catagory.html">Track Bicycle With Thick Tyre (2)</a></li>
									</ul>
								</div>
									<a href="index.html" class="see-all">Show All Track Bicycles</a> 
							</div>
						</li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Motorized Bicycles</a>
							<div class="dropdown-menu megamenu">
								<div class="dropdown-inner">              
									<ul class="list-unstyled">
										<li><a href="catagory.html">Motorized Bicycle 4 Batteries (2)</a></li>
										<li><a href="catagory.html">Motorized Bicycle 6 Batteries (1)</a></li>
										<li><a href="catagory.html">Motorized Bicycle With Accessories (2)</a></li>
										<li><a href="catagory.html">Motorized Bicycle Without Paddle (2)</a></li>
										<li><a href="catagory.html">Motorized Bicycle With Paddle (2)</a></li>
									</ul>
								</div>
									<a href="index.html" class="see-all">Show All Motorized Bicycles</a>
							</div>
						</li>
                        <li>
						<a href="latast-blog.html"> Latest Blog</a>
						</li>
                    </ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<!--menu end-->
<script>
$(window).scroll(function() {
  if ($(this).scrollTop() > 211){
    $('header .header_menu').addClass("sticky_header");
  } else{
    $('header .header_menu').removeClass("sticky_header");
  }
});
</script>
<!---------catagory-banner-------->
<div class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			 <ul class="breadcrumb">
					<h3>Product Not found !</h3>
								<li><a href="index.html">Home</a></li>
								<li><a href="checkout.html">Product Not found.</a></li>
							  </ul>
		</div>
	</div>
</div>
</div>
<!--- /end --->
  <div class="container">
		<p>Product Not found !</p>
	</div>
<!-----footer area-------->
<footer id="footer">
	<div class="container-fluid clear">
		<div class=" row">
			<div class=" footer_links">
			<!-- contact us -->
				<div class="col-sm-3 col_footer footer_padding">
					<div class="footer-inner-matter">
						<h3 class="wow fadeInUp">Contact Us</h3>
						<ul>
							<li><img src="image/icon-phone.png"><p>Hotline Free 24/24:</p><span><i class="fa fa-volume-control-phone"></i>(+800) 123 456 789</span></li>
							<li><i class="fa fa-map-marker"></i> 622 Vernon Drive Flushing, NY 11354</li>
							<li class="email"><i class="fa fa-envelope"></i> company123@gmail.com</li>
						</ul>
						<div class="social_media_wrapper">
						<ul>
							<li class="facebook"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
							<li class="youtube"><a href="#"><i class="fa fa-youtube-square"></i></a></li>
							<li class="google"><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div><!---------/ end cntact us--------->
				<!-- information -->
				<div class="col-sm-3 col_footer footer_padding">
					<div class="footer-inner-matter">
						<h3 class="wow fadeInUp">Information</h3>
						<ul class="list-unstyled">
							 <li><a href="about.html" class="wow fadeInUp"> About Us</a></li>
							 <li><a href="#" class="wow fadeInUp"> Delivery Information</a></li>
							 <li><a href="#" class="wow fadeInUp"> Privacy Policy</a></li>
							<li><a href="#" class="wow fadeInUp"> Terms &amp; Conditions</a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<!-- / information end-->
				<!-- extra -->
				<div class="col-sm-3 col_footer footer_padding">
					<div class="footer-inner-matter">
						<h3 class="wow fadeInUp">Extras</h3>
						<ul class="list-unstyled">
							<li><a href="contact.html" class="wow fadeInUp"> Contact Us</a></li>
							<li><a href="brands.html" class="wow fadeInUp"> Brands</a></li>
							<li><a href="index.html" class="wow fadeInUp"> Specials</a></li>
							<li><a href="return.html" class="wow fadeInUp"> Returns</a></li>
							<li><a href="#" class="wow fadeInUp"> Gift Certificates</a></li>
							<li><a href="#" class="wow fadeInUp"> Affiliate</a></li>
							<li><a href="#" class="wow fadeInUp"> Site Map</a></li>
						</ul>
						<div class="clear"></div>
					</div>
					</div>
				<!-- / extra end-->
				<!-- play_store -->
				<div class="col-sm-3 col_footer footer_padding Get_the_App">
					<div class="footer-inner-matter">
						<h3 class="wow fadeInUp"><!--{{ text_extra }}--->Get The App
						</h3>
						<h4>GreenLife App Is Now Available On Google 
						Play &amp; App Store. Get It Now.
						</h4>
						<div class="images_dat_dec">
							<div class="img_1">
							<a href="#"><img src="image/icon1-app.jpg"></a>
							</div>
							<div class="img_2">
							<a href="#"><img src="image/icon-app.jpg"></a>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>	
				<!-- / play_store end -->
				<!-- newsletters -->
<div class="new_bottom_newsletter">
	<div class="col-sm-12 col_footer">
		<div class="head_newsletter text-center">
			<div class="head_newsletter_one">
				<div class="footer-inner-matter news_letter_subscription wow fadeInUp">
					<div id="newsletterModule-footer" class="">
						<div id="newsletterFooterModule0">
							<div class="news_latter" id="news_latter">
								<div class="">
									<div class="row" id="subsribe">	
										<div class="successmsg">
										</div>
										<div class="news_latte_text">
											<div class="col-sm-4 text-left">
												<h3>Join Our<span> Newsletter Now</span></h3>
											</div>
											<div class="col-sm-3 newletter_desc text-left">
											<p>Join 10.000+ subscribers and get a new discount coupon.</p>
											</div>
											<!-- <p>Subscribe to our newsletter to receive special offers and latest news. </p> -->
											<div class="col-sm-5">
												<div class="form-group required text-right">
													<div class="news_latter_form">
														<div class="input-news">
															<input type="text" id="input-newsletter-email" class="fem form-control" placeholder="Enter Your Email Address here" value="" name="email"/>
														</div>
														<div class="subscribe-btn input-group-btn">
															<a id="button-subsribe" class="btn btn-primary btn-xs">Subscribe</a>
														</div>
													</div>
												</div>
											</div>
										</div>			
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div> 	 
</div>
<div class="clear"> </div>
				<!--- copy-right-area -->
				<div class=" social_footer copy_right_wrapper">		
				<div class="col-sm-6 rtl_text">
				<div class="copy-right">
					<p class="wow fadeInDown   animated" style="visibility: visible; animation-name: fadeInDown;">?? Copyright 2020 by Bike Store. All right Reserved - Design By <a href="https://www.templatebazaar.in/" target="_blank">Template bazaar</a></p>
				</div>
				</div>
				<!-------/ end copyright----------->
				<!--- payment_links -->
				<div class="col-sm-6 rtl_text">
					<div class="payment_method_footer">
						<div class="payment_option_methods">
							<ul>
								<li><a href=""><img src="image/payment-1.png"></a></li>
								<li><a href=""><img src="image/payment-2.png"></a></li>
								<li><a href=""><img src="image/payment-3.png"></a></li>
								<li><a href=""><img src="image/payment-4.png"></a></li>
							  <li><a href=""><img src="image/payment-5.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--------/ end payment link------------>
</footer>
<div class="top_button">
  <a class="back-to-top" style="cursor:pointer;" id="top-scrolltop"><i class="fa fa-angle-up"></i></a>
</div>
<script>
$('#top-scrolltop').on('click',function(){
 $('html, body').animate({scrollTop:0},500);
});

$(function ($) {
    "use strict";
    /*Back to top */
	$(".back-to-top").addClass("hidden-top");
		$(window).scroll(function () {
		if ($(this).scrollTop() === 0) {
			$(".back-to-top").addClass("hidden-top")
		} else {
			$(".back-to-top").removeClass("hidden-top")
		}
	});

	$('.back-to-top').click(function () {
		$('body,html').animate({scrollTop:0}, 1200);
		return false;
	});	
});
</script>
</body>
</html>