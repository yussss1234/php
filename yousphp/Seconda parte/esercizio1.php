<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nome = "Alessandro           ";
    $cognome = "Rossi         ";
    $anno_nascita = "        2007";

    $nome = trim($nome);
    $cognome = trim($cognome);
    $anno_nascita = trim($anno_nascita);

    $gamertag = substr($cognome, 0, 3) . substr($nome, 0, 3) . substr($anno_nascita, 2, 2);
    $gamertag = strtoupper($gamertag);

    echo $gamertag . "<br>";

    $indirizzo = $nome . "." . $cognome . "@studenti.istituto.it";
    $indirizzo = trim($indirizzo);
    $indirizzo = strtolower($indirizzo);

    echo "Indirizzo scolastico: " . $indirizzo;

    ?>
</body>
</html>