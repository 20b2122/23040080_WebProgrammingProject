<?php

session_start();

include('database.php');

$username = $_POST['username'];
$password = $_POST['password_1'];

$message = [];

if (isset($_POST['login_user']) && $_POST['login_user'] == 'Submit') {
    
    // check if the username field is empty
    if (empty($username)) {
        $message[] = "Username is required";
    }
    
    // check if the password field is empty
    if (empty($password)) {
        $message[] = "Password is required";
    }
    
    // checking captcha
    if ($_POST['captcha'] != $_POST['captchaEntered']) {
        $message[] = "Please enter a valid captcha";
    } else if (empty($_POST['captchaEntered'])){
        $message[] = "Please enter a valid captcha";
    }
    
    //i want to go to homepage after logging in //
    // checking if user is in the database
    // retireve from the row then compare from the user input to database
    if(count($message) == 0){
        $sql = "SELECT * FROM users WHERE username='$username' AND password_1='$password' ";
        $results = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($results)) {
            header('refresh: 0; url=homepage.php?username=' . $username);
        } else {
            $message[] = "Wrong username/password combination, please try again";
        }
    }
}


if (!empty($message)){
    echo '<script>alert(" '. implode(", ", $message) .' "); window.location.href="login.html";</script>';
}

$_SESSION['message'] = $message;

?>






