<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Feedback</span>
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
              <input type="text" placeholder="Feedback Id" required="" name="feedback_id" value="<?php echo $fetch->feedback_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Customer Name</label>
              <input type="text" placeholder="Name"  name="cust_name" value="<?php echo $fetch->cust_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Customer Mobile No</label>
              <input type="text" placeholder="Email"  name="cust_mob_num" value="<?php echo $fetch->cust_mob_num;?>">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Customer Email</label>
              <input type="text" placeholder="Email"  name="cust_email" value="<?php echo $fetch->cust_email;?>">
            </div>
             <div class="clearfix"> </div>   

          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Message</label>
              <input type="text" placeholder="Mobile Number" name="feedback_message" required="" value="<?php echo $fetch->feedback_message;?>">
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
