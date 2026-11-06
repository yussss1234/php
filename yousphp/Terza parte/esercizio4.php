<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $eta = 15;
    $pegi = 18;

    if($eta >= $pegi){

        echo "Aquisto consentito";

    }else{

        $anni_mancanti = $pegi - $eta;
        echo "Aquisto non consentito, anni mancanti: " . $anni_mancanti;

    }

    ?>
</body>
</html>