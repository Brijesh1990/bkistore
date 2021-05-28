
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
	 <h3>Product Returns</h3>
				<li><a href="<?php echo $mainurl;?>">Home</a></li>
				<li><a href="<?php echo $mainurl;?>/login">Account</a></li>
				<li><a href="<?php echo $mainurl; ?>/return">Product Returns</a></li>
			  </ul>
	</div>
</div>
<div class="main_padding">
<div id="account-return" class="container-fluid">
    <div class="row"> 
                <div id="content" class="col-sm-9"> 
      <h1>Product Returns</h1>
      <p>Please complete the form below to request an RMA number.</p>
      <form action="https://ebthemer.com/oc/OC00014/index.php?route=account/return/add" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>Order Information</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-10">
              <input type="text" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-order-id">Order ID</label>
            <div class="col-sm-10">
              <input type="text" name="order_id" value="" placeholder="Order ID" id="input-order-id" class="form-control" />
               </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-date-ordered">Order Date</label>
            <div class="col-sm-3">
              <div class="input-group date">
                <input type="text" name="date_ordered" value="" placeholder="Order Date" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Product Information</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-product">Product Name</label>
            <div class="col-sm-10">
              <input type="text" name="product" value="" placeholder="Product Name" id="input-product" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-model">Product Code</label>
            <div class="col-sm-10">
              <input type="text" name="model" value="" placeholder="Product Code" id="input-model" class="form-control" />
               </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-quantity">Quantity</label>
            <div class="col-sm-10">
              <input type="text" name="quantity" value="1" placeholder="Quantity" id="input-quantity" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">Reason for Return</label>
            <div class="col-sm-10">                             <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="1" />
                  Dead On Arrival</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="4" />
                  Faulty, please supply details</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="3" />
                  Order Error</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="5" />
                  Other, please supply details</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="2" />
                  Received Wrong Item</label>
              </div>
                                           </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">Product is opened</label>
            <div class="col-sm-10">
              <label class="radio-inline">                 <input type="radio" name="opened" value="1" />
                                Yes</label>
              <label class="radio-inline">                 <input type="radio" name="opened" value="0" checked="checked" />
                                No</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-comment">Faulty or other details</label>
            <div class="col-sm-10">
              <textarea name="comment" rows="10" placeholder="Faulty or other details" id="input-comment" class="form-control"></textarea>
            </div>
          </div>
          
        </fieldset>
                <div class="buttons clearfix">
          <div class="pull-left"><a href="https://ebthemer.com/oc/OC00014/index.php?route=account/account" class="btn btn-default">Back</a></div>
          <div class="pull-right">
            <input type="submit" value="Submit" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group categories_wrapper_home">
<h4>Account</h4>
	<ul>
	  	 <li> <a href="<?php echo $mainurl;?>/login" class="list-group-item">Login</a></li> <li><a href="<?php echo $mainurl;?>/register" class="list-group-item">  Register</a></li> <li><a href="login.html" class="list-group-item">  Forgotten Password</a></li>
	  	  <li><a href="<?php echo $mainurl;?>/" class="list-group-item">  My Account</a></li>
	  	 <li> <a href="<?php echo $mainurl;?>/Contact" class="list-group-item">  Address Book</a></li> <li><a href="wish-list.html" class="list-group-item">  Wish List</a></li> <li><a href="#" class="list-group-item">  Order History</a></li> <li><a href="#" class="list-group-item">  Downloads</a></li><li><a href="#" class="list-group-item">  Recurring payments</a></li> <li><a href="#" class="list-group-item">  Reward Points</a></li> <li><a href="return.html" class="list-group-item">  Returns</a></li> <li><a href="https://ebthemer.com/oc/OC00014/index.php?route=account/transaction" class="list-group-item">  Transactions</a></li> <li><a href="index.html" class="list-group-item">  Newsletter</a></li>
	  	</ul>
</div>

  </aside>
</div>
</div></div>
<script type="text/javascript">
$('.date').datetimepicker({
	language: 'en-gb',
	pickTime: false
});
//--></script> 
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

