<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage User</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage User</h2>
				<div class="table table-responsive">
				  <table class="table">
					<thead>
					  <tr>
						<th>Profile</th>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>LAG</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
					foreach($customer_arr as $c)
					{
					?>
					  <tr>
						<td><img src="../web/upload/customer/<?php echo $c->file;?>" width="30px" height="30px"/></td>
						<td><?php echo $c->cust_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->email;?></td>
						<td><?php echo $c->gender;?></td>
						<td><?php echo $c->lag;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
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
