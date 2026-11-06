<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $punti = 1850;
    $vittorieConsecutive = 4;

    if($vittorieConsecutive >= 3){

        $punti += 50;
        echo "Applicato bonus di 50 punti, punti attuali: " . $punti . "<br>";

    }

    if($punti < 1000){

        echo "Lega: Bronzo";

    }else if($punti >= 1000 and $punti <= 1499){

        echo "Lega: Argento";

    }else if($punti >= 1500 and $punti <= 1999){

        echo "Lega: Oro";

    }else if($punti >= 2000){

        echo "Lega: Platino";

    }
    
    ?>
</body>
</html>