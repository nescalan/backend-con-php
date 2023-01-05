<?php

// Variables:
$counter = 0;

// Arrays: Single Array or Indexed Array
$arrayCars1 = array("Volvo", "Nissan", "Mitsubishi");
$arrayCars2 = ["Volvito", "Nissansito", "Mitsubishito"];


// echo "This is the array No 1: $arrayCars1[0] , $arrayCars1[1] , $arrayCars1[2]";
// echo "\n";
// echo "This is the array No 2: $arrayCars2[0] , $arrayCars2[1] , $arrayCars2[2]";
// echo "\n";

// Arrays: Associative Arrays
$associativeAge = array(
    "Papa" => "47",
    "Mama" => "39",
    "Mark" => "4",
);
$associativeAge2 = [
    "Tita" => "69",
    "Tito" => "59",
];
$cafes = [
    "Capuccino" => 50,
    "Latte" => 45,
    "Americano" => 40,
    "Te chai" => 45
];

// echo "Nelson is " . $associativeAge["Papa"] . " years old";
// echo "\n";
// echo "Tita is " . $associativeAge2["Tita"] . " years old ";



// Arrays: Multidimensional Arrays
$multiArray1 = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
);
$multiArray2 = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];
$cars = [
    "Volvo" => array
        (
        "XC60",
        "XC90"
    ),
    "BMW" => array
        (
        "X3",
        "X5"
    ),
    "Toyota" => array
        (
        "Highlander"
    )
];

// echo "Brand: " . $multiArray1[0][0] . " Stock: " . $multiArray1[0][1];
// echo "\n";

// echo "Brand: " . $multiArray2[0][0] . " Stock: " . $multiArray2[0][1];
// echo "\n";
// echo count($multiArray1);
// echo "\n";

// while ($counter <= count($arrayCars1)) {
//     echo "Brand: " . $multiArray1[$counter][0] . " Stock: " . $multiArray1[$counter][1] . " Sold: " . $multiArray1[$counter][2];
//     echo "\n";
//     ++$counter;
// }

foreach ($associativeAge as $person => $edge) {
    echo "$person tiene $edge años";
    echo "\n";
}