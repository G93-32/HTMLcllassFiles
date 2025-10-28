<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
	<h1>Student Task App</h1>
	<div id="signupform">
		<h2 style="text-align: center; color: white;">Sign Up</h2>
		<form method="post">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" required>
			
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password" id="password" required>
			
			<input type="submit" name="signup" value="signup">
			<div class="formtext">Already have an account? <a href="login.php">Login</a></div>
		</form>
	</div>

	</main>
</body>
</html>