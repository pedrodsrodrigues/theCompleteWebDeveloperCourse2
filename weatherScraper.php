<?php
// Define the var here to not give an error when the user didn't requested any city yet
$weather  = '';

$hasError = false;

// Verifies if the array "_GET" has the variable "city"
if (array_key_exists('city', $_GET)) {
// if ($_GET['city']) {
    $city = str_replace(' ', '-', $_GET['city']);

    $url = 'http://completewebdevelopercourse.com/locations/' . $city;

    $forecastPage = file_get_contents($url);

    // Get the response's header
    $file_headers = @get_headers($url);

    // print_r(get_headers($url));

    // When the page doesn't exist, the website sends me a blank page. So below I use that to check if it was found or not using the length
    // if ($file_headers[0] == 'HTTP/1.1 404 Not Found'){
    if ($file_headers[3] != 'content-length: 0') {
        $pageArray = explode('1 &ndash; 3 Day Weather Forecast Summary:</b>', $forecastPage);

        $pageArray2 = explode('</span>', $pageArray[1]);

        $weather = $pageArray2[0];
    } else {
        $hasError = true;
    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Weather Scraper</title>
</head>

<body>
    <form>
        <h1>Enter the name of a city</h1>

        <input type='text' id='city' name='city' placeholder='London, Lisbon' value='
            <?php
            // Verifies if the array "_GET" has the variable "city"
            if (array_key_exists('city', $_GET)) {
                echo $_GET['city'];
            }
            ?>
        ' required>

        <input type='submit'>
    </form>

    <br>

    <?php
    if ($hasError == true) {
        echo 'That city could not be found!';
    } else if ($weather) {
        echo $weather;
    }
    ?>
</body>

</html>