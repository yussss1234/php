<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderazione chat</title>
</head>
<body>

    <?php

        $messaggi = [
            "Sei un noob, smetti di usare cheat!",
            "Quel player sembra un bot.",
            "Bella partita, complimenti!",
            "Non fare il noob e gioca seriamente."
        ];

        $badwords = ["noob", "bot", "cheat"];

        foreach ($messaggi as &$messaggio) {

            $messaggio = str_ireplace($badwords, "[CENSURATO]", $messaggio);

        }

        unset($messaggio);

        foreach ($messaggi as $messaggio) {

            echo $messaggio . " - Lunghezza: " . strlen($messaggio) . "<br>";

        }

    ?>

</body>
</html>