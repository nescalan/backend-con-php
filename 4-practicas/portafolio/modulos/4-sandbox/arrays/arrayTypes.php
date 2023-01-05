<?php

// Variables: Basic Arrays
$basicArray = ["Marco", "Mama", "Papa",];

// Variables: Associative Arrays
$associativeArray = [
    "Copier" => "Copier and Multipurpose",
    "Inkjet" => "Inkjet Printer",
    "Laser" => "Laser Printer",
    "Photo" => "Photographic Paper",
];

// Variables: Multidimensional Arrays
$multidimensionalArray = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rober", 17, 15],
];

// Begining

foreach ($basicArray as $name) {
    echo "Name: $name \n";
}

echo "\n";

foreach ($associativeArray as $printer => $description) {
    echo "$printer: $description \n";
}

echo "\n";

foreach ($multidimensionalArray as $category => $car) {
    foreach ($car as $key => $description) {
        echo "$category: \t$key\t ($description) \n";
        // echo "$section:\t$key\t($value)<br>";
    }
}
