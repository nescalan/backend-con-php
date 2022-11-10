<?php

// Example 6-6. Walking through a numeric array using foreach ... as
// $paper = ["Copier", "Inkjet", "Laser", "Photo"];
// $j = 0;

// foreach ($paper as $element) {
//     echo "$j: $element \n";
//     $j++;
// }


// Example 6-7. Walking through an associative array using foreach ... as
// $paperArray = [
//     "Copier" => "Copier And Multipurpose",
//     "Inkjet" => "Inkjet Printer",
//     "Laser" => "Laser Printer",
//     "Photo" => "Photographic Paper",
// ];

// foreach ($paperArray as $printer => $description) {
//     echo "$printer: $description \n";
// }
// ;

// Example 6-8. Walking through an associative array using each and list
$products = [
    "paper" => [
        "Copier" => "Copier And Multipurpose",
        "Inkjet" => "Inkjet Printer",
        "Laser" => "Laser Printer",
        "Photo" => "Photographic Paper",
    ],
    "pens" => [
        "Ball" => " Ball Point",
        "Marker" => "Markers",
        "Hilite" => "Highliters",
    ],
];

foreach ($products as $section => $items) {
    foreach ($items as $key => $description) {
        echo "$key: $description \n";
    }
}

?>