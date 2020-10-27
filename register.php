<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="styleregister.css">
</head>
<body>
	<form action="process_register.php" method="post">
		<fieldset>
			<div class="registerbox">
				<div class="header">
				<h1>Register</h1>
				</div>
				
				
				<div class="textbox">
					<label for="first_name">First Name</label>
					<input type="text" name="fname" id="first_name">

				</div>
				<div class="textbox">
					<label for="second_name">Second Name</label>
					<input type="text" name="sname" id="second_name">
				</div>
				<div class="textbox">
					<label for="email_address">Email Address</label>
					<input type="email" name="eaddress" id="email_address">
				</div>
				<div class="textbox">
					<label for="user_name">User Name</label>
					<input type="text" name="uname" id="user_name">
				</div>
				<div class="textbox">
					<label for="password">Password</label>
					<input type="password" name="pword" id="password">
				</div>
				<div class="textbox">
					<label for="dob">Date of Birth</label>
					<input type="Date" name="dbirth" id="dob">
				</div>
				
					
				<div class="radio">
					<label id="g">Gender</label>
					<label for="g1">Male</label>
					<input type="radio" name="gender" value="male" id="male">
					<label for="g1">Female</label>
					<input type="radio" name="gender" value="female" id="female">
				</div>
				
				<div class="button">
					<input type="submit" name="register" value="Register">
				</div>



			</div>

		


	</fieldset>
	</form>
	

</body>
</html>