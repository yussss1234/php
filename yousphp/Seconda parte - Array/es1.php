<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $studenti = [
            " mario rossi ",
            "LUCA BIANCHI ",
            " giulia verdi",
            "anna NERI "
        ];

        // Pulizia dei nomi
        foreach ($studenti as &$nome) {
            $nome = trim($nome);
            $nome = strtolower($nome);
            $nome = ucwords($nome);
        }

        unset($nome);

        sort($studenti);

        echo "<ol>";

        foreach ($studenti as $nome) {
            echo "<li>" . $nome . "</li>";
        }

        echo "</ol>";
    
    ?>
</body>
</html>