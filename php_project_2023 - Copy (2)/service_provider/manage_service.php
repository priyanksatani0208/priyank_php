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
						<th>Service Image</th>
						<th>Service Description</th>
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
						<td><img src="pic/<?php echo $c->service_img;?>" width="50px" height="50px"/></td>
						<td><?php echo $c ->service_desc ;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
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
