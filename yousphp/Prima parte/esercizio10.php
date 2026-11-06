<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    define("SOGLIA_FULL", 48);
    define("SOGLIA_PARTIAL", 24);

    $ore_rimanenti = 36;
    $assicurazione_viaggo = false;
    $classe_biglietto = "Business";

    if($ore_rimanenti >= 48 || $assicurazione_viaggo == true){

        echo "Hai diritto a un rimborso totale (100%)";

    }else{

        if($ore_rimanenti >= 24 || $classe_biglietto == "Business"){

            echo "Hai diritto a un rimborso parziale (50%)";

        }

    }

    ?>
</body>
</html>