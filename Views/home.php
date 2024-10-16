<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php");
    exit();
} else if (isset($_GET['out'])) {
    session_destroy();
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelbd</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="#" class="logo">TravelxBD</a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#availability">Availability</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="home.php?out=true">Logout</a></li>
        </ul>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>TravelxBD <br> List Your Services </h1>
            <p> List your services to find the best customers. Sell your services with TravelxBD</p>
            <a href="#" class="home-btn">List Now</a>
            <span id="element"></span>
        </div>
    </section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

      <!-- Setup and start animation! -->
  <script>
    var typed = new Typed('#element', {
      strings: ['Travel', 'Hotel', 'Flight'],
      typeSpeed: 50,
    });
  </script>

</body>
</html>
