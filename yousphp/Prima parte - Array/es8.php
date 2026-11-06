<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $array = [

        "player1" => 134,
        "player2" => 20,
        "player3" => 29,
        "player4" => 200,

    ];
    
    arsort($array);

    $posizione = 0;
    echo "<ol>";

    foreach ($array as $chiave => $valore){
        if($posizione < 3){
            echo "<li>" . "Player: " . $chiave . ", Punteggio: " . $valore . "</li" . "<br>";
        }

        $posizione++;
        
    }

    echo "</ol>";
    
    ?>
</body>
</html>