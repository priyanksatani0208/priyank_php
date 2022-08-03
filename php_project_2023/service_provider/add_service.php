<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add service</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Service Name</label>
              <input type="text" placeholder="service_Name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">service Price</label>
              <input type="text" placeholder="service Price" required="">
            </div>
          
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">service Image</label>
              <input type="file" placeholder="" name="sp_image" required="">
            </div>
            <div class="clearfix"> </div>
            </div>

              <div class="col-md-12 form-group1 ">
              <label class="control-label">Discription</label>
              <textarea  placeholder="Discription" name="sp_add" required=""></textarea>
            </div>
             <div class="clearfix"> </div>

            
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
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
