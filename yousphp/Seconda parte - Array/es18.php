<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function validaMailingList($listaEmail) {

            $valide = [];
            $nonValide = [];

            foreach ($listaEmail as $email) {

                $email = trim($email);
                $email = strtolower($email);

                if (str_contains($email, "@") && str_contains($email, ".")) {

                    $valide[] = $email;

                } else {

                    $nonValide[] = $email;

                }

            }

            return [
                "valide" => $valide,
                "non_valide" => $nonValide
            ];

        }

        $email = [
            " Mario@Gmail.com ",
            "luca@gmail.com",
            "anna.gmail.com",
            "  YOUSSEF@SCUOLA.IT ",
            "marco@scuola"
        ];

        $risultato = validaMailingList($email);

        echo "<h3>Email valide</h3>";

        foreach ($risultato["valide"] as $indirizzo) {
            echo $indirizzo . "<br>";
        }

        echo "<h3>Email non valide</h3>";

        foreach ($risultato["non_valide"] as $indirizzo) {
            echo $indirizzo . "<br>";
        }

    ?>
</body>
</html>