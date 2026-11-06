<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $elemento = "mele";
    $prodotti = [

        "patate" => 4,
        "dolci" => 2,
        "mele" => 1,
        "pere" => 7,

    ];

    $prodotti[$elemento] = $prodotti[$elemento] - 1;

    foreach($prodotti as $chiave => $valore){

        echo "Prodotto: " . $chiave . ", Quantita: " . $valore . "<br>";

    }
    
    ?>
</body>
</html>