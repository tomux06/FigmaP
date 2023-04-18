<?php
  @include 'config.php';

  session_start();

  if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
  } 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .footer {
        background-image: url("images/back.jpg");
      }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="container-fluid d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <p class="mb-0" style="color: white">Socialiniai tinklai:</p>

        <ul class="list-unstyled d-flex mb-0">
          <li>
            <a href="https://facebook.com"> <img src="images/fb.png" /> </a>
          </li>
          <li>
            <a href="https://instagram.com"><img src="images/insta.png" /> </a>
          </li>
          <li>
            <a href="https://twitter.com"><img src="images/twiter.png" /> </a>
          </li>
          <li>
            <a href="https://youtube.com"><img src="images/youtube.png" /> </a>
          </li>
        </ul>
      </div>
    </header>

    <div class="hero container-fluid">
      <div class="container">
        <div class="middlebar d-flex justify-content-between">
          <div class="logo">
            <img src="images/logo.jpg" />
          </div>

          <div class="donate">
            <button id="open-btn" type="button"><a href="logout.php">Atsijungti</a></button>
          </div>
        </div>
      </div>
    </div>

    <div class="menu container-fluid d-flex align-items-center">
      <div class="container d-flex justify-content-start">
        <ul class="list-unstyled d-flex mb-0">
          <li>
            <a href="#"><b>Pagrindinis</b></a
            ><img src="images/plus.png" />
          </li>
          <li>
            <a href="#"><b>Galerija</b></a
            ><img src="images/plus.png" />
          </li>
          <li>
            <a href="#"><b>Receptai</b></a
            ><img src="images/plus.png" />
          </li>
          <li>
            <a href="#"><b>Apie mus</b></a
            ><img src="images/plus.png" />
          </li>
          <li>
            <a id="color" href="#"><b>Kontaktai</b></a
            ><img src="images/plus.png" />
          </li>
        </ul>
      </div>
    </div>
    <div class="feature">
      <div class="container-fluid">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="images/1.jpg" />
          </div>
          <div class="item">
            <img src="images/2.jpg" />
          </div>
          <div class="item">
            <img src="images/3.jpeg" />
          </div>
          <div class="item">
            <img src="images/4.jpg" />
          </div>
          <div class="item">
            <img src="images/5.jpg" />
          </div>
          <div class="item">
            <img src="images/6.jpg" />
          </div>
          <div class="item">
            <img src="images/7.jpg" />
          </div>
          <div class="item">
            <img src="images/8.jpg" />
          </div>
          <div class="item">
            <img src="images/9.jpg" />
          </div>
          <div class="item">
            <img src="images/13.jpg" />
          </div>
          <div class="item">
            <img src="images/11.jpg" />
          </div>
          <div class="item">
            <img src="images/12.jpg" />
          </div>
        </div>
      </div>

      <div class="cards1 container-fluid pt-5 pb-5">
        <div class="container">
          <div class="mt-5 mb-5">
            <h1 class="need">
              Rekomenduojami <span style="color: orange">kokteiliai:</span>
            </h1>
            <br />

            <p class="center">
              Kokteilių rekomendacijos parinktos geriausių šalies barmenų!
            </p>
          </div>

          <div class="row justify-content-center">
            <div class="card p-0 text-bg-light" style="width: 300px">
              <img src="images/13.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <div class="question">
                  <h5 class="cocktail">Helsinki Mule</h5>
                </div>
                <div class="answer">
                  <p class="card-text">
                    Teritatis et quasi architecto. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium dolore
                    mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    invent.
                  </p>
                </div>
              </div>
            </div>

            <div class="card p-0 text-bg-light" style="width: 300px">
              <img src="images/3.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <div><h5 class="cocktail">Mojito</h5></div>
                <div>
                  <p class="card-text">
                    Teritatis et quasi architecto. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium dolore
                    mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    invent.
                  </p>
                </div>
              </div>
            </div>

            <div class="card p-0 text-bg-light" style="width: 300px">
              <img src="images/5.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <div><h5 class="cocktail">Cuba Libre</h5></div>
                <div>
                  <p class="card-text">
                    Teritatis et quasi architecto. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium dolore
                    mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    invent.
                  </p>
                </div>
              </div>
            </div>

            <a class="d-flex justify-content-center mt-5" href="#">
              <button class="btn" type="button">
                Visi rekomenduojami kokteiliai
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="urgent container-fluid pt-5 pb-5">
      <div class="slidershow middle container">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked />
          <input type="radio" name="r" id="r2" />
          <input type="radio" name="r" id="r3" />
          <input type="radio" name="r" id="r4" />
          <input type="radio" name="r" id="r5" />

          <div class="slide s1">
            <img src="images/21.jpg" />
          </div>
          <div class="slide">
            <img src="images/22.jpg" />
          </div>
          <div class="slide">
            <img src="images/23.jpg" />
          </div>
          <div class="slide">
            <img src="images/24.jpg" />
          </div>
          <div class="slide">
            <img src="images/25.jpg" />
          </div>
        </div>
        <div class="navigation">
          <label for="r1" class="bar"></label>
          <label for="r2" class="bar"></label>
          <label for="r3" class="bar"></label>
          <label for="r4" class="bar"></label>
          <label for="r5" class="bar"></label>
        </div>
      </div>
    </div>
    <div class="banner container-fluid d-flex align-items-center mt-5 mb-5">
      <div class="container d-flex flex-column align-items-center">
        <div class="d-flex flex-column align-items-center">
          <h1>Mūsų<span style="color: orange"> Partneriai:</span></h1>
          <p>Čia galite matyti įmonių sąrašą prisidedančių prie mūsų idėjų.</p>
        </div>
        <div>
          <ul class="list-unstyled d-flex">
            <li><img src="images/dummy-logo-1b.png" /></li>
            <li><img src="images/dummy-logo-2b.png" /></li>
            <li><img src="images/dummy-logo-3b.png" /></li>
            <li><img src="images/dummy-logo-4b.png" /></li>
            <li><img src="images/dummy-logo-1b.png" /></li>
            <li><img src="images/dummy-logo-2b.png" /></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer bg-image bg-dark container-fluid pt-5 pb-5">
      <div class="container d-flex">
        <div class="col-sm-3">
          <img class="cock" src="images/logo.jpg" />
        </div>

        <div class="col-sm-3">
          <h5><span style="color: orange">Apie mus:</span></h5>
          <p class="text pt-3">
            Mes esame jauna įmonė norinti pasidalinti ilgai kaupta savo
            patirtimi kokteilių srityje.
          </p>
        </div>

        <div class="col-sm-3 mb-0">
          <h5><span style="color: orange">Mūsų info:</span></h5>

          <div class="pt-3">
            <div class="d-flex py-2 gap-2">
              <img class="book" src="images/book.png" />
              <p class="mb-0">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</p>
            </div>

            <div class="d-flex py-2 gap-2">
              <a href="tel:123-456-7890"><img src="images/phone2.png" /></a>
              <p class="mb-0">+37065123312</p>
            </div>

            <div class="d-flex py-2 gap-2">
              <a href="mailto: tomux93@gmail.com">
                <img src="images/mail.png"
              /></a>
              <p class="mb-0">info@yoursite.com</p>
            </div>

            <div class="d-flex py-2 gap-2">
              <img class="time" src="images/time.png" />
              <p>Mon - Sat 09:00 - 17:00</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <h5><span style="color: orange">Sekite mus:</span></h5>

          <ul class="social list-unstyled d-flex mb-0">
            <li>
              <a href="https://facebook.com"> <img src="images/fb2.png" /> </a>
            </li>
            <li>
              <a href="https://instagram.com"
                ><img src="images/insta2.png" />
              </a>
            </li>
            <li>
              <a href="https://twitter.com"
                ><img src="images/twiter2.png" />
              </a>
            </li>
            <li>
              <a href="https://youtube.com"
                ><img src="images/youtube2.png" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyright container-fluid bg-dark">
      <div class="container">
        <p style="color: white; text-align: left" class="p-5 mb-0">
          Copyright 2021 © NGOO Figma Template. Designed by Rometheme.
        </p>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 3,
            },
            1000: {
              items: 5,
            },
          },
        });
      });
    </script>
  </body>
</html>
