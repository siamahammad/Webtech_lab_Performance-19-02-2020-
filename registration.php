<?php
session_start();

?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form>
	<fieldset>
		<legend><b>REGISTRATION</b></legend>
	<table>
			<tr>
			<td>ID: </td>
			</tr>
			<tr>
			<td><input type="number" name="ID" value=""/></td>
		</tr>
	
		<tr>
			<td>Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="password" value=""/></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			</tr>
			<tr>
			<td> <input type="password" name="ConfirmPassword" value=""/></td>
		</tr>
		<tr>
			<td>Name:</td>
		</tr>
		<tr>
			
			<td><input type="text" name="name" value="" size="5" /></td>
		</tr>

		<tr>
			<td>User Type: </td>
			
			</tr>
			<tr>
			<td> 
				<input type="radio" name="user" value="">User
				<input type="radio" name="admin" value="">Admin
			</td>
		</tr>
		
			<td>
				<input type="button" name="" value="Sign Up">
			    <a href="Login.php"> Sign In</a>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>


<?php
	if(isset($_POST['submit']))
	{
	if (empty(trim($ID)) || (empty(trim($password))
	}
		

<php

