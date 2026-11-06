<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $livello = "VIP";

    switch ($livello){

        case "Base":
            echo "Livello: base";

            break;
        
        case "VIP":
            echo "Livello: VIP";

            break;

        case "Moderatore":
            echo "Livello: moderatore";

            break;

        case "Admin":
            echo "Livello: admin";

            break;


    }


    ?>
</body>
</html>