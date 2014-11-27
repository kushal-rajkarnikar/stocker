

<?php if($this->session->flashdata('user_message')): ?>

	<span><?php echo $this->session->flashdata('user_message'); ?></span>

<?php endif; ?>	

<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>

	<span align="right"><a href="<?php echo base_url(); ?>user/create">Create New User</a></span>

<?php endif; ?>	

<?php if(is_array($users)): ?>
<table align="center">
	<tr>
		<th>S.N.</th>
		<th>User</th>
		<th>Email</th>
	<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>	
		
		<th>Created on</th>
		<th>Edit</th>
		<th>Delete</th>

	<?php endif; ?>	
	</tr>

	

		<?php foreach($users as $key => $user): ?>

			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $user['user_name']; ?></td>
				<td><?php echo $user['user_email']; ?></td>
				
				<?php if($this->session->userdata('stocker_user_session')['user_level'] == 'admin'): ?>

					<td><?php echo $user['joined_on']; ?></td>
					<td><a href="<?php echo base_url(); ?>user/edit/<?php echo $user['user_id']; ?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>user/delete/<?php echo $user['user_id']; ?>">Delete</a></td>

				<?php endif; ?>	

			</tr>


		<?php endforeach; ?>	


	<?php else:

			echo "No users to show yet!";

		  endif; 

	?>	


</table>