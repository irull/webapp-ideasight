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
      <title>Streaming</title>
    </head>

    <body>
      <div class="navbar-fixed">
        <nav class="deep-orange">
          <div class="container">
            <div class="nav-wrapper">
              <a href="../index" class="brand-logo"><img src="img/logo.png" width="110" height="70"></a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="../home">Home</a></li>
                <li><a href="../portfolio.php">Portfolio</a></li>
                <li><a href="../contact/index">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
        <li><a href="../home.php">Home</a></li>
        <li><a href="../portfolio.php">Portfolio</a></li>
        <li><a href="../contact/index">Contact</a></li>
      </ul>

      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/5.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/6.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/7.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- STREAMING Package -->
      <section id="webinar" class="webinar">
        <div class="container">
          <div class="row">
            <h3 class="center grey-text text-darken-3">STREAMING PACKAGE</h3>
            <h3 class="grey-text text-darken-3">Webinar</h3>
            <div class="col m6 s12">
              <p>SEMINAR</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>MEETING</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>TALK SHOW</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>GATHERING</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
            </div> 
            <div class="col m6 s12">
              <p>LAUNCHING</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>WORKSHOP</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>REUNION</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>PRESS CONFERENCE</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
            </div> 
        </div>
      </section>

      <section id="webinar" class="webinar">
        <div class="container">
          <div class="row">
            <h3 class="grey-text text-darken-3">Platform</h3>
            <div class="col m6 s12">
              <h4 class="rey-text text-darken-3">Media</h4>
                <p>Zoom</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>WebEx</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>Microsoft Teams</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>MGoogle Meet</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
            </div> 
            <div class="col m6 s12">
              <h4 class="grey-text text-darken-3">Streaming</h4>
              <p>YouTube</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>Facebook</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>Instagram</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
                <p>Restream</p>
                <div class="progress">
                  <div class="determinate deep-orange" style="width: 100%"></div>
                </div>
            </div> 
        </div>
      </section>

      <div class="parallax-container">
        <div class="parallax"><img src="img/slider/5.jpg"></div>

        <div class="container client">
          <h3 class="center white-text">Our Clients</h3>
          <div class="row">
            <div class="col m2 s12 center">
              <img src="img/client/Lotoyota.png">
            </div>
            <div class="col m2 s12 center">
              <img src="img/client/uob.png">
            </div>
            <div class="col m2 s12 center">
              <img src="img/client/aminef.png">
            </div>
            <div class="col m2 s12 center">
              <img src="img/client/palyja.png">
            </div>
            <div class="col m2 s12 center">
              <img src="img/client/yki.png">
            </div>
            <div class="col m2 s12 center">
              <img src="img/client/novonordisk.png">
            </div>
          </div>
        </div>
      </div>

      <section id="services" class="services grey lighten-3">
        <div class="container">
          <div class="row">
            <h3 class="center grey-text text-darken-3">Our Services</h3>
            <!-- card -->
            <div class="col m6 s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/card/full/1.jpg">
                </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Paket Admin<i class="material-icons right">more_vert</i></span> 
                    <p><a href="../contact.php">Contact Us</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Zoom Meeting Basic<i class="material-icons right">close</i></span>
                    <ul class="collection with-header">
                      <li class="collection-item">ZOOM :<br> 500 peserta, 120 menit, 1x Custom Link.</li>
                      <li class="collection-item">Streaming Tools :<br> 1x Laptop Operator ZOOM.<br> 1x Laptop Admin Chat.</li>
                      <li class="collection-item">Creative : <br> Bumper Image Waiting & Thanks.</li>
                      <li class="collection-item">2x Crew.</li>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="col m6 s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/card/full/2.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Paket Zoom Meeting<i class="material-icons right">more_vert</i></span>
                  <p><a href="../contact.php">Contact Us</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Frame 3-Pembicara (termasuk GR)<i class="material-icons right">close</i></span>
                    <ul class="collection with-header">
                      <li class="collection-item">ZOOM :<br> 500 peserta, 120 menit, 1x Custom Lin.k</li>
                      <li class="collection-item">Streaming Tools : <br>1x PC Streaming vMix. <br> 1x Laptop Operator ZOOM.<br> 3x Laptop Pin untuk MC dan 2 Pembicara. <br>1x Laptop Materi Presentasi. </li>
                      <li class="collection-item">Creative : <br> Bumper Image / Motion Waiting & Thanks. <br>Frame Pembicara 1-Split, 2-Split, 3-Split. </li>
                      <li class="collection-item">5x Crew.</li>
                    </ul>
                </div>
              </div>
            </div>

            <div class="col m6 s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/card/full/3.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Paket Zoom Meeting 2 Kamera<i class="material-icons right">more_vert</i></span>
                  <p><a href="../contact.php">Contact Us</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">2 Kamera | Frame 2-Pembicara (termasuk GR)<i class="material-icons right">close</i></span>
                    <ul class="collection with-header">
                      <li class="collection-item">ZOOM :<br> 500 peserta, 120 menit, 1x Custom Link.</li>
                      <li class="collection-item">Streaming Tools : <br>1x PC Streaming vMix. <br> 1x Laptop Operator ZOOM.<br> 2x Laptop Pin untuk MC dan 1 Pembicara. <br>1x Laptop Materi Presentasi. </li>
                      <li class="collection-item">Video System :<br> 2x Kamera Video SONY NX5.</li>
                      <li class="collection-item">Lighting System :<br> 4x Lighting LED.</li>
                      <li class="collection-item">Creative : <br> Bumper Image : Opening, Closing, Transition <br>Frame Pembicara 1-Split, 2-Split, 3-Split <br>Lower Thirds Pembicara. </li>
                      <li class="collection-item">Supporting :<br> Green Screen 6x6m, Speaker Monitor.</li>
                      <li class="collection-item">6x Crew.</li>
                    </ul>
                </div>
              </div>
            </div>

            <div class="col m6 s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/card/full/4.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Paket Zoom Meeting 3 Kamera<i class="material-icons right">more_vert</i></span>
                  <p><a href="../contact.php">Contact Us</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">3 Kamera | Frame 4-Pembicara (termasuk GR)<i class="material-icons right">close</i></span>
                    <ul class="collection with-header">
                      <li class="collection-item">ZOOM :<br> 500 peserta, 120 menit, 1x Custom Link.</li>
                      <li class="collection-item">Streaming Tools : <br>1x PC Streaming vMix. <br> 1x Laptop Operator ZOOM.<br> 2x Laptop Pin untuk MC dan 1 Pembicara. <br>1x Laptop Materi Presentasi. </li>
                      <li class="collection-item">Video System :<br> 3x Kamera Video SONY NX5.</li>
                      <li class="collection-item">Lighting System :<br> 4x Lighting LED.</li>
                      <li class="collection-item">Creative : <br> Bumper Image : Opening, Closing, Transition <br>Frame Pembicara 1-Split, 2-Split, 3-Split, 4-Split. <br>Lower Thirds Pembicara. </li>
                      <li class="collection-item">Supporting :<br> Green Screen 6x6m, Speaker Monitor.</li>
                      <li class="collection-item">8x Crew.</li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
      </section>

      <!-- portfolio Streaming -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <h3 class="center grey-text text-darken-3">Services Detail</h3>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/card/full/1.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/full/2.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/full/3.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/full/4.jpg" class="responsive-img materialboxed">
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/card/1.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/2.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/3.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/card/4.jpg" class="responsive-img materialboxed">
            </div>
          </div>
        </div>
      </section>

      
      <footer class="deep-orange white-text center">
        <P>Ideasight. Copyright 2021.</P>
      </footer>
          



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });
        
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax)

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed)
      </script>
    </body>