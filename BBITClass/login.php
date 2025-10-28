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
		<?php
		//connect to dbitjuly db
		include 'connect.php';
		//check if user has clicked login
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//pick login data
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM student_accounts WHERE email='$email'";
			$run_query = mysqli_query($connect, $query);
			if($run_query){
				//check if a record is produced from performing query: mysqli_num_rows()
				if(mysqli_num_rows($run_query) > 0){
					$record = mysqli_fetch_assoc($run_query);
					$password_hash = $record['password'];
					//password_verify()
					if(password_verify($password, $password_hash)){
						//echo "<div style='color: green; text-align: center;'>Login successful!</div>";
						session_start();
						//create a session variable to store user email
						$_SESSION['email'] = $email;
						header("Location:home.php");
					} else {
						echo "<div style='color: red; text-align: center;'>Wrong Credentials</div>";
					}
				} else {
					echo "<div style='color: red; text-align: center;'>User does not exist</div>";
				}
			} else {
				die(mysqli_error($connect));
			}
		}
		?>
	</div>
	</main>
</body>
</html>