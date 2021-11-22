<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcourir, compter, afficher nombre caractères</title>
</head>
<body>
    <h2>Dans l'espace, personne ne vous entend crier.</h2>
    <p>Créez un algorithme qui parcourt, compte et affiche </br>le nombre de caractéres présents dans cette chaîne.</p>

    <?php

    $str = "Dans l'espace, personne ne vous entend crier.";

    $D    = "D";
    $nbD  = 0;
    $a    = "a";
    $nba  = 0;
    $n    = "n";
    $nbn  = 0;
    $s    = "s";
    $nbs  = 0;
    $l    = "l";
    $nbl  = 0;
    $e    = "e";
    $nbe  = 0;
    $p    = "p";
    $nbp  = 0;
    $c    = "c";
    $nbc  = 0;
    $r    = "r";
    $nbr  = 0;
    $o    = "o";
    $nbo  = 0;
    $v    = "v";
    $nbv  = 0;
    $u    = "u";
    $nbu  = 0;
    $t    = "t";
    $nbt  = 0;
    $d    = "d";
    $nbd  = 0;
    $hi   = "i";
    $nbhi = 0;
    
    $esp   = " ";
    $nbesp = 0;
    $ap    = "'";
    $nbap  = 0;
    $vir   = ",";
    $nbvir = 0;
    $po    = ".";
    $nbpo  = 0;

    for ($i = 0; isset ($str[$i]); $i++) {

    if ($str[$i] == $D) {

        $nbD = $nbD + 1;

    }
    
    if ($str[$i] == $a) {

        $nba = $nba + 1;

    }
    
    if ($str[$i] == $n) {
    
        $nbn = $nbn + 1;
    }  

    if ($str[$i] == $s) {

        $nbs = $nbs + 1;
    }

    if ($str[$i] == $l) {

        $nbl = $nbl + 1;

    }
    
    if ($str[$i] == $e) {

        $nbe = $nbe + 1;

    }
    
    if ($str[$i] == $p) {

        $nbp = $nbp + 1;

    }
    
    if ($str[$i] == $c) {

        $nbc = $nbc + 1;

    }
    
    if ($str[$i] == $r) {

        $nbr = $nbr + 1;

    }
    
    if ($str[$i] == $o) {

        $nbo = $nbo + 1;

    }

    if ($str[$i] == $n) {

        $nbn = $nbn + 1;

    }
    
    if ($str[$i] == $v) {

        $nbv = $nbv + 1;

    }
    
    if ($str[$i] == $u) {

        $nbu = $nbu + 1;

    }
    
    if ($str[$i] == $t) {

        $nbt = $nbt + 1;
    
    }

    if ($str[$i] == $d) {

        $nbd = $nbd + 1;

    }
    
    if ($str[$i] == $hi) {

        $nbhi = $nbhi + 1;

    }

    if ($str[$i] == $esp) {

        $nbesp = $nbesp + 1;
    }

    if ($str[$i] == $ap) {

        $nbap = $nbap + 1;

    }
    
    if ($str[$i] == $po) {

        $nbpo = $nbpo + 1;

    }
    }

    echo $D." = ".$nbD.",";
    echo "</br>";
    echo $a." = ".$nba.",";    
    echo "</br>";
    echo $n." = ".$nbn.",";
    echo "</br>";
    echo $s." = ".$nbs.",";
    echo "</br>";
    echo $l." = ".$nbl.",";
    echo "</br>";
    echo $e." = ".$nbe.",";
    echo "</br>";
    echo $p." = ".$nbp.",";
    echo "</br>";
    echo $c." = ".$nbc.",";
    echo "</br>";
    echo $r." = ".$nbr.",";
    echo "</br>";
    echo $o." = ".$nbo.",";
    echo "</br>";
    echo $v." = ".$nbv.",";
    echo "</br>";
    echo $u." = ".$nbu.",";
    echo "</br>";
    echo $t." = ".$nbt.",";
    echo "</br>";
    echo $d." = ".$nbd.",";
    echo "</br>";
    echo $hi." = ".$nbhi.",";
    echo "</br>";
    
    echo "</br>";
    echo "Et bien sûr :";
    echo "</br></br>";
    echo "&laquo &raquo = ".$nbesp.", (Les espaces.),";
    echo "</br>";
    echo $ap." = ".$nbap.", (L'apostrophe.),";
    echo "</br>";
    echo $vir." = ".$nbvir.", (La virgule.),";
    echo "</br>";
    echo $po." = ".$nbpo.", (Et le  point final.).";

    ?>
</body>
</html>