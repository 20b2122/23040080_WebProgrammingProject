<?php

session_start();

include('database.php');

$username = $_POST['username'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

$message = [];

if (isset($_POST['reg_user']) && $_POST['reg_user'] == 'Submit') {
  
  // checking if user already exist in the database
  $user_check = "SELECT * FROM users WHERE username ='$username' LIMIT 1"; // limit to 1 so there is only 1 unique username
  $result = mysqli_query($con, $user_check);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    //checking if username already exist
    if ($user['username'] === $username) {
      $message[] = "Username already exists, please go back and register a new one";
    }

  }

  // check if the username field is empty
  if (empty($username)) {
    $message[] = "Username is required";
  }
  
  // checking if the password match
  if ($password_1 != $password_2){
    $message[] = "Please enter the same password";
  }

  // checking if captcha is working
  if ($_POST['captcha'] != $_POST['captchaEntered']) {
    $message[] = "Please enter a valid captcha";
  } else if (empty($_POST['captchaEntered'])){
    $message[] = "Please enter a valid captcha";
  }
  
}

if (!empty($message)){
  echo '<script>alert(" '. implode(", ", $message) .' "); window.location.href="register.html";</script>';
}

$_SESSION['message'] = $message;


if (count($message) == 0){
  $sql = "INSERT INTO users (username, password_1, password_2) VALUES ('$username', '$password_1','$password_2')";
  if (mysqli_query($con, $sql)) {
    header("location: login.html");
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
  }
  mysqli_close($con);
}

?>