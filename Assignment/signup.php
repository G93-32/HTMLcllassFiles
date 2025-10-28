<?php
include_once 'header.php';

$signup_error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirm) {
        $signup_error_message = "<div style='color: red; text-align: center;'>❌ Passwords do not match.</div>";
    } else {
        // ✅ Check if email already exists
        $check_query = "SELECT * FROM signup_details WHERE email = '$email' LIMIT 1";
        $check_result = mysqli_query($connect, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $signup_error_message = "<div style='color: red; text-align: center;'>❌ Error: Account with this email already exists.</div>";
        } else {
            // Hash the password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // Insert into the database
            $query = "INSERT INTO signup_details(name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password_hash')";
            $result = mysqli_query($connect, $query);

            if ($result) {
                header("Location: login.php");
                exit();
            } else {
                $signup_error_message = "<div style='color: red; text-align: center;'>❌ Signup failed. Please try again later.</div>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up - Wanderlust Travel Guide</title>
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

  <!-- Sign Up Form -->
  <div class="login-container">
    <h2>Create Your Account</h2>
    <p>Join us and start planning your next adventure</p>

  <form action="signup.php" method="POST" id="signupForm">
  <label for="fullname">Full Name</label>
  <input type="text" id="fullname" name="fullname" placeholder="John Doe" required>
  <div id="fullnameError"></div>

  <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="you@example.com" required>
  <div id="emailError"></div>

  <label for="phone">Phone Number</label>
  <input type="tel" id="phone" name="phone" placeholder="e.g., 123-456-7890" required>
  <div id="phoneError"></div>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="••••••••" required>
  <div id="passwordError"></div>

  <label for="confirmPassword">Confirm Password</label>
  <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required>
  <div id="confirmError" class="error"></div>

  <?php echo $signup_error_message; ?>

  <button type="submit" id="signupButton">Sign Up</button>
</form>

<p class="signup-link">Already have an account? <a href="login.php">Log in</a></p>
  </div>

<script src="signup.js"></script>

</body>
</html>