<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $stato = "in_consegna";

    switch($stato){

        case "ordine_ricevuto":
            echo "Stato ordine: Ordine ricevuto";

            break;

        case "in_preparazione":
            echo "Stato ordine: In preparazione";

            break;

        case "in_consegna":
            echo "Stato ordine: In consegna";

            break;

        case "consegnato":
            echo "Stato ordine: Consegnato";

            break;

        case "annullato":
            echo "Stato ordine: Annullato";

            break;

    }

    ?>
</body>
</html>