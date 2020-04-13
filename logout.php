<?php
// Removes cookie (putting the cookie with an expiration date on the past)
setcookie('username', '', time() - 60 * 60);

// Removes session
unset($_SESSION['username']);

// Redirects the user to the login page
header('Location: login.php');
