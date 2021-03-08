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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body>

<div id="particles-js"></div>

    <header>
        <a href="index.html" class="logo">Ideasight</a>
        <div class="menu-togle"></div>
        <nav>
        <ul>
            <li><a href="home" class="active">Home</a></li>
            <li><a href="contact/index">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="img/360.jpg">
                <a href="360file/index">Read More</a>
            </div>
            <div class="content">
                <h2>360 Ideasight Home</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non nulla, magnam perspiciatis ipsum expedita placeat eligendi odit ab est?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/360experience.jpg">
                <a href="360file_honda/index">Read More</a>
            </div>
            <div class="content">
                <h2>360 Experience "VR DEMO"</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non nulla</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/streaming1.jpg">
                <a href="streaming/streaming">Read More</a>
            </div>
            <div class="content">
                <h2>Streaming</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non nulla, magnam perspiciatis ipsum expedita placeat eligendi odit ab est?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/activation.jpg">
                <a href="activation/activation">Read More</a>
            </div>
            <div class="content">
                <h2>Activation</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non nulla, magnam perspiciatis ipsum expedita placeat eligendi odit ab est?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/exhibition.jpg">
                <a href="exhibition/exhibition.php">Read More</a>
            </div>
            <div class="content">
                <h2>Exhibition Contractor</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non nulla, magnam perspiciatis ipsum expedita placeat eligendi odit ab est?</p>
            </div>
        </div>
    </div>

<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>