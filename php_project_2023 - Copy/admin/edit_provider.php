<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Provider</span>
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
              <input type="text" placeholder="Service Provider ID" required="" name="sp_id" value="<?php echo $fetch->sp_id;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Provider Name</label>
              <input type="text" placeholder="Service Provider Name"  name="sp_name" value="<?php echo $fetch->sp_name; ?>">
            </div>
            <div class="clearfix"> </div><br>
           
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email"  name="sp_email" value="<?php echo $fetch->sp_email;?>">
            </div>
             <div class="clearfix"> </div>   

          
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="sp_mob_num" required="" value="<?php echo $fetch->sp_mob_num;?>">
            </div>
            <div class="clearfix"> </div><br>
         
 
             <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <input type="text" placeholder="Address" name="sp_address"  value="<?php echo $fetch->sp_address;?>">
            </div>
			
             <div class="clearfix"> </div><br>

            <div class="col-md-12 form-group1 group-mail">
			<label class="control-label">Gender</label><br>
            <?php
					$sp_gender=$fetch->sp_gender;
					if($sp_gender=="Male")
					{
					?>
					Male: <input type="radio" name="gender"  value="Male" checked/>&nbsp;&nbsp;&nbsp;&nbsp;
					Female: <input type="radio" name="gender" value="Female" /><br><br>
					<?php
					}
					else
					{
					?>
					Male: <input type="radio" name="gender"  value="Male" />&nbsp;&nbsp;&nbsp;&nbsp;
					Female: <input type="radio" name="gender" value="Female" checked /><br><br>
					<?php
					}
			?> 
			
			<div class="clearfix"> </div>
            </div>   
                   
          
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
