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
        [
            "nome" => "Nintendo",
            "prezzo" => "100.00",
            "disponibilita" => true,
        ],
        [
            "nome" => "Ciao",
            "prezzo" => "1030.00",
            "disponibilita" => false,
        ],
        [
            "nome" => "biglietto per casalekkkio",
            "prezzo" => "2.90",
            "disponibilita" => true,
        ],
    ];

    echo "<table><tr><th>Nome</th><th>Prezzo</th></tr>";

    foreach ($prodotti as $prodotto) {
        // Stampa la riga solo se "disponibilita" è true
        if ($prodotto["disponibilita"] === true) {
            echo "<tr>";
            echo "<td>" . $prodotto["nome"] . "</td>";
            echo "<td>" . $prodotto["prezzo"] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>
</body>
</html>