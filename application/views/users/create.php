<form method="POST" action="<?php echo base_url(); ?>user/create_db" onsubmit="validate()">
<table>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="user_name" ></td>

	</tr>
	
	<tr>
		<td>Password: </td>
		<td><input type="password" name="user_pass_word" id="pass-word" ></td>
		
	</tr>
	<tr>
		<td>Re-Password: </td>
		<td><input type="password" name="re_pass_word" id="re-pass-word" ></td>
		
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" name="user_email" ></td>
		
	</tr>
	<tr>
		<td>Level: </td>
		<td><input type="radio" name="user_level" value="admin" >Admin</td>
		<td><input type="radio" name="user_level" value="general" >General</td>
		
	</tr>
	<tr>
		<td><input type="submit" name="create_user" value="Create User" ></td>
	</tr>

</table>

</form>

<script >
	
	function validate(){

		var password 	=	document.getElementByID('pass-word').value;
		var re_password	=	document.getElementByID('re-pass-word').value;

		if(password == re_password){

			return true;
		
		}else{

			alert('Password and Re-Passwords do not match!!');
			return false;

		}

	}

</script>
