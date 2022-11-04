<?php

// Variables: Declaration
$seconds = 0;
$minutes = 0;
$hours = 0;

// Const: Declaration
const SECONDS_IN_A_HOUR = 3600;
const ONEMINUTE = 60;

$seconds = readline("Input the time in seconds: ");

print("This is your input: $seconds");
print("\n");

$hours   = (int) ($seconds / SECONDS_IN_A_HOUR);
$seconds = (int) ($seconds % SECONDS_IN_A_HOUR);
$minutes = (int) ($seconds / ONEMINUTE);
$seconds = (int) ($seconds % ONEMINUTE);

echo "The input time result is: $hours hours, $minutes minutes and $seconds seconds.";
echo "\n";