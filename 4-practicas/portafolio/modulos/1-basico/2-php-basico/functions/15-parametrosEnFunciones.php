<?php

function areYouLegend($platziRank){
    $rank = 20000;

    if ($platziRank >= $rank ) {
        echo "You are a Legend \n";
    } else {
        echo "I'm so sorry, but you are not a legend yet!!! \n";
    }
    
}

$platziRank = (int) readline("Please, insert your Platzi rank: ");

areYouLegend($platziRank);