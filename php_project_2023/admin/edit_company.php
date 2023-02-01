<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Company</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" enctype="multipart/form-data">
		
         	 <div class="col-md-12 form-group1">
              <label class="control-label">Company Id</label>
              <input type="text" placeholder="contact Id" required="" name="com_id" value="<?php echo $fetch->com_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Company Name</label>
              <input type="text" placeholder="Name"  name="com_name" value="<?php echo $fetch->com_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Upload Company img :</label>
              <input type="file" placeholder="Mobile Number" name="com_img" required="" value="<?php echo $fetch->com_img;?>">
              <img src="company_img/<?php echo $fetch->com_img;?>" alt="Company Img" width="50px">
            </div>
            <div class="clearfix"> </div><br> 
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Upload Company img :</label>
              <input type="file" placeholder="Mobile Number" name="com_logo" required="" value="<?php echo $fetch->com_logo;?>">
              <img src="company_logo/<?php echo $fetch->com_logo;?>" alt="Company logo" width="50px">
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
