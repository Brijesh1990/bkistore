<?php
$mainurl="http://localhost/bikestore/";
$baseurl="http://localhost/bikestore/assets/";


// $mainurl="http://bycyclestore.byethost33.com/";
// $baseurl="http://bycyclestore.byethost33.com/assets/";

?>



<!DOCTYPE html>

<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bike Store</title>
<meta name="keywords" content="Latest Blog" />
<script src="<?php  echo $baseurl;?>js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="<?php  echo $baseurl;?>css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="<?php  echo $baseurl;?>js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php  echo $baseurl;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
<link href="<?php  echo $baseurl;?>css/stylesheet.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800&display=swap" rel="stylesheet">
<script src="<?php  echo $baseurl;?>js/wow.min.js" type="text/javascript"></script>
<link href="<?php  echo $baseurl;?>css/animate.css" rel="stylesheet"/>
<link href="<?php  echo $baseurl;?>css/owl.carousel.css" rel="stylesheet">
<link href="<?php  echo $baseurl;?>css/responsive.css" rel="stylesheet" />
<link href="<?php  echo $baseurl;?>css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link href="<?php  echo $baseurl;?>css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
<script src="<?php  echo $baseurl;?>js/swiper.jquery.js" type="text/javascript"></script>
<script src="<?php  echo $baseurl;?>js/owl.carousel.min.js"></script>
<script src="<?php  echo $baseurl;?>js/common.js" type="text/javascript"></script>
<script src="<?php  echo $baseurl;?>js/jquery.zoom.js"></script>
<script src="<?php  echo $baseurl;?>js/thestore.js"></script>
<link href="<?php  echo $baseurl;?>css/opencart.css" type="text/css" rel="stylesheet" media="screen" />
<link href="<?php  echo $baseurl;?>css/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
<script src="<?php  echo $baseurl;?>js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script>
       new WOW().init();
