<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Customer</span>
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
              <input type="text" placeholder="Customer Id" required="" name="cust_id" value="<?php echo $fetch->cust_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Customer Name</label>
              <input type="text" placeholder="Customer Name"  name="cust_name" value="<?php echo $fetch->cust_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
           
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email"  name="cust_email" value="<?php echo $fetch->cust_email;?>">
            </div>
             <div class="clearfix"> </div>   

          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="cust_mob_num" required="" value="<?php echo $fetch->cust_mob_num;?>">
            </div>
            <div class="clearfix"> </div><br>
         
 
             <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <input type="text" placeholder="Address" name="address"  value="<?php echo $fetch->address;?>">
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
