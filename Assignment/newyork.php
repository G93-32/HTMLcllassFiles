<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New York Travel Guide | Wanderlust</title>
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
            <h2 class="h2">Welcome to Newyork</h2>
            <img src="Images/york.jpg" class="Tower" width="500">
            <p class="Info">New York City is the cultural and financial capital of the world, offering endless entertainment, shopping, and iconic landmarks.</p>
        </section>

        <section id="highlights">
  <h2 class="h2">New York Top Attractions</h2>

  <div class="container">
  <div class="item"><img src="Images/StatueofLiberty.jpg" class="img" width="300px" height="200">
  <p class="para">Statue of Liberty</p></div>
  <div class="item">
  <img src="Images/Central Park.jpeg"  class="img" width="300px" height="200">
  <p class="para">Central Park</p>
  </div>
  <div class="item"><img src="Images/Times Sqaure.jpeg"class="img" width="300px" height="200">
  <p class="para">Times Square</p></div>
 <div class="item"><img src="Images/Empire State.jpeg"  class="img" width="300px" height="200">
  <p class="para">Empire State Building</p></div>
  <div class="item"><img src="Images/MoMA.jpeg" class="img" width="300px" height="200">
  <p class="para">Museum of Modern Art (MoMA)</p></div>
  </div>
</section>

        <section id="tips">
            <h2 class="tips">Travel Tips</h2>
            <p>
                - Best time to visit: Spring or Fall<br>
                - Walk or use the subway to get around<br>
                - Be aware of pickpockets in crowded areas<br>
                - Enjoy pizza, bagels, and cheesecake!
            </p>
        </section>
        <div class="Bookus-container">
    <a href="booking.php" class="Bookusbutton">Book Now!</a>
</div>
         <div class="button-container">
    <a href="tokyo.php" class="nav-button back">Back Page</a>

    <a href="booking.php" class="nav-button next">Next Page</a>
         </div>
    </main>

    <footer>
        <p class="CC">&copy; 2025 Wanderlust Travel Guide. All rights reserved.</p>
    </footer>

</body>
</html>