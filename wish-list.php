
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
								<li><button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button></li>
								<li> <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button></li>
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
<!---------catagory-banner-page-------->
<div class="main_breadcrumb">
	<div class="container">
	 <ul class="breadcrumb">
	 <h3>Account Login</h3>
				<li><a href="index.html">Home</a></li>
				<li><a href="wish-list.html">Account</a></li>
				<li><a href="login.html">Login</a></li>
			  </ul>
	</div>
</div>
<div class="main_padding">
<div id="account-login" class="container-fluid">
      <div class="row">
                <div id="content" class="col-sm-9">
      <div class="row">
      	<!-----new custumer add----->
        <div class="col-sm-6">
          <div class="well">
            <h2>New Customer</h2>
            <p><strong>Register Account</strong></p>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a href="register.html" class="btn btn-primary">Continue</a></div>
        </div>
        <!------custumers login form------>
        <div class="col-sm-6">
          <div class="well">
            <h2>Returning Customer</h2>
            <p><strong>I am a returning customer</strong></p>
            <form action="wish-list.html" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail Address</label>
                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Password</label>
                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                <a href="#">Forgotten Password</a></div>
              <input type="submit" value="Login" class="btn btn-primary" />
                          </form>
          </div>
        </div>
        <!------end login form---------->
      </div>
      </div>
      <!----------wishlist page------------>
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group categories_wrapper_home">
<h4>Account</h4>
	<ul>
	  	 <li> <a href="login.html" class="list-group-item"> Login</a></li> <li><a href="register.html" class="list-group-item">  Register</a></li> <li><a href="login.html" class="list-group-item">  Forgotten Password</a></li>
	  	  <li><a href="index.html" class="list-group-item">  My Account</a></li>
	  	 <li> <a href="contact.html" class="list-group-item">  Address Book</a></li> <li><a href="#" class="list-group-item">  Wish List</a></li> <li><a href="#" class="list-group-item">  Order History</a></li> <li><a href="#" class="list-group-item">  Downloads</a></li><li><a href="#" class="list-group-item">  Recurring payments</a></li> <li><a href="#" class="list-group-item">  Reward Points</a></li> <li><a href="return.html">  Returns</a></li> <li><a href="#" class="list-group-item">  Transactions</a></li> <li><a href="index.html" class="list-group-item">  Newsletter</a></li>
	  	</ul>
</div>

  </aside>
  <!----------end wishlist page-------->
</div>
</div></div>
<!-------news-letter style----->
<style>
	#newsletterModal .modal-body{
		background-image:url('#');
	}
	
</style>
<!-----end news-letter style--------->
<div id="newsletterModal" class="modal fade newsletter_popup" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content swing">
			<button type="button" class="close closepopup" data-dismiss="modal"><img src="image/close_news.png" alt="close_news" title="close_news"/></button>

			<div class="modal-body">
							
				<h3>Sign Up For Our Newsletter:</h3>
<p>Get All The Latest Information On Events,Sales And Offers.<br> Sign Up For Newsletter Today</p>
				
				<form class="subsribe">
					<div class="successmsg"></div>
											<div class="form-group required">
														  <input type="text" id="input-newsletter-email" class="form-control" placeholder="E-Mail Address" value="" name="email"/>
							  <div class="input-group">
							  <span class="">
								<a class="btn btn-primary button-subsribe">Subscribe</a>
							  </span>
							</div>
							<!-- /input-group -->
						</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$('#newsletterModal .button-subsribe').on('click', function(){
	$.ajax({
		url: 'index.php?route=extension/awesomenewsletter_popup/addsubscribe',
		type: 'post',
		data: $('#newsletterModal .subsribe input[type=\'text\']'),
		dataType: 'json',
		beforeSend: function(){
			$('#newsletterModal .button-subsribe').button('loading');
		},
		complete: function(){
			$('#newsletterModal .button-subsribe').button('reset');
		},
		success: function(json){
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');
			$('#newsletterModal .successmsg').html('');
			
			if(json['error']) {
				for (i in json['error']) {
					var element = $('#newsletterModal #input-newsletter-' + i.replace('_', '-'));

					if ($(element).parent().hasClass('input-group')){
						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
					} else {
						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
					}
				}
				
				$('.text-danger').parent().addClass('has-error');
			}
			
			if(json['success']) {
				$('#newsletterModal .successmsg').html('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				
				$('#newsletterModal .subsribe input[type=\'text\']').val('');
			}
			
			if(json['warring']) {
				$('#newsletterModal .successmsg').html('<div class="alert alert-danger">' + json['warring'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}
		}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function () {
	var time = parseInt(10*1000);
	setTimeout(function(){
		$('#newsletterModal').modal('show')  
	}, time); 
});
</script>
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
					<script type="text/javascript">
					$('#newsletterFooterModule0 #button-subsribe').on('click', function() {
						//alert('ss');
						$.ajax({
							url: 'index.php?route=extension/module/awesomenewsletter/addsubscribe',
							type: 'post',
							data: $('#newsletterFooterModule0 #subsribe input[type=\'text\']'),
							dataType: 'json',
							beforeSend: function(){
								$('#newsletterFooterModule0 #button-subsribe').button('loading');
							},
							complete: function(){
								$('#newsletterFooterModule0 #button-subsribe').button('reset');
							},
							success: function(json){
								$('.text-danger').parent().removeClass('has-error');
								$('.alert, .text-danger').remove();
								$('#newsletterFooterModule0 #successmsg').html('');
								
								if(json['error']) {
									if(json['error']['email']) {
										$('#newsletterFooterModule0 #input-newsletter-email').parent().after('<div class="col-sm-12 text-left text-danger">' + json['error']['email'] + '</div>');
										
										$('.text-danger').parent().addClass('has-error');
									}
									
									if(json['error']['name']) {
										$('#newsletterFooterModule0 #input-newsletter-name').parent().after('<div class="text-left text-danger">' + json['error']['name'] + '</div>');
										$('.text-danger').parent().addClass('has-error');
									}
								}
								
								if(json['success']){
									$('#newsletterFooterModule0 #input-newsletter-email').parent().after('<div class="text-left text-success">' +  json['success'] + '</div>');	
									setTimeout(function(){
										$('.text-success').remove();
									}, 2000);
									
									$('#newsletterFooterModule0 #subsribe input[type=\'text\']').val('');
									$('#newsletterFooterModule0 #subsribe input[type=\'email\']').val('');
								}
								
								if(json['warring']) {
									$('#newsletterFooterModule0 #successmsg').html('<div class="alert alert-danger">' + json['warring'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
								}
								
							}
						});
					});
					</script>
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
					<p class="wow fadeInDown   animated" style="visibility: visible; animation-name: fadeInDown;">© Copyright 2020 by Bike Store. All right Reserved - Design By <a href="https://www.templatebazaar.in/" target="_blank">Template bazaar</a></p>
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
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>
</html>