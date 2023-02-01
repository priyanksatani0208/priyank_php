<?php
include_once('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--banner-->	
        <div class="banner">
            <h2>
            <a href="dashboard">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Add Model</span>
            </h2>
        </div>
<!--//banner-->

<!--grid-->
 	<div class="validation-system">		
 		<div class="validation-form">
        <form  method="post" enctype="multipart/form-data" name="myform"  >
		    <div class="col-md-12 form-group1 form-last">  
			
            <div class="clearfix"> </div><br>
			<div class="col-md-12 form-group1">
              <label class="control-label">Company Name :</label>
              <input type="text" placeholder="Company Name" required="" name="com_name">
            </div>
			<div class="clearfix"> </div><br>

			<div class="col-md-12 form-group1">
              <label class="control-label">Company Image :</label>
              <input type="file" placeholder="Service description"  name="com_img">
      </div>
            <div class="clearfix"> </div><br>
           
      <div class="col-md-12 form-group1">
        <label class="control-label">Company Logo :</label>
        <input type="file" placeholder="Service description"  name="com_logo">
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
