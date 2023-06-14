<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="logo.jpg" />
  <title>Flavors</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-warning" id="mainNav">
    <?php
    include('header.php');
    ?>
  </nav>
  <br />

  <div>
    <div class="row g-0" style="margin: auto 10% auto 10%;">
      <!-- Information -->
      <div class="col-sm-6 col-md-6">
        <h1>Flavors</h1>
        <p class="card-text">
          <span style="font-weight: bold">Hours:</span> 6:30AM-2PM, 6-10PM
        </p>
        <p class="card-text">
          <span style="font-weight: bold">Service options:</span> Dine-in · No
          takeaway · No delivery
        </p>
        <p class="card-text">
          <span style="font-weight: bold">Located in:</span> JW Marriott Hotel Seoul
        </p>
        <p class="card-text">
          <span style="font-weight: bold">Address:</span> 2F, 176 Sinbanpo-ro,
          Seocho-gu, Seoul
        </p>
        <p class="card-text">
          <span style="font-weight: bold">Phone:</span> +82 02-6282-6730
        </p>
        <a href="menu.pdf" target="_blank">Menu</a></p>
      </div>
      <!-- buttons -->
      <div class="col-6 col-md-6" style="text-align: right;">
        <a href="https://booking.naver.com/booking/6/bizes/178420" target="_blank" class="btn btn-warning">Make a Reservation</a> <br /><br />
        <?php
        $favourites = 'flavors';

        if (!$_GET) { // not logged in
          echo '<a  onclick="login()" class="btn btn-warning">Add to Favourites</a>';
        } elseif ($username == $_GET['username']) { // no favourite and logged in 
          echo '<a href="favourite.php?username=' . $username . '&favourites=' . $favourites . ' " class="btn btn-warning">Add to Favourites</a>';
        }
        ?>
      </div>
    </div>


    <div class="container px-4 bg-light">
      <div class="row gx-5">
        <div class="col">
          <div class="p-1">
            <!-- Container for the image gallery -->
            <div style="width: 100%; margin-top:10%">
              <div class="container">
                <!-- Full-width images with number text -->
                <div class="mySlides">
                  <div class="numbertext">1 / 5</div>
                  <img src="gallery/flavors/photo1.jpg" style="width: 100%" />
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 5</div>
                  <img src="gallery/flavors/photo2.jpg" style="width: 100%" />
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 5</div>
                  <img src="gallery/flavors/photo3.jpg" style="width: 100%" />
                </div>

                <div class="mySlides">
                  <div class="numbertext">4 / 5</div>
                  <img src="gallery/flavors/photo4.jpg" style="width: 100%" />
                </div>

                <div class="mySlides">
                  <div class="numbertext">5 / 5</div>
                  <img src="gallery/flavors/photo5.jpg" style="width: 100%" />
                </div>
                <!-- Next and previous buttons -->
                <div style="text-align: left">
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="p-2">
            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12660.68214368439!2d127.0047429!3d37.5038958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca1713b64f22b%3A0x16826e5da6091c43!2sFlavors!5e0!3m2!1sen!2skr!4v1685495234969!5m2!1sen!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />




  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides((slideIndex = n));
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }

    function login() {
      var user = confirm('You are not logged in.');
      if (user = true) {
        location.href = 'login.html'
      }
    }
  </script>
</body>

</html>