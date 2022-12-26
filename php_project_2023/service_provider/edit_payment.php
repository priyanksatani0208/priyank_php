<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post">
		
         	 <div class="col-md-12 form-group1">
              <label class="control-label">Payment ID</label>
              <input type="text" placeholder="Payment Id" required="" name="payment_id" value="<?php echo $fetch->payment_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Payment Type</label>
              <input type="text" placeholder="Payment Type"  name="payment_type" value="<?php echo $fetch->payment_type; ?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Cust ID</label>
              <input type="text" placeholder="Cust Id"  name="cust_id" value="<?php echo $fetch->cust_id;?>">
            </div>
             <div class="clearfix"> </div>
            
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Service ID</label>
              <input type="text" placeholder="Mobile Number" name="service_id" required="" value="<?php echo $fetch->service_id;?>">
            </div>
            <div class="clearfix"> </div><br> 
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Booking ID</label>
              <input type="text" placeholder="Booking ID"  name="booking_id" value="<?php echo $fetch->booking_id;?>">
            </div>
             <div class="clearfix"> </div>   

          
                         
          
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
