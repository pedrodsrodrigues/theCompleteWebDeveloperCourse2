<?php
// Create an array with values
$array = ['Pedro', 'Jorge', 'Leandro', 'Daniel'];

echo 'Array depois antes da nova aquisição:';
print_r($array);

// Give a new value
$array[] = 'Débora';

echo 'Array depois da nova aquisição:';
print_r($array);

echo '<br>';

// Remove a value from an array, giving the key we want to remove
// Important note: This will not change the keys of the elements
unset($array[0]);

echo 'Array, depois da saída de um membro: ';
print_r($array);

echo '<br>';

// Create an array and start to give values
$similarArray[0] = 'Pedro';
$similarArray[1] = 'Jorge';
$similarArray[2] = 'Leandro';
$similarArray[3] = 'Daniel';
$similarArray['Newest member'] = 'Débora';

print_r($similarArray);

echo '<br>';

// Create an array with values, but with different keys
$array2 = [
    'Portugal' => 'Portuguese',
    'Spain'    => 'Spanish',
    'France'   => 'French'
];

print_r($array2);

echo '<br>';

// Shows the length/size of an array
echo 'Tamanho do array: ' . sizeof($array2);

echo '<br><br>';

$arrayForEach = ['1', '2', '3', '4', '5', '6', '7'];

// Iterar o array
foreach ($arrayForEach as $key => $value) {
    // Concatenate the value with something more
    // $value .= '0';

    // Concatenate the value with something more, changing the array values
    $arrayForEach[$key] = $value . '0';

    // Here it will use the old values instead of the new ones
    echo 'Key ' . $key . ' com o value: ' . $value;

    echo '<br>';
}

echo 'Array, depois das mudanças: ';
print_r($arrayForEach);
