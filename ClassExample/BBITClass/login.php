<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
	<h1>Student Task App</h1>
	<div id="loginform">
		<h2 style="text-align: center; color: white;">Login</h2>
		<form method="post">
			
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" required>
			
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password" id="password" required>
			
			<input type="submit" name="login" value="login">
			<div class="formtext">Dont have an account? <a href="signup.php">Signup</a></div>
		</form>
	</div>

	</main>
</body>
</html>