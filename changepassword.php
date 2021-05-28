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


    <div class="col-sm-4">
    <div class="jumbotron">
    <p align="center" style="color:red">Welcome :<?php echo ucfirst($_SESSION["fname"]);?></p>
    <hr>
    <ul class="">
								<li><a href="<?php echo $mainurl;?>manage_profile"><span class="fa fa-user"></span> Manage Profile</a>
								</li>
								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-bell"></span> Manage Notifications</a>
								</li>

								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-bell"></span> Manage Orders</a>
								</li>

								<li><a href="<?php echo $mainurl;?>change_password"><span class="fa fa-lock"></span> change Pasword</a>
								</li>

                
								<li><a href="<?php echo $mainurl;?>"><span class="fa fa-trash btn btn-danger"> Delete Account</span></a>
								</li>

							</ul>					  
    
    </div> 


    
    </div>



<div class="col-sm-8">
<div class="card">

<div class="card-body">
<div class="jumbotron">




<form  method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Change Your Password</legend>
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
            <label class="col-sm-4 control-label" for="input-firstname">Enter Old Password</label>
            <div class="col-sm-6">
              <input type="password" name="opass" placeholder="Old Password " id="input-firstname" class="form-control" />
               </div>
          </div>


          <div class="form-group required">
            <label class="col-sm-4 control-label" for="input-firstname">Enter New Password</label>
            <div class="col-sm-6">
              <input type="password" name="npass" placeholder="New Password " id="input-firstname" class="form-control" />
               </div>
          </div>

          
          <div class="form-group required">
            <label class="col-sm-4 control-label" for="input-firstname">Enter Confirm Password</label>
            <div class="col-sm-6">
              <input type="password" name="cpass" placeholder="Confirm Password " id="input-firstname" class="form-control" />
               </div>
          </div>
         
       
        
                <div class="buttons">
       
        
            <input type="submit" name="chng" value="Submit" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>





</div>

</div>    
</div>
      
       
  
      </div>
      </div>
    </div>
</div>

</div>
<!-------/end contact page--------->
