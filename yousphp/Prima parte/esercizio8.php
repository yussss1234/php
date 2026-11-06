<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $lettura = true;
    $scrittura = true; 
    $esecuzione = false;

    $valore_permesso = 0;

    if($lettura == true){

        $valore_permesso = $valore_permesso + 4;

    }

    if($scrittura == true){

        $valore_permesso = $valore_permesso + 2;

    }

    if($esecuzione == false){

        $valore_permesso = $valore_permesso + 1;

    }

    if($scrittura == true && $esecuzione == true){

        echo "Ha sia i permessi di scrittura che di esecuzione";

    }

    echo "Valore numerico del permesso: " . $valore_permesso . "<br>";

    ?>
</body>
</html>