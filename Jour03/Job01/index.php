<?php

$tab = [200, 204, 173, 98, 171, 404, 459];

// Là, j'associe un nombre à chaque cellule du tableau.

foreach ($tab as $key) {

/*
Les nombres paires sont divisible par 2 donc si le modulo est égale à 0,
cela signifie que le nombre est paire. Sinon, il est impair.
*/

    if ($key % 2 == 0) {
        echo $key." est paire.";
        echo "<br/>";
    } else {
        echo $key." est impaire.";
        echo "<br/>";
    }
    
}

?>