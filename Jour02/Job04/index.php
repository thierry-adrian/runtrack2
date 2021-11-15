<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste des nombres de 1 à 100</h2>
    <h3>Retour à la ligne entre chaque nombre</h3>
    <p font-weight="bold">Remplacer certains nombres par un mot.</p>
    <p> - Si le nombre est un multiple de 3, afficher "Fizz".</p>
    <p> - Si le nombre est un multiple de 5, afficher "Buzz".</p>
    <p> - Si le nombre est un multiple de 3 et de 5, afficher "FizzBuzz".</p>
</body>
</html>

<?php

for ($i = 1; $i <= 100; $i++) {

if (($i % 3 == 0) && ($i % 5 == 0)) {

    echo '"FizzBuzz"<br/>';
    
} elseif ($i % 3 == 0) {

    echo '"Fizz"<br/>';

} elseif ($i % 5 == 0) {

    echo '"Buzz"<br/>';

} else {

    echo $i;
    echo '<br/>';
}
}

?>
