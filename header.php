<?php
if (!$_GET) {
    echo '<a href="homepage.php" style="margin-right: auto;"><img src="logo.jpg" id="logo" style="width: 20%; border-radius:50%" /></a>';
  } else {
    $username = $_GET['username'];
    echo '<a href="homepage.php?username=' . $username . '" style="margin-right: auto;"><img src="logo.jpg" id="logo" style="width: 20%; border-radius:50%" /></a>';
  }
?>
    <?php
    if (!$_GET) {
        echo '
            <ul class="navbar nav nav-pills justify-content-end" style="margin-left: auto;">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="homepage.php">Home</a>
                </li>
                <span class="navbar-text h3">|</span>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active bg-light text-dark" href="register.html">Sign In</a>
                </li>
            </ul>';
    } else {
        $username = $_GET['username'];
        echo '
            <ul class="navbar nav nav-pills justify-content-end" style="margin-left: auto;">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="homepage.php?username=' . $username . '">Home</a>
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

</ul>