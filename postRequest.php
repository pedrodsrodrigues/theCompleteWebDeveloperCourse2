<?php
// Check if there was a POST Request, with at least one variable
if ($_POST) {
    // Verifies if the array "$_POST" has a key called "name" and "surname"
    if (array_key_exists('name', $_POST) && array_key_exists('surname', $_POST)) {
        // Shows the variables (and their values) that were sent through a POST request
        print_r($_POST);

        echo '<br>';

        // Shows the value of a specific variable that was sent through a POST request
        echo 'Hi there ' . $_POST['name'] . ' ' . $_POST['surname'] . '!';
    }
}
?>

<p>What's your name?</p>

<!-- POST Request -->
<form method='post'>
    <span>
        Name:
        <input name='name' type='text' required>
    </span>

    <span>
        Surname:
        <input name='surname' type='text' required>
    </span>

    <input type='submit' value='Go!'>
</form>

<?php
$usernames = ['Pedro', 'Daniel', 'Jorge', 'Leandro', 'Débora'];

// Check if there was a POST Request, with at least one variable
if ($_POST) {
    foreach ($usernames as $key => $value) {
        if ($value === $_POST['name']) {
            echo 'You got in!';

            return;
        } else if ($key === (sizeof($usernames) - 1)) {
            echo 'Not valid';
        }
    }
}
?>