<?php
	session_start();
?>

	<!DOCTYPE <!DOCTYPE html>
	<html>
		<body>
			<form method='POST' action="ValidateChake.php">
				
				Name  : <input type='text' name='Name' value=""><br>
				

				
				Email  : <input type='text' name='Email' value=""><br>

				Gender : <input name='Gender' value=""
				<input type="radio" id="Male" name="Gender" value="Male">
				<label for="Male">Male</label>
				<input type="radio" id="Female" name="Gender" value="Female">
				<label for="Female">Female</label>
				<input type="radio" id="other" name="Gender" value="Other">
				<label for="other">Other</label>

			</form>
		</body>
	</html>
