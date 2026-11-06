<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $ora_attuale = 15;
    $giorno_settimana = 6;
    $manutenzione = false;

    if(($ora_attuale >= 14 && $ora_attuale <= 22) && $manutenzione == false && $giorno_settimana != 7){

        echo "Server accessibile";

    }else{

        echo "Server non accessibile";

    }

    ?>
</body>
</html>