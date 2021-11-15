<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres premiers</title>
</head>
<body>
    <h2>Une autre découverte,<br/>
    une incongruité.</h2>

</body>
</html>

<?php

for ($i = 1; $i <= 1000; $i++) {

    for ($y = 1; $y >= 1 && $y <= 1000; $y++) {

    if ($i / $y > 1 && $i / $y < 1000) {

    echo $i;
    echo '<br/>';
}
}
}
?>
