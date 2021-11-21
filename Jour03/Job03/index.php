<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack02 - Jour03 - Job03</title>
</head>
<body>
    <h1>Runtrack02 - Jour03 - Job03</h1>

    <h3>"I'm sorry Dave I'm afraid I can't do that".</h3>
    <p>Créez un algorithme qui parcourt cette chaîne et affiche simplement les voyelles.</p>

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

            // J'extrais les index auquelles j'ai associé des variables contenant la valeurs des voyelles.

        if ($str[$i] != $a && $str[$i] != $e && $str[$i] != $hi && $str[$i] != $hI && $str[$i] != $o && $str[$i] != $y) {
        
            echo $str[$i];
        
            // En début de ligne apparaissait un doublon de la première lettre, le « I ».
            // Même en supprimant les « I », je n'arrive pas à m'en débarrasser. Que faire ?
        }
    
            
        
        }
        ?>
    
</body>
</html>