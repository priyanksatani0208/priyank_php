<?php
include_once('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--banner-->	
        <div class="banner">
            <h2>
            <a href="dashboard">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Add  Model</span>
            </h2>
        </div>
<!--//banner-->

<!--grid-->
 	<div class="validation-system">		
 		<div class="validation-form">
        <form  method="post" enctype="multipart/form-data" name="myform"  >
        <div class="col-md-12 form-group1 form-last">
              <label for="company">Choose a Company</label><br>
			  <select name="com_id" >
			    <option>--select--</option>
			    <?php
					foreach($manage_servic_arr as $f)
					{				
			    ?>
				
				<option value="<?php echo $f->com_id;?>"><?php echo $f->com_name; ?></option>
				

				<?php 
					}
				?>
			  </select>	  
            </div>
            <div class="clearfix"> </div><br>

			<div class="col-md-12 form-group1">
              <label class="control-label">Model Name :</label>
              <input type="text" placeholder="Model Name" required="" name="mod_name">
            </div>
			<div class="clearfix"> </div><br>

			<div class="col-md-12 form-group1">
              <label class="control-label">Model Image :</label>
              <input type="file" placeholder="Model Image" required="" name="mod_img">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>

</div>
<?php
include_once('footer.php');
?>
