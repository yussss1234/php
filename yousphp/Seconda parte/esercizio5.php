<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $categoria = "Videogiochi";
    $brand = "Nintendo";
    $id_progressivo = "42";

    $categoria = substr($categoria, 0, 3);
    $categoria = strtoupper($categoria);
    $brand = substr($brand, 0, 3);
    $brand = strtoupper($brand);

    $lunghezza_id = strlen($id_progressivo);
    $id_progressivo = $id_progressivo . str_repeat("0", 5 - $lunghezza_id);

    $codice_articolo = $categoria . "-" . $brand . "-" . $id_progressivo;
    echo "Codice articolo: " . $codice_articolo;

    ?>
</body>
</html>