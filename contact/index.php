<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: ../login");
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
      <link rel="icon" href="../img/is.png" />
      <title>Contact</title>
    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="deep-orange">
              <div class="container">
                <div class="nav-wrapper">
                  <a href="../" class="brand-logo"><img src="img/logo.png" width="110" height="70"></a>
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="../home">Home</a></li>
                    <li><a href="../portfolio">Portfolio</a></li>
                    <li><a href="../about">About</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-nav">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../portfolio">Portfolio</a></li>
            <li><a href="../about">About</a></li>
          </ul>

        <!-- Paralax -->
        <div class="parallax-container">
          <div class="parallax"><img src="img/head.jpg" height="500"></div>
        </div>

        <div class="container">
          <div class="row center">
            <h3>Contact Us</h3>
            <div class="col m6 s12 center">
              <div class="card">
                <!-- <i class="material-icons small">account_circle</i>
                <h4>Contact Us</h4> -->
                <img src="img/Contact1.png">
              </div>
            </div>
            <div class="col m6 s12 center">
              <div class="card">
                <!-- <i class="material-icons small">account_circle</i>
                <h4>Contact Us</h4> -->
                <img src="img/contact2.png">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row center">
            <h3>Location</h3>
            <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=1%20Kav%20Commercial%20International%20School%20II%20No%208%20BSD%20City,%20Jalan%20Sekolah%20Foresta,%20BSD%20City,%20Lengkong%20Kulon,%20Pagedangan,%20Lengkong%20Kulon,%20Kec.%20Pagedangan,%20Tangerang,%20Banten%2015331Grafton%20Street,%20Dublin,%20Ireland+(PT.%20ALUR%20CERITA%20KREASINDO)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="http://www.gps.ie/">vehicle gps</a></iframe></div>
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