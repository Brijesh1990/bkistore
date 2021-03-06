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
<script src="js/onepagecheckout.js" type="text/javascript"></script>
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
					<h3>Checkout</h3>
								<li><a href="index.html">Home</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							  </ul>
		</div>
	</div>
</div>
</div>
<link href="css/base.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<div id="container">
<div class=" container-fluid" id="onepagecheckout">
  
<div class="extrow row">
            	<div class="main_padding">
    <div id="content" class="col-sm-12">
		<div class="extrow account_option">
			<div class="extsm-5">
								<!-- Register , Guest , Login Buttons -->
				<div class="extpanel-group">
					<div class="extbtn-block" data-toggle="buttons">
												<label style="width:33.3%" class="btn  active btn-primary  button-account-type ">
							<input type="radio" name="account_type" value="register"  checked="checked"  /> Register
						</label>
							<label style="width:33.3%" class="btn  btn-default  button-account-type">
							<input type="radio" name="account_type" value="guest"  /> Guest
						</label>
							<label style="width:33.3%" class="btn  btn-default  button-account-type">
							<input type="radio" name="account_type" value="login"  /> Login
						</label>
					 </div>
			</div>
				
				<div class="account-content content-register-guest">
								<!-- Details -->
					<div class="personal-details-content content-personal-details marginbottom">
				 		<div class="extpanel extpanel-default">
	                      	<div class="extpanel-heading">
		                       <h4 class="extpanel-title"><i class="fa fa-user"></i> Personal Details</h4>
	                      </div>

	<div class="extpanel-body">
		<div id="account">
			<div class="form-group extsm-12" style="display:  none ;">
				<label class="control-label">Customer Group</label>
									<select class="formcontrol" name="personal_details[customer_group_id]">
											<option selected="selected" value="1">Default</option>
									</select>
							</div>
			
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-firstname">First Name</label>
						<input type="text" name="personal_details[firstname]" value="" placeholder="First Name" id="input-payment-firstname" class="formcontrol" />
					</div>
																																																										
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-lastname">Last Name</label>
						<input type="text" name="personal_details[lastname]" value="" placeholder="Last Name" id="input-payment-lastname" class="formcontrol" />
					</div>
																																																						
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-email">E-Mail</label>
						<input type="text" name="personal_details[email]" value="" placeholder="E-Mail" id="input-payment-email" class="formcontrol" />
					</div>
																																																		
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-telephone">Telephone</label>
						<input type="text" name="personal_details[telephone]" value="" placeholder="Telephone" id="input-payment-telephone" class="formcontrol" />
					</div>
																																														
						
					<div class="form-group extsm-6 ">
						<label class="control-label" for="input-payment-fax">Fax</label>
						<input type="text" name="personal_details[fax]" value="" placeholder="Fax" id="input-payment-fax" class="formcontrol" />
					</div>
																																										
						
					<div class="form-group extsm-6 ">
						<label class="control-label" for="input-payment-company">Company</label>
						<input type="text" name="personal_details[company]" value="" placeholder="Company" id="input-payment-company" class="formcontrol" />
					</div>
																																						
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-address-1">Address 1</label>
						<input type="text" name="personal_details[address_1]" value="" placeholder="Address 1" id="input-payment-address-1" class="formcontrol" />
					</div>
																																		
						
					<div class="form-group extsm-6 ">
						<label class="control-label" for="input-payment-address-2">Address 2</label>
						<input type="text" name="personal_details[address_2]" value="" placeholder="Address 2" id="input-payment-address-2" class="formcontrol" />
					</div>
																														
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-city">City</label>
						<input type="text" name="personal_details[city]" value="" placeholder="City" id="input-payment-city" class="formcontrol" />
					</div>
																										
						
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-postcode">Post Code</label>
						<input type="text" name="personal_details[postcode]" value="" placeholder="Post Code" id="input-payment-postcode" class="formcontrol" />
					</div>														
						
					<div class="form-group  extsm-6 required">
						<label class="control-label" for="input-payment-country">Country</label>
						<select name="personal_details[country_id]" id="input-payment-country" class="formcontrol">
							<option value="">Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="252">Ascension Island (British)</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, Metropolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="256">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="254">Isle of Man</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="257">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="253">Kosovo, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="113">South Korea</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="255">Tristan da Cunha</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222" selected="selected">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
							</select>
					</div>
						
					<div class="form-group  extsm-6 required">
						<label class="control-label" for="input-payment-zone">Region / State</label>
						<select name="personal_details[zone_id]" id="input-payment-zone" class="formcontrol">
						</select>
					</div>
														
					form-group extsm-6 required register_fields">
						<label class="control-label" for="input-payment-password">Password</label>
						<input type="password" name="personal_details[password]" value="" placeholder="Password" id="input-payment-password" class="formcontrol" />
					</div>	
					<div class="form-group extsm-6 required">
						<label class="control-label" for="input-payment-confirm">Password Confirm</label>
						<input type="password" name="personal_details[confirm]" value="" placeholder="Password Confirm" id="input-payment-confirm" class="formcontrol" />
					</div>
						
						
					</div>
		
		<!-- Captcha -->
		 <div class="checkbox register_fields extsm-12">
			<label>
				<input checked=checked type="checkbox" name="personal_details[agree]" value="1" id="account-term"/>
				I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
			</label>
		</div>
				
		<!-- Newsletter Status -->
				<div class="checkbox register_fields extsm-12">
			<label for="newsletter">
				<input type="checkbox" name="personal_details[newsletter]" value="1" id="newsletter" />
				I wish to subscribe to the Your Store newsletter.
			</label>
		</div>
				
		<!-- Shipping Required -->
				<div class="checkbox extsm-12 show">
			<label>
				<input type="checkbox" name="personal_details[shipping_address]" value="1" checked=checked  />
				My delivery and billing addresses are the same.
			</label>
		</div>
					
	</div>
