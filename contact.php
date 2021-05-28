
<--menu end-->
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
	         <h3>Contact Us</h3>
				<li><a href="<?php echo $mainurl;?>/">Home</a></li>
				<li><a href="<?php echo $mainurl;?>/contact">Contact Us</a></li>
			  </ul>
	</div>
</div><!------end banner--------->
<div class="main_padding">
<div id="information-contact" class="container-fluid">
  <div class="row">
                <div id="content" class="col-sm-12">
      <!------address page----->
	   <div class="col-sm-5">
	   <h3>Our Location</h3>
      <div class="panel panel-default">
		<ul>	
						<li><i class="fa fa-map-marker"></i> Address 1</li>
						
						<li class="email"><i class="fa fa-envelope"></i> testing@gmail.com</li>
						
						<li><i class="fa fa-volume-control-phone"></i> (800)123-0045 ; (800)123-0046</li>
					</ul><!------end address page---->
		<div class="social-icons">
		   <h3></h3>
			<ul>
																												
							</ul>
			<div class="clear"></div>
		</div>
        <!-- <div class="panel-body">
          <div class="row">
                        <div class="col-sm-12"><strong>Your Store</strong><br />
              <address>
              Address 1
              </address>
                          </div>
            <div class="col-sm-12"><strong>Telephone</strong><br>
              (800)123-0045 ; (800)123-0046<br />
              <br />
                          </div>
            <div class="col-sm-12">
                                        </div>
          </div>
        </div> -->
      </div>
	</div>
	<!---------contact page------------>
      	 <div class="col-sm-7">
      <form action="contact.html" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <h3>Contact Form</h3>
          <div class="form-group required">
           <!-- <label class="col-sm-2 control-label" for="input-name">Your Name</label> -->
            <div class="col-sm-12">
              <input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Your Name"/>
                          </div>
          </div>
          <div class="form-group required">
            <!--<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label> -->
            <div class="col-sm-12">
              <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="E-Mail Address"/>
                          </div>
          </div>
          <div class="form-group required">
          <!--  <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>-->
            <div class="col-sm-12">
              <textarea name="enquiry" rows="7" id="input-enquiry" class="form-control" placeholder="Enquiry"></textarea>
                          </div>
          </div>
          
        </fieldset>
        <div class="buttons">
          <div class="pull-left">
            <input class="btn btn-primary" type="submit" value="Submit" />
          </div>
        </div>
      </form>
	 </div>
      </div>
    </div>
</div></div>
<!-------/end contact page--------->
