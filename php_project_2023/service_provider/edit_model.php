<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Model</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" enctype="multipart/form-data">
	    	<div class="col-md-12 form-group1">
              <label class="control-label">Model Id</label>
              <input type="text" placeholder="Model Id" required="" name="mod_id" value="<?php echo $fetch->mod_id;?>">
            </div>
            <div class="clearfix"> </div><br>

         	 <div class="col-md-12 form-group1">
              <label class="control-label">Company Id</label>
              <input type="text" placeholder="Company Id" required="" name="com_id" value="<?php echo $fetch->com_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Model Name</label>
              <input type="text" placeholder="Name"  name="mod_name" value="<?php echo $fetch->mod_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Upload Model img :</label>
              <input type="file" placeholder="Mobile Number" name="mod_img" required="" value="<?php echo $fetch->mod_img;?>">
              <img src="model_img/<?php echo $fetch->mod_img;?>" alt="Model Img" width="50px">
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
