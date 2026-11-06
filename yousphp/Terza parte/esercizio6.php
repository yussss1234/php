<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $voto = "7.75";

    $parte_numerica = substr($voto, 0, 1);
    $parte_decimale = substr($voto, 2, 2);
    
    switch($parte_decimale){

        case "0.25":
            $voto = $parte_numerica . "+";

        case "0.75":
            settype($parte_numerica, "int");
            $parte_numerica = $parte_numerica + 1;
            $voto = $parte_numerica . "-"; 

    }


    echo $voto;

    ?>
</body>
</html>