<footer id="footer">
	<div class="container-fluid clear">
		<div class=" row">
			<div class=" footer_links">
			<!-- contact us -->
				<div class="col-sm-3 col_footer footer_padding">
					<div class="footer-inner-matter">
						<h3 class="wow fadeInUp">Contact Us</h3>
						<ul>
							<li><img src="<?php echo $baseurl;?>image/icon-phone.png"><p>Hotline Free 24/24:</p><span><i class="fa fa-volume-control-phone"></i>(+800) 123 456 789</span></li>
							<li><i class="fa fa-map-marker"></i> 622 Vernon Drive Flushing, NY 11354</li>
							<li class="email"><i class="fa fa-envelope"></i> company123@gmail.com</li>
						</ul>
						<div class="social_media_wrapper">
						<ul>
							<li class="facebook"><a href="<?php echo $baseurl;?>"><i class="fa fa-facebook-square"></i></a></li>
							<li class="skype"><a href=""><i class="fa fa-skype"></i></a></li>
							<li class="youtube"><a href=""><i class="fa fa-youtube-square"></i></a></li>
							<li class="google"><a href=""><i class="fa fa-google-plus-square"></i></a></li>
							<li class="linkedin"><a href=""><i class="fa fa-linkedin-square"></i></a></li>
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
							 <li><a href="<?php echo $mainurl;?>/about" class="wow fadeInUp"> About Us</a></li>
							 <li><a href="#" class="wow fadeInUp"> Delivery Information</a></li>
							 <li><a href="#" class="wow fadeInUp"> Privacy Policy</a></li>
							<li><a href="#" class="wow fadeInUp"> Terms &amp; Conditions</a></li>

							<li><a href="<?php echo $mainurl;?>bikestore_admin" class="wow fadeInUp"> Login with &amp; Admin</a></li>
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
							<li><a href="<?php echo $mainurl;?>/Contact" class="wow fadeInUp"> Contact Us</a></li>
							<li><a href="<?php echo $mainurl;?>/brands" class="wow fadeInUp"> Brands</a></li>
							<li><a href="<?php echo $baseurl;?>" class="wow fadeInUp"> Specials</a></li>
							<li><a href="<?php echo $mainurl;?>/return"class="wow fadeInUp"> Returns</a></li>
							<li><a href="#" class="wow fadeInUp"> Gift Certificates</a></li>
							<li><a href="#" class="wow fadeInUp"> Affiliate</a></li>
							<li><a href="<?php echo $mainurl;?>/sitemap" class="wow fadeInUp"> Site Map</a></li>
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
							<a href="#"><img src="<?php echo $baseurl;?>image/icon1-app.jpg"></a>
							</div>
							<div class="img_2">
							<a href="#"><img src="<?php echo $baseurl;?>image/icon-app.jpg"></a>
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
								<li><a href=""><img src="<?php echo $baseurl;?>image/payment-1.png"></a></li>
								<li><a href=""><img src="<?php echo $baseurl;?>image/payment-2.png"></a></li>
								<li><a href=""><img src="<?php echo $baseurl;?>image/payment-3.png"></a></li>
								<li><a href=""><img src="<?php echo $baseurl;?>image/payment-4.png"></a></li>
							  <li><a href=""><img src="<?php echo $baseurl;?>image/payment-5.png"></a></li>
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
