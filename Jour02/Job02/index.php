<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste des nombres de 0 à 1337</h2>

    <p>Ne pas faire apparaitre les nombres 26, 37, 88, 1111, 3233</p>
</body>
</html>


<?php

for ($i = 0; $i <= 1337; $i++) {

if ($i != 26) {

if ($i != 37) {

if ($i != 88) {

if ($i != 1111) {

if ($i != 3233) {

    echo $i;
    echo '<br/>';    
}
}
}
}
}
}
?>
