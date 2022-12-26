<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post">
		
         	 <div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" placeholder="contact Id" required="" name="contact_id" value="<?php echo $fetch->contact_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name"  name="contact_name" value="<?php echo $fetch->contact_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
           
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email"  name="contact_email" value="<?php echo $fetch->contact_email;?>">
            </div>
             <div class="clearfix"> </div>   

          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Message</label>
              <input type="text" placeholder="Mobile Number" name="contact_message" required="" value="<?php echo $fetch->contact_message;?>">
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
