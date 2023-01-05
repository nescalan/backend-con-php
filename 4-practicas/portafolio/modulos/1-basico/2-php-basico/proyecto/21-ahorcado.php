<?php

// Variables
$choosen_word = "";

const MAX_ATTEMPS = 6;


// Array
$possible_words = [
    "Ala",
    "Gallo",
    "Dolor",
    "Platzi",
    "Bebida",
    "Prisma",
    "Piloto",
    "Baldosa",
    "Terremoto",
    "Asteroide",
];

// Functions
function clear()
{
    if (PHP_OS === "WINNT") {
        system("cls");
    } else {
        system("clear");
    }

}

// Begin
echo "Juego del ahorcado \n \n";

// Inicitalizamos el juego
$choosen_word = $possible_words[rand(0, 9)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discover_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

    echo "Es una palabra de $word_length letras. \n";
    echo $discover_letters . "\n";
    echo "\n";

    // Solicitamos la letra al jugador
    $player_letter = readline("Escriba una letra: ");
    $player_letter = strtolower($player_letter);

    // Validación de la letra ingresada
    if (str_contains($choosen_word, $player_letter)) {
        $offset = 0;

        // Verificamos todas las ocurrencias de la letra para remplazarla
        while (
        ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
        ) {

            $discover_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;

        }

    } else {
        clear();
        $attempts++;
        echo "Letra incorrecta. Te quedan " . (MAX_ATTEMPS - $attempts) . " intentos \n";
        sleep(2);
    }
    clear();
} while ($attempts < MAX_ATTEMPS && $discover_letters != $choosen_word);

// End