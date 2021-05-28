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

                
								<li><a href="<?php echo $mainurl;?>manage_profile?delprofile=<?php echo $custprof[0]["custid"]; ?>" onclick="return confirm('Are You sure to Delete Account')"><span class="fa fa-trash btn btn-danger"> Delete Account</span></a>
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
          <legend>Update Your Profile</legend>
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
              <input type="text" name="uname" value="<?php echo $custprof[0]["username"];?>" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="fname" value="<?php echo $custprof[0]["firstname"];?>" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lname" value="<?php echo $custprof[0]["lastname"];?>" placeholder="Last Name" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="em"  value="<?php echo $custprof[0]["email"];?>" placeholder="E-Mail" id="input-email" class="form-control" />
               </div>
          </div>

      
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Upload Photo</label>
            <div class="col-sm-10">
            <img src="<?php echo $custprof[0]["photo"];?>" width="350px" height="125px">
              <input type="file" name="img" value="" placeholder="Image" id="input-telephone" class="form-control" />
               </div>
          </div>


          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
            <div class="col-sm-10">
              <input type="tel" name="mob" value="<?php echo $custprof[0]["mobile"];?>" placeholder="Telephone" id="input-telephone" class="form-control" />
               </div>
          </div>
          </fieldset>
       


          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Address</label>
            <div class="col-sm-10">
              <textarea name="add"  placeholder="Address" id="input-telephone" class="form-control">
              <?php echo $custprof[0]["address"];?>
              </textarea>

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
              if ($custprof[0]["sid"]==$st1["sid"]) {
                  ?>
 
              <option value="<?php echo $custprof[0]["sid"]; ?>" selected="selected"><?php echo $custprof[0]["sname"]; ?></option>
 

 
 <?php
              } else {
                  ?>

<option value="<?php echo $st1["sid"]; ?>"><?php echo $st1["sname"]; ?></option>
 
<?php
              }
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

    if($custprof[0]["ctid"]==$ct1["ctid"])
    {
      ?>
    <option value="<?php echo $custprof[0]["ctid"];?>" selected="selected"><?php echo $custprof[0]["ctname"];?></option>

<?php

}

else
{
    ?>

<option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>

 <?php
}
}
?>             
              </select>
               </div>
          </div>
       
        
                <div class="buttons">
       
        
            <input type="submit" name="upd" value="Update" class="btn btn-primary" />
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
