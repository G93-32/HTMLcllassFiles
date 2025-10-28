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
		<?php
		//connect to dbitjuly db
		include 'connect.php';
		//check if user has clicked signup
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//collect signup data
		$email = $_POST['email'];
		$password = $_POST['password'];
		//encrypt/hash the password:
		//password_hash()
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		//write query to insert
		$query = "INSERT INTO student_accounts(email, password) VALUES ('$email', '$password_hash')";
		//only with double quotes you can add variables directly
		$run_query = mysqli_query($connect, $query);
		if($run_query){
			echo "<div style='color: green; text-align: center;'>Signup successful!</div>";
		} else {
			echo die(mysqli_error($connect));
		}

	}
		?>
	</div>

	</main>
</body>
</html>