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
      <!-- bootstrap.css -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="../img/is.png" />
      <title>Exhibition</title>
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
            </div>
          </li>
          <li>
            <img src="img/slider/2.jpg"> <!-- random image -->
            <div class="caption left-align">
            </div>
          </li>
          <li>
            <img src="img/slider/3.jpg"> <!-- random image -->
            <div class="caption right-align">
            </div>
          </li>
          <li>
            <img src="img/slider/4.jpg"> <!-- random image -->
            <div class="caption center-align">
            </div>
          </li>
          <li>
            <img src="img/slider/9.jpg"> <!-- random image -->
            <div class="caption left-align">
            </div>
          </li>
          <li>
            <img src="img/slider/6.jpg"> <!-- random image -->
            <div class="caption right-align">
            </div>
          </li>
          <li>
            <img src="img/slider/7.jpg"> <!-- random image -->
            <div class="caption center-align">
            </div>
          </li>
          <li>
            <img src="img/slider/8.jpg"> <!-- random image -->
            <div class="caption left-align">
            </div>
          </li>
        </ul>
      </div>

      
      <div class="parallax-container">
        <div class="parallax"><img src="img/activation.jpg"></div>
        <div class="container client">
          <h3 class="center white-text">Our Clients</h3>
          <div class="row">
            <div class="col m3 s6 center">
              <img src="img/logo/isuzu.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/pertamina.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/pln.jpg">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/adira.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/kem.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/samsung.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/sgm.png">
            </div>
            <div class="col m3 s6 center">
              <img src="img/logo/morinaga.png">
            </div>
          </div>
        </div>
      </div>

      <div class="container center activation">
        <h2>Exhibition</h2>
      </div>

  <section>
    <section class="section2">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>PLN Expo 2020</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/pln.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section2">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>ADIRA Virtual Expo 2020</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/adira.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section2">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Pertamina Project 2019</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/1.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section3">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Raker Kemenaker 2019</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/2.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section4">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Exhibition Booth At GICOMTEC 2018</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/3.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section5">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Exhibition Booth At GIIAS 2017</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/4.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section6">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Hydro Coco 2015</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/6.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section7">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Launching SAMSUNG GALAXY NOTE 4</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/7.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section8">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>SGM Bus Roadshow</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/8.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  <section>
    <section class="section9">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 text">
            <hr>
            <h2>Morniaga Campign 2012</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus at, eum dolores accusantium magnam impedit omnis debitis necessitatibus nostrum quam, optio cum veniam fuga autem excepturi iure, cumque dignissimos?</p>
          </div>
          <div class="col m7 s12">
            <img class="responsive-img" src="img/slider/9.jpg">
          </div>
        </div>
      </div>
    </section>
  </section>   
  
<footer>
        <P class="deep-orange white-text center">Ideasight. Copyright 2021.</P>
</footer>

      
  <!-- <div class="footer center">
  <p> Copyright&copy; 2021, Ideasight.tech</p>
</div>
           -->



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false,
          height: 500,
          transition: 800,
          interval: 3000
        });
        
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax)
      </script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script>
      <script>
        AOS.init({
          duration: 1000,
          offset: 120,
          easing: 'ease-in-out'
        });
      </script>
    </body>