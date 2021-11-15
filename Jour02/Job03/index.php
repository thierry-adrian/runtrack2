<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste des nombres de 0 à 100</h2>

    <p>Ceux entre 0 et 20 en italique.</br>
    Ceux entre 25 et 50 doivent être soulignés.</br>
    Le nombre 42 doit être remplacé par " La Plateforme_ ".</p>
</body>
</html>

<?php

for ($i = 0; $i <= 100; $i++) {

if ($i > 0 && $i < 20) {

    echo '<i>'.$i.'</i><br/>';

} elseif ($i > 25 && $i < 42) {

    echo '<u>'.$i.'</u><br/>';

} elseif ($i == 42) {
   
    echo 'La Plateforme_<br/>';

} elseif ($i > 42 && $i < 50) {

    echo '<u>'.$i.'</u><br/>';
    
} else {

    echo $i;
    echo '<br/>';
}
}

?>
