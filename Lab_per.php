<!DOCTYPE html>
<html>
<head>
	
</head>
<body><center>
	<form method="POST" action="valid.php">
	<table border="1">
		<tr>
			<td colspan="3">
				<h3><center><b> PERSONAL PROFILE </b></center></h3>
			</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="" size="15" /></td>
		</tr>

		<tr>
			<td>Email :</td>
			<td><input type="email" name="email" value="" size="15" /></td>
		</tr>

		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="male">Male 
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="other">Other
			</td>
		</tr>
		
		
		<tr>
			<td>DOB:</td>
			<td><input type="text" name="date" value="" size=5>/
			<input type="text" name="date" value="" size=5>/
			<input type="text" name="date" value="" size=5>(dd/mm/yyyy)</td>
		</tr>

		
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Degree :</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc.
				<input type='checkbox' name="">MSC.
			</td>
		</tr>
		<tr>
			<td>Photo : </td>
			<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
		</tr>

		<tr>
			<td></td>
			<td>
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
</center></body>
</html>