</script>
</head>
<body>
<!-- loader -->
	<div class="loader" id="window">
		<img src="<?php  echo $baseurl;?>image/preloader.gif" id="hourglass2" alt="hourglass" title="hourglass">
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
		   <a href="<?php echo $mainurl;?>" class="phone_contact">Welcome to our online store!</a>
			<div id="top-links" class="nav pull-right">
				<ul class="list-inline">
					<li>
					<a href="<?php echo $mainurl;?>" title="Compare (0)">
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
									<img src="<?php  echo $baseurl;?>image/en-gb.png" alt="English" title="English">
									<span class="hidden-xs hidden-sm hidden-md">English</span>&nbsp;<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu">
									<li>
									<button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="<?php  echo $baseurl;?>image/en-gb.png" alt="English" title="English" /> English</button>
									</li>
									<li>
									<button class="btn btn-link btn-block language-select" type="button" name="ar"><img src="<?php  echo $baseurl;?>image/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
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
					    <?php
                        foreach ($shwlogo as $shwlogo1) {
                            if ($shwlogo1["status"]==1)
							 {
                                ?>
						<a href="#"><img src="bikestore_admin/<?php echo $shwlogo1["photo"]; ?>" title="Your Store" alt="Your Store" class="img-responsive" /></a>

						<?php
                            }
                        }
						?>
					</div>
				</div>
				<!-- my account -->
				<div class="col-sm-8">


					<div class="text_account_wrapper pull-right">

                       <?php if(!isset($_SESSION["custid"])) 
					 {  
					   ?>  

						<div class="header_transaction header_account">
							<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o faicons"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-right megamenu">
								<li><a href="<?php echo $mainurl;?>register">Register</a>
								</li>
								<li><a href="<?php echo $mainurl;?>login">Login</a>
								</li>
							</ul>					  
						</div>
						<?php
					 }
					 else
					 {
                         ?>


                            <div class="header_transaction header_account">
							<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o faicons"></i> <span class="hidden-xs hidden-sm hidden-md">Welcome :<?php echo $_SESSION["fname"];?></span> <span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-right megamenu">
								<li><a href="<?php echo $mainurl;?>manage_profile"><span class="fa fa-user"></span> Manage Profile</a>
								</li>
								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-bell"></span> Manage Notifications</a>
								</li>

								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-bell"></span> Manage Orders</a>
								</li>

								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-lock"></span> change Pasword</a>
								</li>

							</ul>					  
						</div>

						<?php
                     }
					 ?>
						<!-- wishlist -->
							<div class="header_transaction header_wishlist">
							<a href="<?php  echo $mainurl;?>wish-list.html" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart-o faicons"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a>
							</div>
						<!-- cart -->
						<div class="header_transaction heder_cart">
							<div id="cart" class="btn-group btn-block">
								<a href="<?php echo $mainurl;?>view_cart"><button type="button"  data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><p class="cart_data_p"><i class="fa fa-shopping-cart faicons"></i> My Cart <span class="cart_qut">0</span></p> </button></a>
								<!-- <ul class="dropdown-menu pull-right cheekout_weap">
								<li>
								 <p class="text-center">Your shopping cart is empty!</p>
								</li>
                                </ul> -->
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
						<li><a href="<?php  echo $mainurl;?>/">Home</a>
						</li>

                      <?php 
                      foreach ($shwcat as $shwcat1)
					  
					  {
                          ?>

						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $shwcat1["catname"]; ?></a>

						   <div class="dropdown-menu megamenu">
							
								<?php
                            
                            if ($shwcat1["catid"]==1) {
                                foreach ($shwsubcat as $shwsubcat1) {
                                    if ($shwsubcat1["catid"]==1) {
                                        ?>
						   

						   <div class="dropdown-inner">  

									<ul class="list-unstyled">
									
										<li><a href="<?php echo $mainurl;?>allproducts?subcatdetails=<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcatname"]; ?></a></li>
									
									</ul>
						   </div>
							
									<?php
                                    }
                                } ?>
							
						   </div>
						   				
		
		                   <?php
                            } elseif ($shwcat1["catid"]==2) {
                                ?>


                           <?php
                            
                                foreach ($shwsubcat as $shwsubcat1) {
                                    if ($shwsubcat1["catid"]==2) {
                                        ?>
						   

						   <div class="dropdown-inner">  

									<ul class="list-unstyled">
									
										<li><a href="<?php echo $mainurl;?>allproducts?subcatdetails=<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcatname"]; ?></a></li>
									
									</ul>
						   </div>
						

                     <?php
                                    }
                                } ?>

						</div>





						<?php
                            } elseif ($shwcat1["catid"]==3) {
                                ?>


                           <?php
                            
                                foreach ($shwsubcat as $shwsubcat1) {
                                    if ($shwsubcat1["catid"]==3) {
                                        ?>
						   

						   <div class="dropdown-inner">  

									<ul class="list-unstyled">
									
										<li><a href="<?php echo $mainurl;?>allproducts?subcatdetails=<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcatname"]; ?></a></li>
									
									</ul>
						   </div>
						





						<?php
                                    }
                                } ?>

					  </div>


					  

						<?php
                            } elseif ($shwcat1["catid"]==4) {
                                ?>


                           <?php
                            
                                foreach ($shwsubcat as $shwsubcat1) {
                                    if ($shwsubcat1["catid"]==4) {
                                        ?>
						   

						   <div class="dropdown-inner">  

									<ul class="list-unstyled">
									
										<li><a href="<?php echo $mainurl;?>allproducts?subcatdetails=<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcatname"]; ?></a></li>
									
									</ul>
						   </div>
						

<?php
                                    }
                                }

								?>

	</div>


	

	<?php
                            } 
							elseif($shwcat1["catid"]==5) 
							{
                                ?>


                           <?php
                            
                                foreach ($shwsubcat as $shwsubcat1) 
								
								{
                                    if ($shwsubcat1["catid"]==5) {
                                        ?>
						   

						   <div class="dropdown-inner">  

									<ul class="list-unstyled">
									
										<li><a href="<?php echo $mainurl;?>allproducts?subcatdetails=<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcatname"]; ?></a></li>
									
									</ul>
						   </div>
						

<?php


                            }
                      }					
}
}                         


?>



					<li>  

						<a href="<?php echo $mainurl;?>Blog"> Latest Blog</a>
						</li>
                     
					    <?php
                        if (isset($_SESSION["custid"])) {
                            ?>

						<li>
						<a href="<?php echo $mainurl; ?>?lgout" class="text-dark" style="height:20px; color:red" onclick="return confirm('Are you sure to Logout')"><span class="fa fa-power-off"></span> Logout</a>
						</li>
						<?php
                        }

						?>
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
