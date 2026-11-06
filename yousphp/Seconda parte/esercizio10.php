<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $inizio = "21:30";

    $ora = date("H");
    $minuti = date("i");

    $minuti_correnti = ($ora * 60) + $minuti;

    $ora_inizio = substr($inizio, 0, 2);
    $minuti_inizio = substr($inizio, 3, 2);

    $minuti_inizio_totali = ($ora_inizio * 60) + $minuti_inizio;

    $differenza = $minuti_inizio_totali - $minuti_correnti;

    $ore = intdiv($differenza, 60);
    $minuti_mancanti = $differenza % 60;

    echo "Orario corrente: " . $ora . ":" . $minuti . "<br>";
    echo "Inizio diretta: " . $inizio . "<br>";
    echo "Minuti correnti dalla mezzanotte: " . $minuti_correnti . "<br>";
    echo "Minuti inizio dalla mezzanotte: " . $minuti_inizio_totali . "<br>";
    echo "Mancano: " . $ore . " ore e " . $minuti_mancanti . " minuti";

    ?>
</body>
</html>