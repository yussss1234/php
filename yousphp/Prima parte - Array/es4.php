<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $voti = [

        [

            "materia" => "Scienze",
            "voto" => "3",

        ],

        [

            "materia" => "Informatica",
            "voto" => "9",

        ],

        [

            "materia" => "Biologia",
            "voto" => "7",

        ],

        [

            "materia" => "Fisica",
            "voto" => "1",

        ],

    ];

    $somma = 0;
    $maggiore = 0;
    $cont = 0;
    $materia = "";
    foreach($voti as $voto){

        $somma = $somma + $voto["voto"];
        $cont = $cont + 1;

        if($voto["voto"] > $maggiore){

            $maggiore = $voto["voto"];
            $materia = $voto["materia"];

        }

    }

    $media = $somma / $cont;
    echo "La media e: " . $media . ", La materia con il maggior voto e: " . $materia . " e il voto e: " . $maggiore;
    
    ?>
</body>
</html>