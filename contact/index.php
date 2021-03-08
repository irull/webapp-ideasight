<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Contact</title>
    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="deep-orange">
              <div class="container">
                <div class="nav-wrapper">
                  <a href="../index.html" class="brand-logo"><img src="img/logo.png" width="110" height="70"></a>
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="../home">Home</a></li>
                    <li><a href="../portfolio.php">Portfolio</a></li>
                    <li><a href="../about.php">About</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-nav">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../portfolio.php">Portfolio</a></li>
            <li><a href="../about.php">About</a></li>
          </ul>

        <!-- Paralax -->
        <div class="parallax-container">
          <div class="parallax"><img src="img/head.jpg"></div>
        </div>

        <div class="container">
          <div class="row center">
            <h3>Contact Us</h3>
            <div class="col m6 s12 center">
              <div class="card">
                <!-- <i class="material-icons small">account_circle</i>
                <h4>Contact Us</h4> -->
                <img src="img/2431640.png">
              </div>
            </div>
            <div class="col m6 s12 center">
              <div class="card">
                <!-- <i class="material-icons small">account_circle</i>
                <h4>Contact Us</h4> -->
                <img src="img/2431640.png">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row center">
            <h3>Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d833.5830583943055!2d106.76400490421356!3d-6.366654075801051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef0b0406b089%3A0x17b17baaf5a5b6da!2sParakan%20Residence!5e0!3m2!1sen!2sid!4v1614069437889!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- <div id="googleMap" style="width: 100%;height: 400px;"></div> -->
          </div>
        </div>



          <!-- Floating Action -->
          <div class="fixed-action-btn">
            <a class="btn-floating btn-large deep-orange pulse">
              <i class="large material-icons">contacts</i>
            </a>
            <ul>
              <li><a class="btn-floating blue"><i class="material-icons">location_on</i></a></li>
              <li><a class="btn-floating red"><i class="material-icons">call</i></a></li>
              <li><a href="mailto:support@ideasight.tech?Subject=Hello" class="btn-floating light-blue"><i class="material-icons">email</i></a></li>
              <li><a href="https://api.WhatsApp.com/send?phone=6281290000520&text=Hello Selamat siang"class="btn-floating green accent-3"><i class="material-icons">chat</i></a></li>
            </ul>
          </div>

          <!-- footer -->
          <footer class="page-footer deep-orange">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Ideasight</h5>
                  <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus expedita enim possimus commodi! Quam dolorem facere tempora perferendis blanditiis quidem magni nisi aliquid? Mollitia animi culpa quos. Dolores natus magnam error ullam unde quam tempore ipsum dolorum. Amet, quia quisquam?</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Go To..</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="../index.html">1st Page</a></li>
                    <li><a class="grey-text text-lighten-3" href="../home">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="../portfolio/portfolio">Portfolio</a></li>
                    <li><a class="grey-text text-lighten-3" href="../about">About</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright center">
              <div class="container">
              © 2021 Copyright ideasight
              </div>
            </div>
          </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
        direction: 'left'
        });
      });
      
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
      </script>
      <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(-6.366518, 106.764384),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkbRY2SVZ-DZXP3JFbH6EoIpInnkydX8w&callback=myMap"></script>
    </body>
  </html>