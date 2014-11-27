
	
	<fieldset>
		
		<legend align="center">Stocker: Login Page</legend>

		<br>	

			<form method="POST" action="<?php echo base_url(); ?>home/authenticate">
				
				<table align="center">
					<tr>
						<td>Username: </td>
						<td><input type="text" name="stocker_user_name"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="text" name="stocker_pass_word"></td>
					</tr>
					<tr>
						<td><input type="submit" name="authenticate" value="Login"></td>
					</tr>

				</table>

			</form>

	</fieldset>	

