

<?php if($this->session->flashdata('store_message')): ?>

	<span><?php echo $this->session->flashdata('store_message'); ?></span>

<?php endif; ?>	

<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>

	<span align="right"><a href="<?php echo base_url(); ?>store/create">Create New Store</a></span>

<?php endif; ?>	

<?php if(is_array($stores)): ?>
<table align="center">
	<tr>
		<th>S.N.</th>
		<th>Store</th>
		<th>Stock</th>
	<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>	
		
		<th>Created on</th>
		<th>Edit</th>
		<th>Delete</th>

	<?php endif; ?>	
	</tr>

	

		<?php foreach($stores as $key => $store): ?>

			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $store['store_name']; ?></td>
				<td><?php echo $store['store_stock']; ?></td>
				
				<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>

					<td><?php echo $stock['created_on']; ?></td>
					<td><a href="<?php echo base_url(); ?>stock/edit/<?php echo $stock['store_id']; ?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>store/delete/<?php echo $store['stock_id']; ?>">Delete</a></td>

				<?php endif; ?>	

			</tr>


		<?php endforeach; ?>	


	<?php else:

			echo "No users to show yet!";

		  endif; 

	?>	


</table>