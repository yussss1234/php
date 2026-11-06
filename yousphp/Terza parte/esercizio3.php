<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $download = 45.5;

    echo "Mbps in download: " . $download . "<br>";

    if($download >= 25){

        echo "Qualita streaming: 4K Ultra HD"; 

    }elseif($download >= 10 && $download < 25){

        echo "Qualita streaming: 1080p Full HD";

    }elseif($download >= 5 && $download < 10){

        echo "Qualita streaming: 720p HD";

    }else{

        echo "Connessione insufficente";

    }

    ?>
</body>
</html>