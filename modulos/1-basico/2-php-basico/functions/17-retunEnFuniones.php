<?php

function get_pokemon()
{
    $numeroAleatorio = rand(1, 5);

    switch ($numeroAleatorio) {
        case 1:
            echo "Picachu";
            break;

        case 2:
            echo "Charmander";
            break;

        case 3:
            echo "Mewtwo";
            break;

        default:
            echo "Lo siento, no hay pokemon para tí";

    }
}

get_pokemon();
echo "\n";