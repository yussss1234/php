<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    define("K_FACTOR", 32);
    
    $mmr_giocatore = 1480;
    $mmr_avversario = 1520;
    $esito_incontro = true;

    $valore_atteso = 0.5 + ($mmr_avversario - $mmr_giocatore) / 1000;
    echo "Valore atteso di vittoria: " . $valore_atteso . "<br>";

    $variazione_punti = K_FACTOR * (1 - $valore_atteso);

    echo "Variazione di punti: " . $variazione_punti . "<br>";

    if($esito_incontro == true){

        $mmr_giocatore = $valore_atteso + $variazione_punti;

    }else{

        $mmr_giocatore = $valore_atteso - $variazione_punti;

    }

    echo "MMR giocatore: " . $mmr_giocatore . "<br>";

    if($mmr_giocatore > 1500){

        echo "Congratulazioni! Hai ricevuto una promozione di lega";

    }
    
    ?>
</body>
</html>