<?php
// Check if there was a GET Request, with at least one variable
if ($_GET) {
    // Verifies if the array "$_GET" has a key called "name" and "surname"
    if (array_key_exists('name', $_GET) && array_key_exists('surname', $_GET)) {
        // Shows the variables (and their values) that were sent through a GET request
        print_r($_GET);

        echo '<br>';

        // Shows the value of a specific variable that was sent through a GET request
        echo 'Hi there ' . $_GET['name'] . ' ' . $_GET['surname'] . '!';
    }
}
?>

<p>What's your name?</p>

<!-- GET Request -->
<!-- "method='get'" não é necessário visto que é o default -->
<form method='get'>
    <span>
        Name:
        <input name='name' type='text'>
    </span>

    <span>
        Surname:
        <input name='surname' type='text'>
    </span>

    <input type='submit' value='Go!'>
</form>