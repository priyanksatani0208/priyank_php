<?php
include_once('header.php');
?>
<script>
      function validate()
	  {
		      var service_name=document.forms["myform"]["service_name"].value;
			 if(service_name=="" || service_name==null)
			 {
				 alert("please fill out the Service Name");
				 return false;
			 }
			 
			 var service_price=document.forms["myform"]["service_price"].value;
			 if(service_price=="" || service_price==null)
			 {
				 alert("please fill out the Service Price");
				 return false;
			 }
			 
			 var service_img=document.forms["myform"]["service_img"].value;
			 if(service_img=="" || service_img==null)
			 {
				 alert("please fill out the Image");
				 return false;
			 }
			 
			  var service_desc=document.forms["myform"]["service_desc"].value;
			 if(service_desc=="" || service_desc==null)
			 {
				 alert("please fill out the few Word discription.");
				 return false;
			 }
	  }
</script>
 
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
  	    
        <form  method="post" enctype="multipart/form-data" name="myform" onsubmit="return validate()" >
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Service Name</label>
              <input type="text" placeholder="service_Name"  name="service_name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">service Price</label>
              <input type="text" placeholder="service Price"  name="service_price">
            </div>
          
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">service Image</label>
              <input type="file" placeholder=""   name="service_img">
            </div>
            <div class="clearfix"> </div>
            </div>

              <div class="col-md-12 form-group1 ">
              <label class="control-label">Discription</label>
              <textarea  placeholder="Discription"  name="service_desc"></textarea>
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
