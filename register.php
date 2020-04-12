<?php
// Check if there was a POST Request, with at least one variable
if ($_POST) {
    if (array_key_exists('name', $_POST) && array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
        // Makes the connection with the database
        $connection = mysqli_connect('localhost', 'root', '', 'thecompletewebdevelopercourse', '3307');

        // Verifies if any problem occured
        if (mysqli_connect_error()) {
            die('There was an error while connecting to the database!');
        }

        $verifyRegisterQuery = 'SELECT * FROM users WHERE username = \'' . $_POST['username'] . '\'';
        echo $verifyRegisterQuery;

        echo '<br><br>';

        // Runs the query, saving it in a variable ($result)
        if ($result = mysqli_query($connection, $verifyRegisterQuery)) {
            if (mysqli_num_rows($result)) {
                echo 'That username already exists!';
            } else {
                $registerQuery = 'INSERT INTO users (name, username, password) values (\'' . mysqli_real_escape_string($connection, $_POST['name']) . '\',\'' . mysqli_real_escape_string($connection, $_POST['username']) . '\',\'' . mysqli_real_escape_string($connection, $_POST['password']) . '\')';
                echo $registerQuery;

                echo '<br><br>';

                // Runs the query, saving it in a variable ($result)
                if ($result = mysqli_query($connection, $registerQuery)) {
                    echo 'Your account was created!';
                } else {
                    echo 'There was a problem!';
                }
            }
        }
    }
}
?>

<h1>Register:</h1>

<form method='post'>
    <p>Name:</p>
    <input type='text' id='name' name='name' required>

    <p>Username:</p>
    <input type='text' id='username' name='username' required>

    <p>Password:</p>
    <input type='text' id='password' name='password' required>

    <br><br>

    <input type='submit' id='submit'>
</form>

<br><br>

<a href='login.php'>You want to login? Click here!</a>