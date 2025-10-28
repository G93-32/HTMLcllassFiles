<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tokyo Travel Guide | Wanderlust</title>
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
<body>

    <main>
        <section id="overview">
            <h2 class="h2">Welcome to Tokyo</h2>
            <img src="Images/Tokyo22.jpg" class="Tower" width="500">
            <p class="Info">Tokyo blends futuristic innovation with ancient traditions. From neon-lit streets to serene shrines, it's a city that never sleeps.</p>
        </section>

        <section id="highlights">
  <h2 class="h2">Top Attractions</h2>

  <div class="container">
  <div class="item"><img src="Images/Shibuya.jpeg" class="img" width="300px" height="200">
  <p class="para">Shibuya Crossing</p></div>
  <div class="item">
  <img src="Images/Senso.jpeg" class="img" width="300px" height="200">
  <p class="para">Senso-ji Temple</p>
  </div>
  <div class="item"><img src="Images/Meiji-shrine.jpg"class="img" width="300px" height="200">
  <p class="para">Meiji Shrine</p></div>
 <div class="item"><img src="Images/Akihabara.jpeg" class="img" width="300px" height="200">
  <p class="para">Akihabara Electric Town</p></div>
  <div class="item"><img src="Images/Teamlab.jpeg" class="img" width="300px" height="200">
  <p class="para">TeamLab Borderless Digital Art Museum</p></div>
  </div>
  </section>

        <section id="tips">
            <h2 class="tips">Travel Tips</h2>
            <p>
                - Best time to visit: Spring (cherry blossoms) or Autumn<br>
                - Use Suica or Pasmo cards for transportation<br>
                - Bow when greeting locals<br>
                - Don't miss out on sushi and ramen!
            </p>
        </section>
        <div class="Bookus-container">
    <a href="booking.php" class="Bookusbutton">Book Now!</a>
</div>

     <div class="button-container">
    <a href="bali.php" class="nav-button back">Back Page</a>

    <a href="newyork.php" class="nav-button next">Next Page</a>
  </div>
</main>
    <footer>
        <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>

</body>
</html>