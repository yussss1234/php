<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $messaggio = "Hai visto il finale di stagione? Il protagonista muore nell'ultimo episodio!";

    $messaggio = str_replace("muore", "[SPOILER]", $messaggio);
    
    echo $messaggio . "<br>";

    echo "Lunghezza stringa: " . strlen($messaggio);

    ?>
</body>
</html>