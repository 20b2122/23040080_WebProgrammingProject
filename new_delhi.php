<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="logo.jpg" />
    <title>New Delhi</title>
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

            <div class="col-sm-6 col-md-6">
                <h1>New Delhi</h1>
                <p class="card-text">
                    <span style="font-weight: bold">Cuisine:</span> Indian, Asian, and Vegetarian Friendly
                </p>
                <p class="card-text">
                    <span style="font-weight: bold">Hours:</span> 11:00 AM - 10:00 PM
                </p>
                <p class="card-text">
                    <span style="font-weight: bold">Service options:</span> Dine-in, takeaway and delivery
                </p>
                <p class="card-text">
                    <span style="font-weight: bold">Located in:</span> Gangnam-gu
                </p>
                <p class="card-text">
                    <span style="font-weight: bold">Address:</span> 28, Nonhyeon-ro 176-gil, Gangnam-gu Sinsadong, Seoul 06022 South Korea
                </p>
                <p class="card-text">
                    <span style="font-weight: bold">Phone:</span> +82 10-8690-4915
                </p>
                <a href="New Delhi Menu.pdf" target="_blank">Menu</a></p>
            </div>

            <div class="col-6 col-md-6" style="text-align: right;">
                <?php
                echo '<a onclick="reservation()" class="btn btn-warning">Make a Reservation</a><br/><br/>';
                ?>

                <?php
                $favourites = 'new delhi';

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
                                    <img src="gallery/new delhi/photo1.jpg" style="width: 100%" />
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 5</div>
                                    <img src="gallery/new delhi/photo2.jpg" style="width: 100%" />
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 5</div>
                                    <img src="gallery/new delhi/photo3.jpg" style="width: 100%" />
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">4 / 5</div>
                                    <img src="gallery/new delhi/photo4.jpg" style="width: 100%" />
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">5 / 5</div>
                                    <img src="gallery/new delhi/photo5.jpg" style="width: 100%" />
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
                    <div class="p-3">
                        <iframe  style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.9910976989416!2d127.03022587516281!3d37.52767711359008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca38f955f50ab%3A0xeb3ee9a86985b3d!2sNew%20Delhi%20Indian%20Restaurant!5e0!3m2!1sen!2skr!4v1686146648174!5m2!1sen!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

        function reservation() {
            alert('Please call (+82 10-8690-4915) to make a reservation');
        }
    </script>
</body>

</html>