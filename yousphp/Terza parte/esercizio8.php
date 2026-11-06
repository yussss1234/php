<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $prezzo = 450;

    if($prezzo < 200){

        echo "Economico";

    }else if($prezzo >= 200 && $prezzo <= 600){

        echo "Medio gamma";

    }else if($prezzo > 600){

        echo "Top di gamma";

    }

    ?>
</body>
</html>