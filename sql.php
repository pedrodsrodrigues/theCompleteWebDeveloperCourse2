<?php
// Makes the connection with the database
$connection = mysqli_connect('localhost', 'root', '', 'thecompletewebdevelopercourse', '3307');

// Verifies if any problem occured
if (mysqli_connect_error()) {
    die('There was an error while connecting to the database!');
}

// Inserts data into the table
// $query = 'INSERT INTO USERS (username, password) VALUES (\'admin2\', \'password2\')';
// mysqli_query($connection, $query);

// Updates table's data
// It's good to always use "LIMIT 1" when doing an update, just to be sure...
// $query = 'UPDATE users SET username = \'admin2\' WHERE id = 2 LIMIT 1';
// $query = 'UPDATE users SET password = \'admin2_xpto\' WHERE username = \'admin2\' LIMIT 1';
// mysqli_query($connection, $query);

// Shows table's data
// $query = 'SELECT * FROM users';
// $query = 'SELECT * FROM users WHERE username LIKE \'%admin%\'';
// $query = 'SELECT * FROM users WHERE id >= 3';
$name = 'Connor O\'Brien';
$query = 'SELECT * FROM users WHERE name = \'' . mysqli_real_escape_string($connection, $name) . '\'';

// Runs the query, saving it in a variable ($result)
if ($result = mysqli_query($connection, $query)) {
    echo 'Query was successful!';

    echo "<br><br>";

    // Saves the result (which will be an array) in a variable
    // $row = mysqli_fetch_array($result);

    // Shows the result
    // print_r($row);

    while ($row = mysqli_fetch_array($result)) {
        print_r($row);

        echo "<br>";

        echo 'Your username is "' . $row['username'] . '" and your password is "' . $row['password'] . '"';

        echo "<br><br>";
    }
}
