<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $indirizzi = [

        "indirizzo1@gmail.com",
        "indirizzo2gmail.com",
        "indirizzo3@gmailcom",
        "indirizzo4gmailcom",
        "indirizzo5@gmail.com",
        "indirizzo6@gmail.com",
    ];


    foreach($indirizzi as $indirizzo){

        if(str_contains($indirizzo, "@") && str_contains($indirizzo, ".")){

            echo $indirizzo . "<br>";

        }

    }

    ?>
</body>
</html>