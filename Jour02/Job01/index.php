<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste des nombres compris entre 0 et 1337</h2>
</body>
</html>


<?php

/*
Liste des nombres compris entre 0 et 1337.
Dans cette version, dans la boucle for, on utilise $i = 0, plutôt que $i = 1 
pour faire commencer la liste à 0, mais on rajoute une condition if
pour supprimer le 0 de la liste.
*/

for ($i = 0; $i < 1337; $i++) {

if ($i > 0) {
    
if ($i == 42) {
    echo "<b><u>".$i."</u></b></br>";
} else {
    echo $i;
    echo '<br/>';
}
}
}
?>
