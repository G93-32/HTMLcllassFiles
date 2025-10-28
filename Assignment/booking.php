<?php
include_once 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'] ?? null;

// Fetch user details to pre-fill form (name, email, phone)
$user_name = '';
$user_email = '';
$user_phone = '';

if ($user_id !== null) {
    $user_query = "SELECT name, email, phone FROM signup_details WHERE id = '$user_id'";
    $user_result = mysqli_query($connect, $user_query);
    if ($user_result && mysqli_num_rows($user_result) > 0) {
        $user_data = mysqli_fetch_assoc($user_result);
        $user_name = htmlspecialchars($user_data['name']);
        $user_email = htmlspecialchars($user_data['email']);
        $user_phone = htmlspecialchars($user_data['phone']);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destination = $_POST['destination'] ?? '';
    $travelers = $_POST['travelers'] ?? 1;
    $startDate = $_POST['startDate'] ?? '';
    $endDate = $_POST['endDate'] ?? '';
    $guide = $_POST['guide'] ?? '';
    $notes = $_POST['notes'] ?? '';

    if ($user_id === null) {
        echo "<script>alert('❌ User not logged in. Please log in to book.'); window.location.href='login.php';</script>";
        exit();
    }

    $query = "INSERT INTO bookings (user_id, destination, travelers, startDate, endDate, guide, notes)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connect, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "issssss", $user_id, $destination, $travelers, $startDate, $endDate, $guide, $notes);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('✅ Booking Successful!'); window.location.href='profile.php';</script>";
        } else {
            echo "<script>alert('❌ Booking Failed. Please try again. Error: " . mysqli_error($connect) . "');</script>";
        }
    } else {
        echo "<script>alert('❌ Database Error: Could not prepare statement. Error: " . mysqli_error($connect) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Your Adventure - Wanderlust Travel Guide</title>
  <link rel="icon" href="Images/tv2.avif">
  <link rel="stylesheet" href="booking.css">
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

  <p class="Bookin">Plan your next journey with Wanderlust Travel Guide!</p>

  <!-- Booking Form -->
  <form action="booking.php" method="POST" id="bookingForm">

    <!-- User Info -->
    <h2>Your Details</h2>
    <label>Name: <input type="text" name="name" id="name" value="<?php echo $user_name; ?>" readonly></label><br><br>
    <label>&nbsp</label>
    <label>Email: <input type="email" name="email" id="email" value="<?php echo $user_email; ?>" readonly></label><br><br>
    <label>Phone: <input type="tel" name="phone" id="phone" value="<?php echo $user_phone; ?>" readonly></label><br><br>

    <!-- Travel Info -->
    <h2>Trip Details</h2>
    <label class="Hello">Destination:
      <select name="destination" id="destination" required>
        <option value="">Select Destination</option>
        <option value="france">France</option>
        <option value="newyork">New York, USA</option>
        <option value="tokyo">Tokyo, Japan</option>
        <option value="bali">Bali, Indonesia</option>
      </select>
    </label><br><br>

    <label>Travelers:
      <input type="number" name="travelers" min="1" max="10" required>
    </label><br><br>

    <label>Start Date: <input type="date" name="startDate" id="startDate" required></label><br><br>
    <div id="startDateError"></div>
    <label>End Date: <input type="date" name="endDate" id="endDate" required></label><br><br>
    <div id="endDateError"></div>


    <label>Choose a Guide:
      <select name="guide" id="guide" required>
        <option value="">Select a Guide</option>

        <!-- France Guides -->
        <optgroup label="France">
          <option>Marie Dupont - Art Historian</option>
          <option>Lucas Martin - Hiking Expert</option>
          <option>Sophie Leclerc - French Chef</option>
        </optgroup>

        <!-- New York Guides -->
        <optgroup label="New York, USA">
          <option>Jessica Moore - Street Art Tour</option>
          <option>Daniel Ruiz - Jazz Historian</option>
          <option>Linda Park - Food Expert</option>
        </optgroup>

        <!-- Tokyo Guides -->
        <optgroup label="Tokyo, Japan">
          <option>Yuki Nakamura - Nightlife Guide</option>
          <option>Reiko Sato - Tea Ceremony Master</option>
          <option>Kazuhiro Okada - Tech Explorer</option>
        </optgroup>

        <!-- Bali Guides -->
        <optgroup label="Bali, Indonesia">
          <option>Rina Putri - Yoga Instructor</option>
          <option>I Made Wijaya - Cultural Artist</option>
          <option>Nani Supriatna - Dive Master</option>
        </optgroup>
      </select>
    </label><br><br>

    <label>Notes:<br>
      <textarea name="notes" rows="4" cols="50"></textarea>
    </label><br><br>

    <button type="submit" id="bookButton">Book Now</button>
  </form>
  <!-- Footer -->
  <footer>
    <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
  </footer>
<script src="booking.js"></script>
</body>
</html>