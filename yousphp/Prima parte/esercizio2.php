<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    define("VOLUME_PACCHETTI", 10457);
    define("NODI_SERVER", 6);

    $pacchettiRimanenti = VOLUME_PACCHETTI % NODI_SERVER;
    $volumeBilanciato = VOLUME_PACCHETTI - $pacchettiRimanenti;
    
    $pacchettiNodo = $volumeBilanciato / NODI_SERVER;
    echo "Pacchetti nodo: " . $pacchettiNodo . "<br>";
    echo "Pacchetti rimanenti: " . $pacchettiRimanenti . "<br>";

    if($pacchettiRimanenti == 0){

        echo "Carico perfettamente bilanciato, il buffer di overflow e vuoto" . "<br>";

    }else{

        echo "Il carico non è perfettamente bilanciato, il buffer di overflow non è vuoto" . "<br>";

    }

    ?>
</body>
</html>