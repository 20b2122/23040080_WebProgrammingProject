<?php
include 'database.php';
$username = $_GET['username'];
$favourites = $_GET['favourites'];

$sql = "INSERT INTO favourites (username, favourites) VALUES ('$username', '$favourites')";

if (mysqli_query($con, $sql)) {
    echo '<script>alert("Succesfully added to favourites")</script>';
    header('refresh: 0; url=profile.php?username=' . $username);
} else {
    echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($con);
?>
