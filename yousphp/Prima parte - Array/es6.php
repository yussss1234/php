<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $partecipanti = ["Setti", "Youssef", "Gabriel", "Saman", "Anmol", "Marco", "Christian", "Leonardo"];

    $chiaveCasuale = array_rand($partecipanti);
    echo $partecipanti[$chiaveCasuale];

    $SecondaChiaveCasuale = array_rand($partecipanti);
    echo "<br>" . $partecipanti[$SecondaChiaveCasuale];

    while($chiaveCasuale == $SecondaChiaveCasuale){

        $SecondaChiaveCasuale = array_rand($partecipanti);
        echo "<br>" . $partecipanti[$SecondaChiaveCasuale];

    }
    
    ?>
</body>
</html>