<?php

// Variables
$actualTime = "";

// Functions
function getLocalTime()
{
    $time = date("h:i:s a");
    return $time;
}

// Beginin of Program
echo ("Me puedes indicar qué hora es. \n");
echo ("Claro, son las: " . getLocalTime() . "\n");



// End of Program
?>