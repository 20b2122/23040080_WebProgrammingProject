<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="logo.jpg" />
  <script src="https://kit.fontawesome.com/fc4cf343c1.js" crossorigin="anonymous"></script>
  <title>A* Star Restaurant</title>
</head>

<body>
  <!-- navigation -->
  <nav class="navbar navbar-dark bg-warning fixed-top" id="mainNav">
    <?php
    if (!$_GET) {
      echo '<a href="#page-top" style="margin-right: auto;"><img src="logo.jpg" style="width: 20%; border-radius:50%" /></a>';
    } else {
      $username = $_GET['username'];
      echo '<a href="homepage.php?username=' . $username . '" style="margin-right: auto;"><img src="logo.jpg" style="width: 20%; border-radius:50%" /></a>';
    }
    ?>

    <?php
    if (!$_GET) {
      echo '
      <ul class="navbar nav nav-pills justify-content-end" style="margin-left: auto;">
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="about()">About</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="restaurants()">Restaurants</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="contact()">Contact</button>
            </li>
            <span class="navbar-text h3 text-light">|</span>
            <li class="nav-item">
              <a class="nav-link text-dark" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark bg-light" href="register.html">Sign In</a>
            </li>
            </ul>';
    } else {
      $username = $_GET['username'];
      echo '
            <ul class="navbar nav nav-pills justify-content-end" style="margin-left: auto;">
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="about()">About</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="restaurants()">Restaurants</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark" onclick="contact()">Contact</button>
            </li>
            <span class="navbar-text h3">|</span>
            <li class="nav-item">
                <a class="nav-link active text-dark bg-light" href="profile.php?username=' . $username . '">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" onclick="logout()" href="homepage.php">Log Out</a>
            </li>
            </ul>';
    }
    ?>

  </nav>
  <!-- end navigation -->

  <br /><br /><br /><br /><br /><br />

  <section id="about" style="background-image: url('gallery/about.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%; padding:5%; color:white;"> <br /><br />
    <div style="background-color: rgba(000, 000, 000, 0.3); width:50%; padding:5%; margin:auto;">
      <h2>ABOUT</h2>
      <br />
      <h5>Welcome to A* Star Restaurants,</h5>
      <p>
        We provide list of restaurants, many of which have great reviews <br />
        and to assist you in discovering new cuisines.
      </p>
    </div>
  </section>

  <section style="padding:5%; background-color:rgb(255, 243, 216)">
    <h2>RESTAURANTS</h2><br />
    <div class="container px-4">
      <div class="row gx-5">
        <div class="col">
          <div class="p-3 border bg-light" style="color:black; border-radius: 5px;">
            <div>
              <img src="gallery/flavors/mainPhoto.jpg" style="width: 65%" />
            </div> <br />
            <h5 class="card-title">Flavors</h5>
            <p class="card-text">Seafood, Asian.</p>
            <p class="card-text"><span style="font-weight: bold;">Service options:</span> Dine-in · No takeaway · No delivery</p>
            <p class="card-text"><span style="font-weight: bold;">Hours:</span> 6:30AM-2PM, 6-10PM</p>
            <p class="card-text"><span style="font-weight: bold;">Phone:</span> +82 02-6282-6730</p>

            <br />
            <?php
            if (!$_GET) {
              echo '<a href="flavors.php" class="btn btn-warning">More Details</a>';
            } else {
              $username = $_GET['username'];
              echo '<a href="flavors.php?username=' . $username . '" class="btn btn-warning">More Details</a>';
            }
            ?>
          </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light" style="color:black; border-radius: 5px;">
            <div>
              <img src="gallery/new delhi/mainPhoto.jpg" style="width: 65%" />
            </div> <br />
            <h5 class="card-title">New Delhi</h5>
            <p class="card-text">Indian, Asian, and Vegetarian Friendly.</p>
            <p class="card-text"><span style="font-weight: bold">Service options:</span> Dine-in, takeaway and delivery</p>
            <p class="card-text"><span style="font-weight: bold">Hours:</span> 11:00 AM - 10:00 PM</p>
            <p class="card-text"><span style="font-weight: bold">Phone:</span> +82 10-8690-4915</p>

            <br />
            <?php
            if (!$_GET) {
              echo '<a href="new_delhi.php" class="btn btn-warning">More Details</a>';
            } else {
              $username = $_GET['username'];
              echo '<a href="new_delhi.php?username=' . $username . '" class="btn btn-warning">More Details</a>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer-->
  <footer class="footer py-4" style="text-align: center;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">Copyright &copy; A* Restaurants 2023</div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
          <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    function about() {
      window.scrollTo(0, 0);
    }

    function restaurants() {
      window.scrollTo(0, 470);
    }

    function contact() {
      window.scrollTo(0, 800);
    }

    function logout() {
      alert("You have successfully logged out. Good bye!");
    }
  </script>
</body>

</html>