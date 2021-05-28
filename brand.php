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
		   <h3>Find Your Favorite Brand</h3>
						<li><a href="<?php echo $mainurl;?>/">Home</a></li>
						<li><a href="<?php echo $mainurl;?>/brands">Brand</a></li>
					  </ul>
		</div>
	</div>
</div>
<!------   /end-banner ----->
<div class="main_padding">
<div id="product-manufacturer" class="container-fluid">
	<!------- brands-section-page --------->
  <div class="row">
                <div id="content" class="col-sm-12">
      <h1>Find Your Favorite Brand</h1>
            <p><strong>Brand Index:</strong>         &nbsp;&nbsp;&nbsp;<a href="#">A</a>         &nbsp;&nbsp;&nbsp;<a href="#">C</a>         &nbsp;&nbsp;&nbsp;<a href="#">H</a>         &nbsp;&nbsp;&nbsp;<a href="#">P</a>         &nbsp;&nbsp;&nbsp;<a href="#">S</a>  </p>
		
      	  <div class="brand-border">
      <h2 id="A">A</h2>
                  <div class="row">         <div class="col-sm-3"><a href="#">Apple</a></div>
         </div></div>
                  	  <div class="brand-border">
      <h2 id="C">C</h2>
                  <div class="row">         <div class="col-sm-3"><a href="#">Canon</a></div>
         </div></div>
                  	  <div class="brand-border">
      <h2 id="H">H</h2>
                  <div class="row">         <div class="col-sm-3"><a href="#">Hewlett-Packard</a></div>
                <div class="col-sm-3"><a href="#">HTC</a></div>
         </div></div>
                  	  <div class="brand-border">
      <h2 id="P">P</h2>
                  <div class="row">         <div class="col-sm-3"><a href="#">Palm</a></div>
         </div></div>
                  	  <div class="brand-border">
      <h2 id="S">S</h2>
                  <div class="row">         <div class="col-sm-3"><a href="#">Sony</a></div>
         </div></div>
                              </div>
    </div>
</div></div>
<!----- /end brand-section---->
