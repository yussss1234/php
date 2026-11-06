<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $array = [

        "nome" => "Youssef", 
        "classe" => "AI", 
        "livello" => 2, 
        "punti_vita" => 35, 
        "attacco" => 10,
        
        ];
         
    echo "<table><tr><th>Nome</th><th>Classe</th><th>Livello</th><th>Punti vita</th><th>Attacco</th></tr>";

    foreach ($array as $chiave => $valore)
        echo "<td>" . $array[$chiave] . "</td>";
    
    ?>
</body>
</html>