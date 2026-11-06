<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $frase = "sei un noob, usi i cheat, sembri un bot";
    $vietate = ["noob", "cheat", "bot"];

    echo "Frase originale: " . $frase;

    foreach($vietate as $parola){

        $frase = str_replace($parola, "[CENSURATO]", $frase);

    }

    echo "<br>Frase censurata: " . $frase;

    
    ?>
</body>
</html>