<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paris Travel Guide | Wanderlust</title>
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
<body>

    <main>
        <section id="overview">
            <h2 class="h2">Welcome to Paris</h2>
            <img src="Images/31.jpg" class="Tower" width="500px" height="350px">
            <p class="Info">Paris, often called the "City of Light," is famous for its romantic ambiance, historic architecture, and world-class museums.</p>
        </section>

       <section id="highlights">
  <h2 class="h2">Top Attractions</h2>


  <div class="container">
  <div class="item"><img src="Images/Eiffel.webp"  class="img" width="300px" height="200">
  <p class="para">Eiffel tower</p></div>
  <div class="item">
  <img src="Images/Louvre.webp" class="img" width="300px" height="200">
  <p class="para">Louvre Museum</p>
  </div>
  <div class="item"><img src="Images/Notre dame.jpeg"class="img" width="300px" height="200">
  <p class="para">Notre-Dame Cathedral</p></div>
 <div class="item"><img src="Images/monmatre.jpeg" class="img" width="300px" height="200">
  <p class="para">Monmatre</p></div>
<div class="item"><img src="Images/Siene river.jpeg" class="img" width="300px" height="200">
  <p class="para">Siene River</p></div>
  </div>
</section>

        <section id="tips">
            <h2>Travel Tips</h2>
            <p class="tips">
                - Best time to visit: Spring or Fall<br>
                - Use public transport or rent bikes<br>
                - Learn basic French phrases<br>
                - Try croissants and macarons!
            </p>
        </section>
        <div class="Bookus-container">
    <a href="booking.php" class="Bookusbutton">Book Now!</a>
</div>
        <div class="button-container">
    <a href="destinations.php" class="nav-button back">Back Page</a>
    <a href="bali.php" class="nav-button next">Next Page</a>
  </div>

    </main>

    <footer>
        <p class="CC" >&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>

</body>
</html>