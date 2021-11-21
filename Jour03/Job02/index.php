<?php

// Une anomalie. Je n'arrive pas à positionner le « u » du premier mot à sa place.

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Les chaînes de caractères étant indexées, je demande au PHP d'afficher simplement un caractère.

echo $str[0];

for ($i = 0; isset ($str[$i]); $i++) {
    
// J'extrais de la liste les caractères dont l'index n'est pas pair.

if ($i != ($i % 2 != 0)) {

    echo $str[$i];
    echo "</br></br>";
}
}
?>
