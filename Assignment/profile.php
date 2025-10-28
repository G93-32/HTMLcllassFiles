<?php
include_once 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
$user_id = $_SESSION['user_id'];

// Handle profile picture upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_picture'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profile_picture"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // Update database
            $query = "UPDATE signup_details SET profile_picture = '$target_file' WHERE email = '$email'";
            mysqli_query($connect, $query);
            header("Location: profile.php"); // Refresh page
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Handle profile details update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_details'])) {
    $newName = mysqli_real_escape_string($connect, $_POST['name']);
    $newEmail = mysqli_real_escape_string($connect, $_POST['email']);
    $newPhone = mysqli_real_escape_string($connect, $_POST['phone']);

    // Update query
    $update_query = "UPDATE signup_details SET name = '$newName', email = '$newEmail', phone = '$newPhone' WHERE id = '$user_id'";

    if (mysqli_query($connect, $update_query)) {
        $_SESSION['email'] = $newEmail; // Update session email if changed
        header("Location: profile.php"); // Refresh page
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($connect);
    }
}


// Fetch user details from the database
$query = "SELECT * FROM signup_details WHERE email = '$email'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    // Handle case where user data is not found
    echo "Error: User data not found.";
    exit();
}

// Fetch booking history
$bookings = [];
$booking_query = "SELECT * FROM bookings WHERE user_id = $user_id ORDER BY booking_date DESC";
$booking_result = mysqli_query($connect, $booking_query);

if ($booking_result) {
    while ($row = mysqli_fetch_assoc($booking_result)) {
        $bookings[] = $row;
    }
} else {
    echo "Error fetching bookings: " . mysqli_error($connect);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile - Wanderlust Travel Guide</title>
    <link rel="icon" href="Images/tv2.avif">
    <link rel="stylesheet" href="assignment.css">
    <link rel="stylesheet" href="booking.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
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
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .booking-history-container {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .booking-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .booking-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <main>
        <section id="profile-details" class="login-container">
            <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="Profile Picture" class="profile-picture">
            <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>

            <form action="profile.php" method="POST">
                <h3>Update Profile Details</h3>
                <label>Name: <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required></label><br><br>
                <label>&nbsp</label>
                <label>Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required></label><br><br>
                <label>Phone: <input type="tel" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required></label><br><br>
                <button type="submit" name="update_details">Update Details</button>
            </form>

            <form action="profile.php" method="POST" enctype="multipart/form-data">
                <h3>Update Profile Picture</h3>
                <input type="file" name="profile_picture" accept="image/*">
                <button type="submit">Upload</button>
            </form>

            <div class="booking-history-container">
                <h3>Your Booking History</h3>
                <?php if (!empty($bookings)): ?>
                    <?php foreach ($bookings as $booking): ?>
                        <div class="booking-item">
                            <p><strong>Destination:</strong> <?php echo htmlspecialchars($booking['destination']); ?></p>
                            <p><strong>Travelers:</strong> <?php echo htmlspecialchars($booking['travelers']); ?></p>
                            <p><strong>Dates:</strong> <?php echo htmlspecialchars($booking['startDate']); ?> to <?php echo htmlspecialchars($booking['endDate']); ?></p>
                            <p><strong>Guide:</strong> <?php echo htmlspecialchars($booking['guide']); ?></p>
                            <p><strong>Notes:</strong> <?php echo htmlspecialchars($booking['notes']); ?></p>
                            <p><strong>Booked On:</strong> <?php echo htmlspecialchars($booking['booking_date']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No bookings found.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer>
        <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>
</body>
</html>