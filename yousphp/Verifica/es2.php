<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $frutti = [

            [
                "nome" => "Mele",
                "quantita_kg" => 120,
                "prezzo_kg" => 2.50
            ],
            [
                "nome" => "Banane",
                "quantita_kg" => 80,
                "prezzo_kg" => 1.80
            ],
            [
                "nome" => "Fragole",
                "quantita_kg" => 25,
                "prezzo_kg" => 4.00
            ],
            [
                "nome" => "Arance",
                "quantita_kg" => 100,
                "prezzo_kg" => 2.20
            ],
            [
                "nome" => "Uva",
                "quantita_kg" => 40,
                "prezzo_kg" => 3.50
            ]

        ];

        $totale = 0.0;
        $massimo = 0.0;
        $frutto_max = [

            "nome" => "null",
            "quantita_kg" => 0,
            "" => 0.0,
            "ricavo" => 0.0,

        ];

        foreach($frutti as &$frutta){

            $frutta["ricavo"] = $frutta["quantita_kg"] * $frutta["prezzo_kg"];
            $totale += $frutta["ricavo"];

            if($frutta["ricavo"] > $massimo){

                $massimo = $frutta["ricavo"];
                $frutto_max["nome"] = $frutta["nome"];
                $frutto_max["quantita_kg"] = $frutta["quantita_kg"];
                $frutto_max["prezzo_kg"] = $frutta["prezzo_kg"];
                $frutto_max["ricavo"] = $frutta["ricavo"];

            }

        }

        echo "<table border='1'>";

        echo "<tr>
                <th>Nome</th>
                <th>Quantità</th>
                <th>Prezzo</th>
                <th>Ricavo</th>
            </tr>";


        foreach($frutti as $frutta){

            echo "<tr>";
            echo "<td>" . $frutta["nome"] . "</td>";
            echo "<td>" . $frutta["quantita_kg"] . "</td>";
            echo "<td>" . $frutta["prezzo_kg"] . "</td>";
            echo "<td>" . $frutta["ricavo"] . "</td>";
            echo "</tr>";

        }

        

        usort($frutti, function($a, $b) {
            return $a["ricavo"] <=> $b["ricavo"];
        });

        echo "<tr>";
        echo "<td>" . "Ricavo complessivo" . "</td>" . "<td></td>" . "<td></td>" . "<td>" . $totale . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo $frutto_max;
        echo "</tr>";
        

        echo "</table>";
    ?>
</body>
</html>