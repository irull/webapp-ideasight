<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

<div id="particles-js"></div>

<header>
        <a href="index.html" class="logo">Ideasight</a>
        <div class="menu-togle"></div>
        <nav>
        <ul>
            <li><a href="#">User</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
    </header>

    <div class="container">
        <div class="card">
            <div class="content">
                <h2>Experience</h2>
                <h3>360 Experience</h3>
                <img src="img/360.png" alt="">
                <a href="360file/index">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>Portfolio</h2>
                <h3>Portfolio</h3>
                <img src="img/portfolio.png" alt="">
                <a href="portfolio.php">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>Contact</h2>
                <h3>Contact</h3>
                <img src="img/contact.png" alt="">
                <a href="contact/index">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>About</h2>
                <h3>About</h3>
                <img src="img/abaout.png" alt="">
                <a href="about.php">Read More</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".card"),{
		max: 30,
        speed: 300,
        glare: true,
        "max-glare": 1,
    });
    </script>
</html>