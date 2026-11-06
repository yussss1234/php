<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $prodotti = [
            "Mouse" => 20.00,
            "Tastiera" => 45.50,
            "Monitor" => 180.00,
            "Cuffie" => 35.00
        ];

        foreach($prodotti as $chiave => &$valore){

            $valore = $valore * 1.22; 

        }
        
        unset($valore);
        arsort($prodotti);

        echo "<table border='1'><tr><th>Prodotto</th><th>Prezzo</th></tr>";

        foreach ($prodotti as $chiave => $valore) {
            echo "<tr>";
            echo "<td>" . $chiave . "</td>";
            echo "<td>" . number_format($valore, 2, ",", ".") . " €</td>";
            echo "</tr>";
        }

        echo "</table>";

    
    ?>
</body>
</html>