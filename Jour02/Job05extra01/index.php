<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres au carré.</title>
</head>
<body>
    <h2>Nombres qui sont des carrés d'autre nombres<br/>
    et qui sont compris entre 1 et 1000.</h2>
    <h3>Une découverte pouvant être utile.</h3>

</body>
</html>

<?php

for ($i = 1; $i <= 1000; $i++) {

    for ($y = 1 ;$y <= 1000; $y++) {

    if (($i / $y ) == $y) {

    echo $i;
    echo '<br/>';
}
}
}
?>
