<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $codice_promo = "GAMER2025";

    $codice_inverso = strrev($codice_promo);
    echo "Codice al contrario: " . $codice_inverso . "<br>";

    if ($codice_promo[0] == $codice_promo[strlen($codice_promo) - 1]) {
        echo "Il primo e l'ultimo carattere coincidono";
    } else {
        echo "Il primo e l'ultimo carattere non coincidono";
    }

    ?>
</body>
</html>