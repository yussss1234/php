<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $password = "MioGatto2024!";
    $lunghezza = strlen($password);
    echo "Lunghezza della password: " . $lunghezza . "<br>";

    $sottostringa = substr($password, 1, $lunghezza - 2);
    $sottostringa = str_repeat("*", strlen($sottostringa));

    $password = substr($password, 0, 1) . $sottostringa . substr($password, $lunghezza - 1, $lunghezza);
    
    echo $password;

    ?>
</body>
</html>