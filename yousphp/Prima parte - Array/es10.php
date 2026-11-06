<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        $studenti = [
            "Youssef" => [true, true, false, true, true],
            "Ahmed"   => [true, false, true, true, false],
            "Luca"    => [true, true, true, true, true],
        ];

        $presenze = 0;

        foreach($studenti as $chiave => $valore){

            $presenze = 0;

            foreach($valore as $valori){

                if($valori == true){

                    $presenze++;

                }

            }

            $percentuale = ($presenze / 5) * 100;
            echo "Presenze di " . $chiave . ": " . $presenze . ", Percentuale: " . $percentuale . "%" . "<br>";

        }
    
    ?>
</body>
</html>