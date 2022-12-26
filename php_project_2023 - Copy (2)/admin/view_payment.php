<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>View Payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>View Payment</h2>
             <div class="table-responsive">
				  <table class="table">
					<thead>
					  <tr>
						<th>Payment_Id</th>
						<th>Paument_type</th>
						<th>Cust_id</th>
						<th>Service_id</th>
						<th>Booking_id</th>
						</tr>
					</thead>
					<?php
					foreach($manage_payment_arr as $c)
					{
					?>
					<tbody>
					  <tr>
						<td><?php echo $c->payment_id ;?></td>
						<td><?php echo $c->payment_type ;?></td>
						<td><?php echo $c->cust_id ;?></td>
						<td><?php echo $c->service_id ;?></td>
						<td><?php echo $c->booking_id ;?></td>
					
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