</div>
</div>
<div class="delivery-details-content content-delivery-details">
		<div class="extpanel extpanel-default">
			<div class="extpanel-heading">
				<h4 class="extpanel-title"><i class="fa fa-truck fa-flip-horizontal"></i> Delivery Details</h4>
	</div>
			<div class="extpanel-body">
				<form>
						<input style="display:none" type="radio" checked="checked" name="delivery_details[shipping_address]" value="new" />
						<div id="shipping-new" style="display: block;">
							 
				 				
									<div class="form-group extsm-6 required">
						<label class="control-label" for="input-shipping-firstname">First Name</label>
						<input type="text" name="delivery_details[firstname]" value="" placeholder="First Name" id="input-shipping-firstname" class="formcontrol" />
					</div>
																		
								
									<div class="form-group extsm-6 required">
						<label class="control-label" for="input-shipping-lastname">Last Name</label>
						<input type="text" name="delivery_details[lastname]" value="" placeholder="Last Name" id="input-shipping-lastname" class="formcontrol" />
					</div>
					
								
									<div class="form-group extsm-6 ">
						<label class="control-label" for="input-shipping-company">Company</label>
						<input type="text" name="delivery_details[company]" value="" placeholder="Company" id="input-shipping-company" class="formcontrol" />
					</div>
						
								
									<div class="form-group extsm-6 required">
						<label class="control-label" for="input-shipping-address-1">Address 1</label>
						<input type="text" name="delivery_details[address_1]" value="" placeholder="Address 1" id="input-shipping-address-1" class="formcontrol" />
					</div>
								

									<div class="form-group extsm-6 ">
						<label class="control-label" for="input-shipping-address-2">Address 2</label>
						<input type="text" name="delivery_details[address_2]" value="" placeholder="Address 2" id="input-shipping-address-2" class="formcontrol" />
					</div>
								
									<div class="form-group extsm-6 required">
						<label class="control-label" for="input-shipping-city">City</label>
						<input type="text" name="delivery_details[city]" value="" placeholder="City" id="input-shipping-city" class="formcontrol" />
					</div>
								
									<div class="form-group extsm-6 required">
						<label class="control-label" for="input-shipping-postcode">Post Code</label>
						<input type="text" name="delivery_details[postcode]" value="" placeholder="Post Code" id="input-shipping-postcode" class="formcontrol" />
					</div>
								
													<div class="form-group  extsm-6 required">
						<label class="control-label" for="input-shipping-country">Country</label>
						<select name="delivery_details[country_id]" id="input-shipping-country" class="formcontrol">
							<option value="">Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="252">Ascension Island (British)</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, Metropolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="256">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="254">Isle of Man</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="257">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="253">Kosovo, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="113">South Korea</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="255">Tristan da Cunha</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222" selected="selected">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="234">Western Sahara</option>
				</div>									
	                 <div class="form-group  extsm-6 required">
						 <label class="control-label" for="input-shipping-zone">Region / State</label>
						 <select name="delivery_details[zone_id]" id="input-shipping-zone" class="formcontrol">
						</select>
					</div>
												
				
				</div>
		</form>
	</div>
