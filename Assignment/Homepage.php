<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wanderlust Travel Guide</title>
    <link rel="icon" href="Images/tv2.avif">
    <link rel="stylesheet" href="assignment.css">
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
<body >

    <main>
        <section id="intro">
            <h2>Discover the World with Wanderlust</h2>
            <p>Your journey starts here! Explore our curated list of must-visit destinations around the globe.</p>
        </section>

        <section id="featured">
            <h2>Featured Destinations</h2>
            <p>Select a destination:</p>

             <div style="text-align:center;">
      <!-- Paris -->
  <div class="Images" style="display:inline-block; text-align:center;">
       <a href="paris.php">
        <img src="Images/Paris.jpg" width="300px" height="150px" title="Goes to Paris Blog">
       </a>
      <p>Paris</p>
    </div>

     <!-- Bali -->
    <div class="Images" style="display:inline-block; text-align:center;">
      <a href="bali.php">
       <img src="Images/Bali.jpeg" width="300px" height="150px" title="Goes to Bali blog">
      </a>
     <p>Bali</p>
    </div>

    <!-- Tokyo -->
    <div class="Images" style="display:inline-block; text-align:center;">
      <a href="tokyo.php">
       <img src="Images/Tokyo.jpg" width="300px" height="150px" title="Goes to Tokyo Blog">
      </a>
       <p>Tokyo</p>
    </div>

    <!-- New York -->
    <div class="Images" style="display:inline-block; text-align:center;">
      <a href="newyork.php">
       <img src="Images/newyork.jpeg" width="300px" height="150px" title="Goes to New York Blog">
      </a>
      <p>New York</p>
    </div>
 </div>
        </section>
          <div class="Bookus-container">
    <a href="booking.php" class="Bookusbutton">Book Now!</a>

    </main>

    <footer>
        <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>

</body>
</html>