<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario magazzino</title>
</head>
<body>

<?php

$prodotti = [
    [
        "nome" => " monitor ",
        "qta" => 3,
        "codice" => 42
    ],
    [
        "nome" => " tastiera ",
        "qta" => 10,
        "codice" => 15
    ],
    [
        "nome" => " mouse ",
        "qta" => 4,
        "codice" => 87
    ],
    [
        "nome" => " cuffie ",
        "qta" => 8,
        "codice" => 23
    ]
];

// Modifico i prodotti
foreach ($prodotti as &$prodotto) {

    // Pulisco e converto il nome in maiuscolo
    $prodotto["nome"] = strtoupper(trim($prodotto["nome"]));

    // Creo il codice SKU
    $prodotto["sku"] = "PRD-" . str_pad($prodotto["codice"], 5, "0", STR_PAD_LEFT);

    // Controllo la quantità
    if ($prodotto["qta"] < 5) {
        $prodotto["stato"] = "SCORTA IN ESAURIMENTO";
    } else {
        $prodotto["stato"] = "DISPONIBILE";
    }

}

unset($prodotto);

// Stampo la tabella
echo "<table border='1'>";

echo "<tr>
        <th>Nome</th>
        <th>Quantità</th>
        <th>Codice</th>
        <th>SKU</th>
        <th>Stato</th>
      </tr>";

foreach ($prodotti as $prodotto) {

    echo "<tr>";

    echo "<td>" . $prodotto["nome"] . "</td>";
    echo "<td>" . $prodotto["qta"] . "</td>";
    echo "<td>" . $prodotto["codice"] . "</td>";
    echo "<td>" . $prodotto["sku"] . "</td>";
    echo "<td>" . $prodotto["stato"] . "</td>";

    echo "</tr>";

}

echo "</table>";

?>

</body>
</html>