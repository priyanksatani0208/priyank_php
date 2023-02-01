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
                        <th>Model Id</th>
						<th>Company Id</th>
						<th>model Name</th>
						<th>model Image</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_model_arr as $c)
					{
					?>
					  <tr>
                        <td><?php echo $c ->mod_id ;?></td>
						<td><?php echo $c ->com_id ;?></td>
						<td><?php echo $c ->mod_name ;?></td>
						<td><img src="model_img/<?php echo $c ->mod_img ;?>"width="60px" height="60px"/></td>				
						<td><a href="edit_model?edit_mod_id=<?php echo $c->mod_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_mod_id=<?php echo $c->mod_id ?>" class="btn btn-danger">Delete</a></td>
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
