<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage provider</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto;">
				
				<div class="container mt-3">
				  <h2>Manage provider</h2>
            <div class="table table-responsive">
				  <table class="table">
					<thead>
					  <tr>
					    <th>Provider Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile Number</th>
						<th>Address</th>
						<th>Gender</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_provider_arr as $c)
					{
					?>
					  <tr>
					    <td><?php echo $c -> sp_id; ?></td>
						<td><?php echo $c -> sp_name; ?></td>
						<td><?php echo $c -> sp_email; ?></td>
						<td><?php echo $c -> sp_mob_num; ?></td>
						<td><?php echo $c -> sp_address; ?></td>
						<td><?php echo $c -> sp_gender; ?></td>
						<td><a href="status?status_sp_id=<?php echo $c->sp_id ?>" class="btn btn-primary"><?php echo $c->status;?></a></td>
						<td><a href="delete?del_sp_id=<?php echo $c -> sp_id; ?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					<?php
					}
					?>
					</tbody>
				  </table>
				</div>
				</div>
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
