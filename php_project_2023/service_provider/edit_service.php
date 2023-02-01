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
              <label class="control-label">service ID</label>
              <input type="text" placeholder="service Id" required="" name="service_id" value="<?php echo $fetch->service_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Service Name</label>
              <input type="text" placeholder="Payment Type"  name="service_name" value="<?php echo $fetch->service_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Service Price</label>
              <input type="text" placeholder="service price"  name="service_price" value="<?php echo $fetch->service_price;?>">
            </div>
             <div class="clearfix"> </div>
            
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Service description</label>
              <input type="text" placeholder="service description" name="service_desc" required="" value="<?php echo $fetch->service_desc;?>">
            </div>
            <div class="clearfix"> </div><br> 
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">company ID</label>
              <input type="text" placeholder="company ID"  name="com_id" value="<?php echo $fetch->com_id;?>">
            </div>
             <div class="clearfix"> </div>
             
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Model ID</label>
              <input type="text" placeholder="Model ID"  name="mod_id" value="<?php echo $fetch->mod_id;?>">
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
