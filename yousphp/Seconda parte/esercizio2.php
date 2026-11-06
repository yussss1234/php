<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    define("COSTO_ABBONAMENTO", 12.99);
    define("IVA", 22);

    $valore_netto = (COSTO_ABBONAMENTO * 12) - (((COSTO_ABBONAMENTO * 12) * 22) / 100);
    $valore_lordo = (COSTO_ABBONAMENTO * 12);

    $valore_lordo_promozione = $valore_lordo - (($valore_lordo * 15) / 100);

    echo "Valore netto: " . $valore_netto . "<br>";
    echo "Valore lordo: " . $valore_lordo . "<br>";
    echo "Valore lordo con promozione del 15%: " . $valore_lordo_promozione . "<br>";

    ?>
</body>
</html>