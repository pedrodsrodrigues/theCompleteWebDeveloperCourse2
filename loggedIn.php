<?php
session_start();

if (array_key_exists('username', $_SESSION) && array_key_exists('username', $_COOKIE)) {
    echo 'You are logged in!';
} else {
    header('Location: login.php');
}

echo '<br><br>';

echo 'Session: ' . $_SESSION['username'];

echo '<br><br>';

echo 'Cookie: ' . $_COOKIE['username'];
?>

<form method='get' action='logout.php'>
    <p>Do you want to log out?</p>
    <input type='submit' value='Logout'>
</form>