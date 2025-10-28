<?php
session_start();
include_once 'db.php';

$user = null;
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM signup_details WHERE email = '$email'";
    $result = mysqli_query($connect, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    }
}

$current_page = basename($_SERVER['PHP_SELF']);
$hide_login_button = ($current_page == 'login.php' || $current_page == 'signup.php');

?>
<style>
    .header-button {
      padding: 7px 22px;
      width: 150px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
      font-size: 8px;
      text-align: center;
      background-color: #274060ff;
}
.header-button:hover {
  background-color:  #65afffff;
  color: black;
      transform: scale(1.1);
      }
</style>
<header>
    <div class="header-top-right">
        <?php if ($user): ?>
            <a href="logout.php" class="header-button">Logout</a>
            <a href="profile.php" class="profile-icon">
                <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="Profile" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
            </a>
        <?php elseif (!$hide_login_button): ?>
            <a href="login.php" class="header-button">Login</a>
        <?php endif; ?>
    </div>
    <h1 class="Head">Welcome to Wanderlust Travel Guide</h1>
    <nav class="Navbar">
        <a href="Homepage.php" class="nav">Home</a> |
        <a href="about.php" class="nav">About Us</a> |
        <a href="destinations.php" class="nav">Destinations</a> |
        <a href="booking.php" class="nav">Book Us</a>
    </nav>
</header>