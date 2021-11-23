<?php
// session_start();

// if(!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }

// ?>


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
    <!-- <link rel="stylesheet" href="css/portfolio.css" /> -->

    <link rel="icon" href="img/is.png" />
    <title>Portfolio</title>
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
                class="nav-link active"
                aria-current="page"
                href="home"
                >Home
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="contact"
                href="contact"
                >Contact
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="logout"
                >Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="exhibition/img/slider/1.jpg" class="d-block w-100" alt="slider1" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="exhibition/img/slider/2.jpg" class="d-block w-100" alt="slider2" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="exhibition/img/slider/6.jpg" class="d-block w-100" alt="slider3" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="activation/img/slider/2.jpg" class="d-block w-100" alt="slider4" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="activation/img/slider/3.jpg" class="d-block w-100" alt="slider5" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="streaming/img/card/4.jpg" class="d-block w-100" alt="slider6" width="500" height="500">
            </div>
            <div class="carousel-item">
            <img src="streaming/img/card/9.jpg" class="d-block w-100" alt="slider7" width="500" height="500">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="container d-flex mt-4 mb-4 justify-content-center">
        <div class="row p-0">
            <div class="card col-sm d-flex justify-content-center" style="width: 18rem;">
                <img src="img/360.jpg" class="card-img-top" alt="360">
                <div class="card-body">
                    <h5 class="card-title">360 Ideasight Home</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="360file" class="btn btn-primary">More Details</a>
                </div>
            </div>
       
            <div class="card col-sm" style="width: 18rem;">
                <img src="img/360experience.jpg" class="card-img-top" alt="360 Experience">
                <div class="card-body">
                    <h5 class="card-title">360 Experience "VR DEMO"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="360file_honda" class="btn btn-primary">More Details</a>
                </div>
            </div>
            <div class="card col-sm" style="width: 18rem;">
                <img src="img/streaming1.jpg" class="card-img-top" alt="streaming">
                <div class="card-body">
                    <h5 class="card-title">Streaming</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="streaming" class="btn btn-primary">More Details</a>
                </div>
            </div>
            <div class="card col-sm" style="width: 18rem;">
                <img src="img/activation.jpg" class="card-img-top" alt="acrivation">
                <div class="card-body">
                    <h5 class="card-title">Activation</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="activation" class="btn btn-primary">More Details</a>
                </div>
            </div>
            <div class="card col-sm" style="width: 18rem;">
                <img src="img/exhibition.jpg" class="card-img-top" alt="exhibition">
                <div class="card-body">
                    <h5 class="card-title">Exhibition Contractor</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="exhibition" class="btn btn-primary">More Details</a>
                </div>
            </div>
        </div>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

<script type="text/javascript" src="particles.js"></script>
<!-- <script type="text/javascript" src="app.js"></script> -->
</body>
</html>