<?php

$name = $_POST['name'];
$lastname = $_POST['last'];
$age = $_POST['age'];
$born = $_POST['fecha'];


// Create arrays
// Simple array
// $one = array('elementoUno', 'elementDos', 'elementoTres');

// Associative array

$dos = [
    'name' => $name,
    'lastName' => $lastname,
    'age' => $age,
    'born' => $born
];

// // Print array simple and associative 

// // Acces on key
// print $dos['name'];
// echo $dos['lastName'];
// echo $dos['age'];

// // Itering associative array

foreach ($dos as $key => $value) {
    echo $value;
    echo '</br>';
}   

// echo '</br>';
// // Acces on positional
// echo $one[1];

// // Itering normal array

// foreach($one as $value) {
//     echo $value;
// }


?>