
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
	 <h3>Account Login</h3>
				<li><a href="<?php echo $mainurl?>/">Home</a></li>
				<li><a href="<?php echo $mainurl?>/wish-list">Account</a></li>
				<li><a href="<?php echo $baseurl?>login">Login</a></li>
			  </ul>
	</div>
</div>
<!------ /end ---->
<div class="main_padding">
<div id="account-login" class="container-fluid">
      <div class="row">
                <div id="content" class="col-sm-9">
      <div class="row">
      	<!------ new custumers add ---------->
        <div class="col-sm-6">
          <div class="well">
            <h2>New Customer</h2>
            <p><strong>Register Account</strong></p>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a href="<?php $mainurl;?>/register>" class="btn btn-primary">Continue</a></div>
        </div>
        <!--- /end ---->
        <!------custumers login and returning form---->
        <div class="col-sm-6">
          <div class="well">
            <h2>Forget Password</h2>
            <p><strong>I am a returning customer</strong></p>
            <form action="#" method="post">
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail Address</label>
                <input type="text" name="em" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
              </div>
            
              <input type="submit" name="frg" value="Submit" class="btn btn-primary" />
        </form>
          </div>
        </div>
      </div>
      </div><!---- /end form --->
      <!----wishlist page---->
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group categories_wrapper_home">
<h4>Account</h4>
	<ul>
	  	 <li> <a href="<?php echo $mainurl;?>/login" class="list-group-item"> Login</a></li> <li><a href="<?php $mainurl?>register" class="list-group-item">  Register</a></li> <li><a href="#" class="list-group-item">  Forgotten Password</a></li>
	  	  <li><a href="<?php echo $mainurl; ?>" class="list-group-item">  My Account</a></li>
	  	 <li> <a href="contact.html" class="list-group-item">  Address Book</a></li> <li><a href="<?php $mainurl?>" class="list-group-item">  Wish List</a></li> <li><a href="#" class="list-group-item">  Order History</a></li> <li><a href="#" class="list-group-item">  Downloads</a></li><li><a href="#" class="list-group-item">  Recurring payments</a></li> <li><a href="#" class="list-group-item">  Reward Points</a></li> <li><a href="<?php $mainurl?>" class="list-group-item"> Returns</a></li> <li><a href="#" class="list-group-item">  Transactions</a></li> <li><a href="#" class="list-group-item">  Newsletter</a></li>
	  	</ul>
</div>

  </aside>
</div><!---- /end --->
</div></div>
<style>
	#newsletterModal .modal-body{
		background-image:url('#');
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
														  <input type="text" id="input-newsletter-email" class="form-control" placeholder="E-Mail Address" value="" name="email"/>
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
