<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bali Travel Guide | Wanderlust</title>
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
            <h2 class="h2">Welcome to Bali</h2>
            <img src="Images/baa.jpg" class="Tower" width="500px">
            <p class="Info">Bali is a tropical paradise known for its stunning beaches, lush jungles, rich culture, and spiritual retreats.</p>
        </section>

       <section id="highlights">
  <h2 class="h2">Bali Top Attractions</h2>
<div class="container">
  <div class="item"><img src="Images/Ubud.jpeg" class="img" width="300px" height="200">
  <p class="para">Ubud Monkey Forest</p></div>
  <div class="item">
  <img src="Images/Tanah Lot.webp" class="img" width="300px" height="200">
  <p class="para">Tanah Lot Temple</p>
  </div>
  <div class="item"><img src="Images/Tegallalang.jpeg"class="img" width="300px" height="200">
  <p class="para">Tegalalang Rice Terraces</p></div>
 <div class="item"><img src="Images/Kuta Beach.jpeg"  class="img" width="300px" height="200">
  <p class="para">Kuta Beach</p></div>
  <div class="item"><img src="Images/Mount.jpeg" class="img" width="300px" height="200">
  <p class="para">Mount Batur Sunrise Trek</p></div>
  </div>
</section>

        <section id="tips">
            <h2>Travel Tips</h2>
            <p class="tips">
                - Best time to visit: Dry season (April–October)<br>
                - Dress modestly when visiting temples<br>
                - Rent a scooter for easy travel<br>
                - Try local dishes like Nasi Goreng and Satay
            </p>
        </section>
        <div class="Bookus-container">
    <a href="booking.php" class="Bookusbutton">Book Now!</a>
</div>

     <div class="button-container">
    <a href="paris.php" class="nav-button back">Back Page</a>

    <a href="tokyo.php" class="nav-button next">Next Page</a>
  </div>
</main>
    <footer>
        <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>

</body>
</html>