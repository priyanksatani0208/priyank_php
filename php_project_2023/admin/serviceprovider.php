<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Service Provider</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post">
         	
            <div class="col-md-12 form-group1">
              <label class="control-label">Service Provider Name</label>
              <input type="text" placeholder="Service Provider Name" required="" name="sp_name">
            </div>
            <div class="clearfix"> </div><br>
           
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" required="" name="sp_email">
            </div>
             <div class="clearfix"> </div>   

          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="sp_mob_num" required="">
            </div>
            <div class="clearfix"> </div><br>
         
 
              <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <textarea  placeholder="Address" name="sp_address" required=""></textarea>
            </div>
             <div class="clearfix"> </div><br>

            <div class="col-md-12 form-group1 group-mail">
			<label class="control-label">Gender</label><br>
            Male  :&nbsp;&nbsp; <input type="radio"  name="sp_gender" value="male">&nbsp;&nbsp;&nbsp;&nbsp;
			Female:&nbsp;&nbsp;<input type="radio"  name="sp_gender" value="female"> 
			<div class="clearfix"> </div>
            </div>
             
			 
			
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Password</label>
              <input type="password" placeholder="password" name="password" required="">
            </div>
            <div class="clearfix"> </div><br>            
                   
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
