<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    define("TARIFFA_MENSILE", 0.08);
    define("TARIFFA_ORARIA", 0.02);

    $GBOccupati = 450;
    $oreAttivita = 720;

    $costoTotale = TARIFFA_MENSILE * $GBOccupati + TARIFFA_ORARIA * $oreAttivita;
    echo "Costo lordo: " . number_format($costoTotale,2, ",", ".") . "<br>";
    
    $istituto = true;
    $scontoIstituto = 0;

    if($istituto == true){

        $scontoIstituto = $costoTotale % 15;

    }

    echo "Sconto istituto: " . number_format($scontoIstituto,2, ",", ".") . "<br>";

    $costoTotale = $costoTotale - $scontoIstituto;

    echo "Costo netto: " . number_format($costoTotale,2, ",", ".") . "<br>";

    ?>

</body>
</html>