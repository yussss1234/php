<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    const LUNGHEZZA_MIN = 5;

    $array = [

        "  ciao  ",
        "php",
        "come stai",
        "casalecchio",

    ];

    function filtraEFormattaTesti($arrayTesti, $lunghezzaMinima){

        $newArr = [];

        foreach($arrayTesti as &$testo){

            $testo = str_replace("", "", $testo);
            $testo = strtoupper($testo);

            if(strlen($testo) >= LUNGHEZZA_MIN){

                $newArr[] = $testo;

            }

        }
        unset($testo);
        return $newArr;

    }

    $arrayNuovo = filtraEFormattaTesti($array, LUNGHEZZA_MIN);

    echo "Testi:<br>";
    foreach($arrayNuovo as $index){

        echo $index;
        echo "<br>";

    }
    
    ?>
</body>
</html>