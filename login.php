<?php
// Check if there was a POST Request, with at least one variable
if ($_POST) {
    if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
        // Makes the connection with the database
        $connection = mysqli_connect('localhost', 'root', '', 'thecompletewebdevelopercourse', '3307');

        // Verifies if any problem occured
        if (mysqli_connect_error()) {
            die('There was an error while connecting to the database!');
        }

        if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
            $loginQuery = 'SELECT * FROM users WHERE username = \'' . $_POST['username'] . '\' AND password = \'' . $_POST['password'] . '\'';
            echo $loginQuery;

            echo '<br><br>';

            // Runs the query, saving it in a variable ($result)
            if ($result = mysqli_query($connection, $loginQuery)) {
                if (mysqli_num_rows($result)) {
                    echo 'You logged in successfully!';
                } else {
                    echo 'Incorrect credentials!';
                }
            } else {
                echo 'Incorrect credentials!';
            }
        }
    }
}
?>

<h1>Login:</h1>

<form method='post'>
    <p>Username:</p>
    <input type='text' id='username' name='username' required>

    <p>Password:</p>
    <input type='text' id='password' name='password' required>

    <br><br>

    <input type='submit' id='submit'>
</form>

<br><br>

<a href='register.php'>You want to register? Click here!</a>