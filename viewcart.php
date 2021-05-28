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


<div class="main_padding">
<div id="information-contact" class="container-fluid">
  <div class="row">
    <div id="content" class="col-sm-12">
      <!------address page----->
	 
	<!---------contact page------------>
    <div class="col-sm-12">

    <div class="card">
<div class="card-header"><h4>MyCart</h4></div>
<div class="card-body">
<center>
<img src="<?php echo $baseurl;?>image/empty_cart.webp" style="width:35%; height:250px">

<h4 align="center">Missing Cart items?</h4>
<p>Login to see the items you added previously</p>
<a href="<?php echo $mainurl;?>login"><button type="button" class="btn btn-lg btn-danger">Login</button></a>

</center>
</div>    
    
    </div>
      
       
  
      </div>
      </div>
    </div>
</div>

</div>
<!-------/end contact page--------->
