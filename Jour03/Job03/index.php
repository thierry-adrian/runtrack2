<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack02 - Jour03 - Job03</title>
</head>
<body>
    <p>Runtrack02 - Jour03 - Job03</p>
    <p>Fichier modifié. Dans la première version, j'avais supprimé les consonnes plutôt que les voyelles.</p>
    
    </br>
    
    <h3>"I'm sorry Dave I'm afraid I can't do that."</h3>
    <p>Créer un algorithme qui parcourt cette chaîne et affiche simplement les voyelles.</p>
    </br>

    <?php

        $str = "I'm sorry Dave I'm afraid I can't do that.";

        echo $str[0];

        $a = "a";
        $e = "e";
        $hi = "i";
        $hI = "I";
        $o = "o";
        $y = "y";


        for ($i = 0; isset ($str[$i]); $i++) {

            // Je me retrouve toujours avec un doublon de la première lettre, le « I ». (?)

            
            // Je dis au PHP de ne sélectionner que les voyelles contenuent dans $str.

        if ($str[$i] == $a OR $str[$i] == $e OR $str[$i] == $hi OR $str[$i] == $o OR $str[$i] == $hI OR $str[$i] == $y)
     
            echo $str[$i];
        

        }

        ?>
    
</body>
</html>