<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $descrizione = "Sviluppatore PHP nel tempo libero. Appassionato di gaming, tecnologia e serie TV!";

    if(strlen($descrizione) > 40){

        $descrizione = substr($descrizione, 0, 40) . "...";

    }

    echo "Descrizione: " . $descrizione;

    ?>
</body>
</html>