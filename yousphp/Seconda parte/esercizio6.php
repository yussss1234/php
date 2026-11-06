<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $durata1 = 215;
    $durata2 = 180;
    $durata3 = 240;
    $durata4 = 195;

    $tempo_totale = $durata1 + $durata2 + $durata3 + $durata4;

    $secondi = $tempo_totale % 60;
    $tempo_totale = $tempo_totale - $secondi;
    $minuti = $tempo_totale / 60;

    echo $minuti . " minuti e " . $secondi . " secondi";

    ?>
</body>
</html>