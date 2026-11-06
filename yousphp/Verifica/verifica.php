<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789#!";

        $seriale = substr(str_shuffle(str_repeat($caratteri, 40)), 0, 40);

        $regex = "/[a-c][0-9]#/";

        preg_match_all($regex, $seriale, $matches);

        $risultato = count($matches[0]);

        echo "Seriale: " . $seriale . "<br>";
        echo "Trovato " . $risultato . ", volte";
    
    ?>
</body>
</html>