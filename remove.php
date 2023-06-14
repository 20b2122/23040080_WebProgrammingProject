<?php
include 'database.php';
$username = $_GET['username'];
$favourites = $_GET['favourites'];

$sql = "DELETE FROM favourites WHERE favourites = '" . $favourites . "' AND username = '" . $username . "'";

if (mysqli_query($con, $sql)) {
    echo '<script>alert("Succesfully removed from favourites")</script>';
    header('refresh: 0; url=profile.php?username=' . $username);
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
