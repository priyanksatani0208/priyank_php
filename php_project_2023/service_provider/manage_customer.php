<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Customer</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Customer</h2>
           <div class="table table-responsive">
				  <table class="table">
					<thead>
					
					  <tr>
						<th>Contact Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile Number</th>
						<th>Password</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_customer_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c -> cust_id; ?></td>
						<td><?php echo $c -> cust_name; ?></td>
						<td><?php echo $c -> cust_email; ?></td>
						<td><?php echo $c -> cust_mob_num; ?></td>	
						<td><?php echo $c -> cust_password; ?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cust_id=<?php echo $c->cust_id ?>" class="btn btn-danger">Delete</a></td>
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
