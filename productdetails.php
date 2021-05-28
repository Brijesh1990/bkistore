
<div class="main_padding">
	<div id="quickproduct" class="container-fluid popup_products_page" style="background-color:transparent; max-width: 100%;">
		<div id="product-product">
			<div class="row">
				<div id="content" class="">
					<div class=""> 
						<div class="col-sm-6"> 						
						



                        <form method="post">


						   <ul class="thumbnails">
							  <li><a class="thumbnail" title="Kids Bicycle" ><img id="ezoomer" src="bikestore_admin/<?php echo $shwprod[0]["pimage"];?>" style="width: 100%;"/></a></li>
						   </ul>	  
						  <ul class="thumbnails">
							   <div class="slider" id="porducts_images">
																	<li class="image-additional"><a  data-image="bikestore_admin/<?php echo $shwprod[0]["pimage1"];?>" data-zoom-image="bikestore_admin/<?php echo $shwprod[0]["pimage"];?>">
									<img  src="bikestore_admin/<?php echo $shwprod[0]["pimage"];?>" />
									</a></li>
																	<li class="image-additional"><a  data-image="bikestore_admin/<?php echo $shwprod[0]["pimage1"];?>" data-zoom-image="bikestore_admin/<?php echo $shwprod[0]["pimage1"];?>">
									<img  src="bikestore_admin/<?php echo $shwprod[0]["pimage2"];?>" />
									</a></li>
																	<li class="image-additional"><a  data-image="bikestore_admin/<?php echo $shwprod[0]["pimage1"];?>" data-zoom-image="bikestore_admin/<?php echo $shwprod[0]["pimage"];?>">
									<img  src="bikestore_admin/<?php echo $shwprod[0]["pimage2"];?>" />
									</a></li>
																	<li class="image-additional"><a  data-image="bikestore_admin/<?php echo $shwprod[0]["pimage2"];?>" data-zoom-image="bikestore_admin/<?php echo $shwprod[0]["pimage2"];?>">
																</div>
						  </ul>


												</div>


		
		                        <div class="col-sm-6">
				
						  
						  <input type="text" name="piid" value="<?php echo $shwprod[0]["pid"];?>"  class="form-control">
						  
						  
						  <input type="text" name="pnname" value="<?php echo $shwprod[0]["pname"];?>" style="border:none"   class="form-control">



						  <div class="rating">

						  <i class="fas fa-value-absolute">
				<p>				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>				  				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>				  				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>				  				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>				  				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>				  					<span class="border"> | </span> 
				  <a href="#">0 reviews</a> <span class="border"> | </span> 
				  
				  <a href="#" class="text_write_icon"><i class="fa fa-pencil-square-o"></i> Write a review</a>
				  
				  </p>
				  
				<hr/>
			  </div>


			   	<ul class="list-unstyled main-price">
				  <div class="price">
										<li>
					  <h2><del><?php echo $shwprod[0]["price"];?></del></h2>
					</li>
										 </div>
								<li>Rs.<input type="text" name="offerprice" id="offerprice" value="<?php echo $shwprod[0]["offerprice"];?>" readonly style="border: none;"></li>
												<li>Price in reward points: 400</li>
												
			  </ul>
			 
			  			  

				  			  <hr/>
			  <div id="product"> 				
				<h1>Available Options</h1>
																				

				<div class="form-group required text_option_top ">
				  <label class="control-label text_area_option " for="input-option225">Delivery Date</label>
				  <div class="input-group date">
					<input type="text" name="option[225]" value="2011-04-22" data-date-format="YYYY-MM-DD" id="input-option225" class="form-control" />
					<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
					</span></div>
				</div>
																												
				
				<div class="form-group plus-minus-input">
			<div class="qty_option_wrapper">
				<label class="qty_option">Qyt :</label>

				  <input class="input-group-field count_option" type="number" min="1" max="10" name="quantity" value="1"   id="input-quantity" class="form-control" onchange="return sub(this.value)" />
				  <br><br>

                 <div class="jumbotron col-md-10" style="width:100%"> SubTotal of Products Rs.<label id="subtot"><?php echo $shwprod[0]["offerprice"];?></label></div> 

				   <input type="hidden" name="product_id" value="47" />
				   <div class="input-group-button add_to_cart_option">
				   	
					   
				
				    <?php
                 
                 if (!isset($_SESSION["custid"])) {
                     ?>
						<button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block" onclick="login()"><i class="fa fa-shopping-cart"></i> Add to Cart</button>

				<?php
                 }
				 else
				 {
					 ?>



						<input type="submit" name="addtocart"  class="btn btn-primary btn-lg btn-block" value="Add to Cart">



<?php
				 }
				 ?>

				  </div>
			</div>	  


			</form>



<!-- 
					  <div class="input-group-button button_wishlist_wrapper">
						  <div class="btn-group">
							<button type="button" data-toggle="tooltip" class="" title="Add to Wish List"><i class="fa fa-heart-o"></i> wishlist </button>
							<button type="button" data-toggle="tooltip" class="" title="Compare this Product"><i class="fa fa-balance-scale"></i>Compare ($) </button>
						  </div>
					  </div>
			</div> -->
			
				

				<!-- AddThis Button BEGIN -->
			   <div class="addthis_toolbox addthis_default_style" data-url="#"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
				<!-- AddThis Button END  -->
			  </div>
		  
		  </div>
      </div>
      </div>
</div>
</div>
</div>

</div></div>

<script type="text/javascript">

function sub()
{

var p=document.getElementById("offerprice").value;
var q=document.getElementById("input-quantity").value;
var t=p*q;

document.getElementById("subtot").innerHTML=t;


}


function login()

{
	alert('Want to add Products in Cart Login First')
	window.location='login';
}
</script>


<script>
$('#quickproduct .image-additional a').click(function(){
  var thumb = $(this).attr('data-image');
  $('#ezoomer').attr('src',thumb);
});
</script> 
</body>
</html>