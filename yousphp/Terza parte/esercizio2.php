<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $percentuale = 14;
    $inCarica = false;

    if($percentuale <= 20 && $percentuale > 10){

        echo "Risparmio energetico attivo, livello batteria: " . $percentuale;

    }elseif($percentuale <= 10){

        echo "Batteria scarica, livello batteria: " . $percentuale;

    }else{


        echo "Batteria OK, livello batteria: " . $percentuale; 

    }

    ?>
</body>
</html>