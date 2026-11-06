<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function applicaScontoListino(&$prodotti, $percentualeSconto) {

            $risparmioTotale = 0;

            foreach ($prodotti as &$prezzo) {

                $sconto = $prezzo * $percentualeSconto / 100;

                $prezzo = $prezzo - $sconto;

                $risparmioTotale = $risparmioTotale + $sconto;

            }

            unset($prezzo);

            return $risparmioTotale;
        }

        $prodotti = [
            "Mouse" => 20.00,
            "Tastiera" => 50.00,
            "Monitor" => 200.00,
            "Cuffie" => 40.00
        ];

        $risparmio = applicaScontoListino($prodotti, 20);

        echo "Risparmio totale: " . $risparmio . " euro<br>";

        foreach ($prodotti as $nome => $prezzo) {
            echo $nome . ": " . number_format($prezzo, 2, ",", ".") . " euro<br>";
        }

    ?>
</body>
</html>