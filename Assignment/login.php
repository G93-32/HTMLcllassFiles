<?php
include_once 'header.php';

$login_error_message = '';

// check if user has clicked login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // collect login data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if email exists
    $query = "SELECT * FROM signup_details WHERE email = '$email'";
    $run_query = mysqli_query($connect, $query);

    if ($run_query) {
        if (mysqli_num_rows($run_query) > 0) {
            $record = mysqli_fetch_assoc($run_query);
            $stored_hash = $record['password'];

            // verify password
            if (password_verify($password, $stored_hash)) {
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $record['id'];
                header("Location: Homepage.php"); // or any landing page after login
                exit();
            } else {
                $login_error_message = "<div style='color: red; text-align: center;'>❌ Wrong password.</div>";
            }
        } else {
            $login_error_message = "<div style='color: red; text-align: center;'>❌ User does not exist.</div>";
        }
    } else {
        die(mysqli_error($connect));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Wanderlust Travel Guide</title>
  <link rel="icon" href="Images/tv2.avif">
  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <style>
        .profile-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #1B2845;
            color: white;
            text-align: center;
            line-height: 30px;
            font-size: 16px;
            margin-left: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

  <!-- Login Form -->
   <div class="Main">
  <div class="login-container">
    <h2>Welcome Back</h2>
    <p class="p">Please log in to continue</p>

    <form action="login.php" method="POST" id="loginForm">
  <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="you@example.com" required>
  <div id="emailError"></div>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="••••••••" required>
  <div id="passwordError"></div>
  <?php echo $login_error_message; ?>

  <button type="submit" id="loginbutton">Login</button>
</form>


    <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
  </div>
  <script src="login.js"></script>
</body>
</html>