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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/home.css" />

    <link rel="icon" href="img/is.png" />
    <title>Home | Ideasight</title>
  </head>
  <body>
    <div id="particles-js"></div>
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #ff5722"
    >
      <div class="container">
        <a class="navbar-brand" href="index">
          <img src="img/logo.png" alt="" width="70" class="my-0" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active btn"
                aria-current="page"
                style="color: aqua"
                href="logout"
                >Logout <i class="bi bi-box-arrow-right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="box container">
      <div class="card">
        <div class="content">
          <h2>Experience</h2>
          <h3>360 Experience</h3>
          <img src="img/360.png" alt="" />
          <a href="360file/index">Read More</a>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2>Portfolio</h2>
          <h3>Portfolio</h3>
          <img src="img/portfolio.png" alt="" />
          <a href="portfolio.php">Read More</a>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2>Contact</h2>
          <h3>Contact</h3>
          <img src="img/contact.png" alt="" />
          <a href="contact/index">Read More</a>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2>About</h2>
          <h3>About</h3>
          <img src="img/abaout.png" alt="" />
          <a href="about">Read More</a>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
      VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 30,
        speed: 300,
        glare: true,
        "max-glare": 1,
      });
    </script>
  </body>
</html>

