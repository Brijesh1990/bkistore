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
	<div class="container">
	 <ul class="breadcrumb">
	 <h3>Register Account</h3>
				<li><a href="<?php echo $mainurl;?>/">Home</a></li>
				<li><a href="wish-list.html">Account</a></li>
				<li><a href="<?php echo $mainurl;?>/register">Register</a></li>
			  </ul>
	</div>
</div>
<!----banner end---->
<!-------start register form------------>
<div class="main_padding">
<div id="account-register" class="container-fluid">
    <div class="row">
                <div id="content" class="col-sm-9">
      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <a href="<?php echo $mainurl;?>login">login page</a>.</p>
      <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-2 control-label">Customer Group</label>
            <div class="col-sm-10">                            <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked" />
                  Default</label>
              </div>
                            </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">User Name</label>
            <div class="col-sm-10">
              <input type="text" name="uname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="fname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="em" value="" placeholder="E-Mail" id="input-email" class="form-control" />
               </div>
          </div>

          <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="pass" value="" placeholder="Password" id="input-password" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="cpass" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
               </div>
          </div>
        </fieldset>


        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Upload Photo</label>
            <div class="col-sm-10">
              <input type="file" name="img" value="" placeholder="Image" id="input-telephone" class="form-control" />
               </div>
          </div>


          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
            <div class="col-sm-10">
              <input type="tel" name="mob" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
               </div>
          </div>
          </fieldset>
       


          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Address</label>
            <div class="col-sm-10">
              <textarea name="add" value="" placeholder="Address" id="input-telephone" class="form-control"></textarea>

               </div>
          </div>



          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Select State</label>
            <div class="col-sm-10">
              <select  name="state" value="" placeholder="Satate" id="input-telephone" class="form-control">
              <option value="">-Select State-</option>
              <?php
               foreach($st as $st1)

          {
                ?>
              <option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
 <?php
 
}
?>
              </select>
               </div>
          </div>
          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Select City</label>
            <div class="col-sm-10">
              <select  name="city" value="" placeholder="Satate" id="input-telephone" class="form-control">
              <option value="">-Select City-</option>
              <?php
              foreach($ct as $ct1)

{
      ?>
    <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
<?php

}


?>
              
              </select>
               </div>
          </div>
        <!-- <fieldset>
          <legend>Newsletter</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label">Subscribe</label>
            <div class="col-sm-10">               <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" />
                Yes</label>
              <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" checked="checked" />
                No</label>
               </div>
          </div>
        </fieldset> -->
        
                <div class="buttons">
          <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
                        <input type="checkbox" name="agree" value="1" />
                        &nbsp;
            <input type="submit" name="reg" value="Register" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
      <!-----end register form---->
      <!-------wishlist area----->
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group categories_wrapper_home">
<h4>Account</h4>
	<ul>
	  	 <li> <a href="<?php echo $mainurl;?>/login" class="list-group-item">  Login</a></li> <li><a href="<?php echo $mainurl;?>/register" class="list-group-item">  Register</a></li> <li><a href="<?php echo $mainurl;?>/register" class="list-group-item">  Forgotten Password</a></li>
	  	  <li><a href="<?php echo $mainurl;?>/login" class="list-group-item">  My Account</a></li>
	  	 <li> <a href="<?php echo $mainurl;?>/contact" class="list-group-item">  Address Book</a></li> <li><a href="<?php echo $mainurl;?>/" class="list-group-item">  Wish List</a></li> <li><a href="#" class="list-group-item">  Order History</a></li> <li><a href="#">  Downloads</a></li><li><a href="#" class="list-group-item">  Recurring payments</a></li> <li><a href="#" class="list-group-item">  Reward Points</a></li> <li><a href="return.html" class="list-group-item">  Returns</a></li> <li><a href="#" class="list-group-item">  Transactions</a></li> <li><a href="index.html" class="list-group-item">  Newsletter</a></li>
	  	</ul>
</div>
<!--------end wishlist area--------->
  </aside>
</div>
</div></div>
 
<style>
	#newsletterModal .modal-body{
		background-image:url('');
	}
	
</style>
<div id="newsletterModal" class="modal fade newsletter_popup" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content swing">
			<button type="button" class="close closepopup" data-dismiss="modal"><img src="<?php echo $baseurl;?>image/close_news.png" alt="close_news" title="close_news"/></button>

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

