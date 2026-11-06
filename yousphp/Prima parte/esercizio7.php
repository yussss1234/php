<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    define("FATTORE_ATTIVITA", 1.375);

    $peso = 70.5;
    $altezza = 175;
    $eta = 18; 

    $bmr = 88.36 + (13.5 * $peso) + (4.8 * $altezza) - (5 * $eta);
    $fabbisogno_calorico = $bmr * FATTORE_ATTIVITA;

    echo "BMR: " . $bmr . "<br>";
    echo "Fabbisogno calorico: " . number_format($fabbisogno_calorico,2, ",", ".") . "<br>";

    ?>
</body>
</html>