<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $livello_personaggio = 22;
    $ore_gioco = 45;
    $premium = true;

    if(($livello_personaggio >= 20 & $ore_gioco > 50)  || $premium == true){

        echo "Hai i requisiti per il Drop leggendario assegnato";

    }else{

        echo "Non hai i requisti per il Drop leggendario assegnato";

    }

    ?>
</body>
</html>