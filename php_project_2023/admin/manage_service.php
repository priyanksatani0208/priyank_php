<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage service</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage service</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Servic Id</th>
						<th>Service Name</th>
						<th>Service Price</th>
						<th>Service Description</th>
						<th>Company ID</th>
						<th>Model ID</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_service_arr as $c)
					{?>
					  <tr>
						<td><?php echo $c ->service_id ;?></td>
						<td><?php echo $c ->service_name ;?></td>
						<td><?php echo $c ->service_price ;?></td>
						<td><?php echo $c ->service_desc ;?></td>
						<td><?php echo $c ->com_id ;?></td>
						<td><?php echo $c ->mod_id;?></td>
						<td><a href="edit_service?edit_service_id=<?php echo $c->service_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_service_id=<?php echo $c->service_id ?>" class="btn btn-danger">Delete</a></td>
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
