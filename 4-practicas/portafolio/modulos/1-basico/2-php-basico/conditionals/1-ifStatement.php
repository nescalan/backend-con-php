<?php

// VAriables
$bank_balance = 99;
$asientos_disponibles = 0;

//  Ejemplo 1


  if ($bank_balance < 100)
  {
    $money         = 1000;
    $bank_balance += $money;
  }
 
  echo "Money in the bank: $bank_balance";
  echo "\n";

  
  //   Ejemplo 2
  if ($asientos_disponibles > 0) {
      echo "Puedes ver la pelicula";
    } else {
        echo "Lo siento, ya no hay asientos disponibles";
    }
    echo "\n";
