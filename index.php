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
    <link rel="stylesheet" href="scss/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/footers/"
    />

    <link rel="icon" href="img/is.png" />
    <title>Welcome to Ideasight</title>
  </head>
  <body>
    <div class="container my-4">
      <nav
        class="
          navbar navbar-expand-lg navbar-light
          bg-light
          custom-nav
          bg-transparent
        "
      >
        <a class="navbar-brand" href="/">
          <img src="img/logo.png" alt="Ideasight" />
          <!-- <span>Ideasight</span> -->
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
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact"
                >Contact</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary sign-up-button" href="register"
                >Login / Register</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div data-aos="slide-up" class="container">
      <div class="row custom-section">
        <div class="col-md-6 p-5">
          <h2>Welcome To <sapan class="idea">Idea</sapan>sight</h2>
          <!-- <h3>Why: Your Reason for Being</h3> -->
          <p>
            <b>IDEASIGHT</b> is a creative container with the capability of the
            team and we dedicated to create innovated idea to answer the
            consumers needed.
            <br />
            Wheatear we are creating the idea or helping its business expand it
            size, people at <b>IDEASIGHT</b> are builder at hearts.
          </p>
          <a href="home">Read More</a>
        </div>
      </div>
    </div>

    <section class="section1">
      <h1 data-aos="zoom-in-up">Portfolio</h1>
    </section>

    <section>
      <section class="section2">
        <div class="container">
          <div class="row custom-aos">
            <div class="col-md-6">
              <img
                data-aos="zoom-out-right"
                src="img/360experience.jpg"
                alt="experience"
              />
            </div>
            <div class="col-md-6 p-5">
              <h2 data-aos="slide-left">Experience</h2>
              <hr data-aos="slide-right" />
              <p data-aos="slide-up">
                Create the unique concept with the digital innovation to answer
                consumers needed.
              </p>
              <a data-aos="slide-down" href="360file/">Learn More</a>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section>
      <section class="section3">
        <div class="container">
          <div class="row custom-aos">
            <div class="col-md-6 p-5">
              <h2 data-aos="slide-right">Streaming</h2>
              <hr data-aos="slide-left" />
              <p data-aos="slide-left">
                Align between brand and consumers is the key to great concept.
              </p>
              <a data-aos="zoom-in-down" href="streaming"
                >Learn More</a
              >
            </div>
            <div class="col-md-6">
              <img
                data-aos="slide-left"
                src="img/streaming1.jpg"
                alt="streaming"
              />
            </div>
          </div>
        </div>
      </section>
    </section>

    <section>
      <section class="section4">
        <div class="container">
          <div class="row custom-aos">
            <div class="col-md-6">
              <img
                data-aos="zoom-out-right"
                src="img/activation.jpg"
                alt="activation"
              />
            </div>
            <div class="col-md-6 p-5">
              <h2 data-aos="slide-left">Activation</h2>
              <hr data-aos="slide-right" />
              <p data-aos="slide-up">
                Concept and conduct on ground activity with the unique idea and
                excellent execution.
              </p>
              <a data-aos="slide-down" href="activation"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </section>
    </section>

    <section>
      <section class="section5">
        <div class="container">
          <div class="row custom-aos">
            <div class="col-md-6 p-5">
              <h2 data-aos="slide-right">Exhibition</h2>
              <hr data-aos="slide-left" />
              <p data-aos="slide-left">
                Builders, and contractors to make complex designs come true. We
                committed for excellence while keeping.
              </p>
              <a data-aos="zoom-in-down" href="exhibition"
                >Learn More</a
              >
            </div>
            <div class="col-md-6">
              <img
                data-aos="slide-left"
                src="img/exhibition.jpg"
                alt="exhibition"
              />
            </div>
          </div>
        </div>
      </section>
    </section>

    <div class="container-fluid">
      <footer
        class="d-flex justify-content-center align-items-center py-3 border-top"
      >
        <p class="text-muted">&copy; 2021 Ideasight, Inc</p>
      </footer>
    </div>

    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
      integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
      crossorigin="anonymous"
    ></script>
    <script>
      AOS.init({
        duration: 1000,
        offset: 100,
        easing: "ease-in-out",
      });
    </script>
  </body>
</html>
