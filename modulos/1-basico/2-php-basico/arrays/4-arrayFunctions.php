<?php

// Declaracion: Variables
$edades = [18, 22, 40, 34];
$listaFrutas = "banano, sandia, papaya";
$listaFrutasArreglo = [];

// Script: Funciones para arreglos
echo count($edades);
echo "\n";

$listaFrutasArreglo = explode(",", $listaFrutas);
var_dump($listaFrutasArreglo);