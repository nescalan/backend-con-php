<?php

// Variables
$fred = "Fred's Name";
$paperArray = [
    "Copier" => "Copier And Multipurpose",
    "Inkjet" => "Inkjet Printer",
    "Laser" => "Laser Printer",
    "Photo" => "Photographic Paper",
];
$sortedArray = [...$paperArray];

// Beginig
// echo is_array($paperArray) ? "Is an array" : "Is not an array";
// echo " \n";
// $counted = count($paperArray);
// echo "and it has $counted elements \n";

// rsort($sortedArray, SORT_STRING);
shuffle($sortedArray);

foreach ($sortedArray as $machine) {
    echo $machine . "\n";
}


?>