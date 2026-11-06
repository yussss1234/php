<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function generaSlugPagine(&$pagineWeb) {

            foreach ($pagineWeb as &$pagina) {

                $pagina["titolo"] = trim($pagina["titolo"]);

                $pagina["slug"] = strtolower($pagina["titolo"]);

                $pagina["slug"] = str_replace(" ", "-", $pagina["slug"]);

            }

            unset($pagina);

            sort($pagineWeb);

        }

        $pagineWeb = [
            [
                "titolo" => " Chi Siamo ",
                "stato" => "pubblicata"
            ],
            [
                "titolo" => "Contatti",
                "stato" => "bozza"
            ],
            [
                "titolo" => "I Nostri Servizi",
                "stato" => "pubblicata"
            ]
        ];

        generaSlugPagine($pagineWeb);

        foreach ($pagineWeb as $pagina) {

            echo "Titolo: " . $pagina["titolo"] . "<br>";
            echo "Stato: " . $pagina["stato"] . "<br>";
            echo "Slug: " . $pagina["slug"] . "<br><br>";

        }

    ?>
</body>
</html>