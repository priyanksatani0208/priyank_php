<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Contact</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Contact Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Reply</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
					foreach($contact_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c->contact_id ?></td>
						<td><?php echo $c->name ?></td>
						<td><?php echo $c->email ?></td>
						<td><?php echo $c->message ?></td>
						<td><a href="#" class="btn btn-primary">Reply</a></td>
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
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
