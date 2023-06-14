<?php
include 'database.php';
$username = $_GET['username'];
$selextQuery = "SELECT * FROM favourites WHERE username='" . $username . "' ";
$result = $con->query($selextQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Profile</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-warning" id="mainNav">
        <?php
        include('header.php');
        ?>
    </nav>
    <br />
    <!-- <section class="vh-100"> -->
        <div class="container py-5 h-100 bg-light" style="border-radius:10px; width: 70%; margin: 20px auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- Icon -->
                <div class="col-md-4 gradient-custom text-center text-dark" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="gallery/profile_icon.jpg" alt="Avatar" class="img-fluid my-5" style="width: 30%;" />
                    <!-- extract favourites from database -->
                    <?php
                    echo '<h5><span style="font-weight:bold">Username:</span> '.$_GET['username'].'</h5>';
                    ?>
                    <!-- end extract favourites from database -->
                </div>
                <!-- end icon -->
                <!-- favourites -->
                <div class="col-md-6 text-dark">
                    <div class="card-body p-4">
                        <h6 style="text-align: center;">Favourites</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-9 mb-3">
                                <!-- extract favourites from database -->
                                <?php
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  '<p style="font-weight:bold">    ' . $row['favourites'];
                                        echo '<a style="float:right" href="remove.php?username=' . $username . '&favourites=' . $row['favourites'] . ' " class="btn btn-warning">Remove from Favourites</a> <br/>';
                                    }
                                } else {
                                    echo '<p style="text-align:center">You have no favourites.</p>';
                                }

                                ?>
                                <!-- end extract favourites from database -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end favourites -->
            </div>
        </div>
    <!-- </section> -->
</body>

</html>