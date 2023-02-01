<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Company</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Company</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Company Id</th>
						<th>Company Name</th>
						<th>Company Image</th>
						<th>Company Logo</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_company_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c ->com_id ;?></td>
						<td><?php echo $c ->com_name ;?></td>
						<td><img src="company_img/<?php echo $c ->com_img ;?>"width="50px" height="50px"/></td>		
						<td><img src="company_logo/<?php echo $c ->com_logo ;?>"width="50px" height="50px"/></td>			
						<td><a href="edit_company?edit_com_id=<?php echo $c->com_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_com_id=<?php echo $c->com_id ?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					<?php
					}
					?>
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
