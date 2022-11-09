<?php

// Indexed Arrays
$inlineIndexedArray = ["Red", "Green", "Blue"];
$indexedArray[0] = "Copier";
$indexedArray[1] = "Inkjet";
$indexedArray[2] = "Laser";
$indexedArray[3] = "Photo";

var_dump($inlineIndexedArray);
var_dump($indexedArray);

// PHP Associative Arrays
$age = [
    "Nelson" => 47,
    "Nathy" => 38,
    "Marco" => 4,
];

var_dump($age);


// PHP - Multidimensional Arrays
$cars = [
    ["volvo", 22, 18],
    ["BMW", 15, 13],
    ["Land Rover", 17, 15],
];

var_dump($cars);

?>