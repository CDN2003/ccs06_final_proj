<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>
		<form action="save-registration.php" method="POST">
			<label for="first_name">First Name:</label>
			<input type="text" id="first_name" name="first_name"><br>

			<label for="middle_name">Middle Name:</label>
			<input type="text" id="middle_name" name="middle_name"><br>

			<label for="last_name">Last Name:</label>
			<input type="text" id="last_name" name="last_name"><br>

			<label for="email">Email Address:</label>
			<input type="email" id="email" name="email"><br>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" min="8"><br>

			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" min="8"><br>

			<label for="birthdate">Birthdate:</label>
			<input type="date" id="birthdate" name="birthdate"><br>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select><br>

			<label for="address">Address:</label>
			<input type="text" id="address" name="address"><br>

			<label for="contact_number">Contact Number:</label>
			<input type="tel" id="contact_number" name="contact_number"><br>

			<input type="submit" value="Register">
		</form>
</body>
</html>