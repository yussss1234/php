<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function analizzaRegistro($votiMateria) {

            $somma = 0;
            $votoMax = 0;
            $materiaTop = "";

            foreach ($votiMateria as $materia => $voto) {

                $somma = $somma + $voto;

                if ($voto > $votoMax) {
                    $votoMax = $voto;
                    $materiaTop = $materia;
                }

            }

            $media = $somma / count($votiMateria);

            return [
                "media" => $media,
                "materia_top" => $materiaTop,
                "voto_top" => $votoMax
            ];

        }

        $voti = [
            "Informatica" => 9,
            "Italiano" => 7,
            "Matematica" => 8,
            "Inglese" => 10
        ];

        $risultato = analizzaRegistro($voti);

        echo "Media: " . $risultato["media"] . "<br>";
        echo "Materia migliore: " . $risultato["materia_top"] . "<br>";
        echo "Voto massimo: " . $risultato["voto_top"];

    ?>
</body>
</html>