</div>

<script type="text/javascript">
$('.date').datetimepicker({
	pickTime: false
});

$('.time').datetimepicker({
	pickDate: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});
//--></script>
</div>
												</div>
									<div class="account-content content-login"><div class="extpanel extpanel-default">
	<div class="extpanel-heading">
	  <h4 class="extpanel-title"><i class="fa fa-user"></i> Attention: You must <a href="%s">login</a> or <a href="%s">create an account</a> to view prices!</h4>
	</div>
	<div class="extpanel-body">
		<div class="row">
			<div class="extsm-12">
				<div class="form-group">
					<label class="control-label" for="input-email">E-Mail</label>
					<input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="formcontrol" />
				</div>
				<div class="form-group">
					<label class="control-label" for="input-password">Password</label>
					<input type="password" name="password" value="" placeholder="Password" id="input-password" class="formcontrol" />
					<a href="checkout.html">Forgotten Password</a></div>
				<input type="button" value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-primary button-login" />
			</div>
		</div>
	</div>
</div>
</div>
							</div>
			<div class="extsm-7">
				<!--CART START-->
								<div class="extrow full-cart format_load">
					<div class="extsm-12">
						<div class="content-shopping-cart">
							<div class="extpanel extpanel-default">
								<div class="extpanel-heading">
									<h4 class="extpanel-title"><i class="fa fa-shopping-cart"></i> Shopping Cart
									</h4>
								</div>
								<div class="panel-body">
									<div class="shopping-cart-content ext-carts min-hght"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--CART END-->
								<div class="extrow">
					<!-- Shipping -->
										<div class="extsm-6">
						<div class="full-payment-method format_load">
							<div class="content-delivery-method">
								<div class="extpanel extpanel-default">
									<div class="extpanel-heading">
										<h4 class="extpanel-title"><i class="fa fa-send"></i> Shipping Methods</h4>
									</div>
									<div class="miniheightclass extpanel-body delivery-method-content ext-delivery-method"></div>
								</div>
							</div>
						</div>
					</div>
										
					<!-- Payment Methods -->
					<div class="extsm-6">
						<div class="full-payment-method format_load">
							<div class="content-payment-method">
								<div class="extpanel extpanel-default">
									<div class="extpanel-heading">
										<h4 class="extpanel-title"><i class="fa fa-credit-card"></i> Payment Methods</h4>
									</div>
									<div class="miniheightclass extpanel-body payment-method-content ext-payment-method"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="border: 1px solid rgb(221, 221, 221); padding: 10px;" class="confirm-order-content content-confirm-order"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	              </div>
            </div>
        </div>
  </div>
<style>
	#newsletterModal .modal-body{
		background-image:url('');
	}
	
</style>
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
														  <input type="text" id="input-newsletter-email" class="form-control" placeholder="E-Mail" value="" name="email"/>
							  <div class="input-group">
							  <span class="">
								<a class="btn btn-primary button-subsribe">Subscribe</a>
							  </span>
							</div><!-- /input-group -->
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
							<li><a href="sitemap.html" class="wow fadeInUp"> Site Map</a></li>
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