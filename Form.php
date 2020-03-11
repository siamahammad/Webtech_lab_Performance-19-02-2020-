<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center>
	<form method="POST" action="validate.php">
	<table border="1" width="500px">
		<tr>
			<td colspan="3"> 
				<h3><center>PERSON PROFILE<center></h3>
			</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"  value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" id="male" name="gender" value="male">Male 
				<input type="radio" id="female" name="gender" value="female">Female
		        <input type="radio" id="other" name="gender" value="other">Other
			</td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>
				<input type="text" name="dd" value="" size="5px"/>/
				<input type="text" name="mm" value="" size="5px"/>/
				<input type="text" name="yy" value="" size="5px"/> <i>(dd/mm/yyy)</i>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
                    <option>AB+</option>
				</select>
			</td>
            <td></td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="degree" value="ssc">SSC
				<input type="checkbox" name="degree" value="hsc">HSC
				<input type="checkbox" name="degree" value="bsc">BSc.
				<input type="checkbox" name="degree" value="msc">MSc.
			</td>
            <td></td>
		</tr>
        <tr>
            <td>Photo</td>
            <td colspan="2">
            <input type="file" name="file" value=""> 
            </td>
        </tr>
        <tr><td colspan="3"><br></td></tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
	</form>
    </center>
</body>
</html>