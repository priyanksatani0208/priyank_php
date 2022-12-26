<?php
include_once('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function getmodel(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();	
	}
	else
	{
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("mod_id").innerHTML=xmlhttp.responseText;	
		}
	}
xmlhttp.open("post","modeldata?btn=" + str,true);
xmlhttp.send();
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
  	    
        <form  method="post" enctype="multipart/form-data" name="myform" onsubmit="return validate()" >
		
		    <div class="col-md-12 form-group1 form-last">
              <label for="company">Choose a Company</label><br>
			  <select name="company" onchange="getmodel(this.value)">
			    <option>--select--</option>
			    <?php
					foreach($company_arr as $f)
					{				
			    ?>
				
				<option value="<?php echo $f->com_id;?>"><?php echo $f->com_name; ?></option>
					
				<?php 
					}
				?>
			  </select>	  
            </div>
             <div class="clearfix"> </div><br>
			 
			<div class="col-md-12 form-group1 form-last">
              <label for="model">Choose a Model</label><br>
			  <select name="model" id="mod_id">
			    <option>--select--</option>
			  </select>	  
            </div> 
			 <div class="clearfix"> </div><br><br>
		
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 </div>

</div>
<?php
include_once('footer.php');
?>
