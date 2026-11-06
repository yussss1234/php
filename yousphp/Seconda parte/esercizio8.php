<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $data = date("Y-m-d H:i:s");
    echo "Data e ora: " . $data . "<br>";

    $anno = substr($data, 0, 4);
    echo "Anno: " . $anno . "<br>";

    $giorno = substr($data, 8, 2);
    echo "Giorno: " . $giorno . "<br>";

    $timestamp = time();
    echo "Timestamp Unix: " . $timestamp . "<br>";

    $domani = date("d/m/Y", strtotime("+1 day"));
    echo "Domani: " . $domani;

    ?>
</body>
</html>