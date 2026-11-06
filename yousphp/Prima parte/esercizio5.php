<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    define("PROFITTO_MINIMO", 30);

    $prezzo_acquisto = 80;
    $costi_spedizione = 12;
    $prezzo_vendita = 135;

    $profitto_netto = $prezzo_vendita - $prezzo_acquisto - $costi_spedizione;

    echo "Profitto netto in euro: " . $profitto_netto . "<br>";

    $percentuale_profitto = ($profitto_netto / $prezzo_vendita) * 100;

    echo "Percentuale profitto: " . number_format($percentuale_profitto,2, ",", ".") . "<br>";

    if($percentuale_profitto >= PROFITTO_MINIMO){

        echo "La vendita rispetta il margine di profitto aziendale";

    }else{

        echo "La vendita non rispetta il margine di profitto aziendale";

    }

    
    ?>
</body>
</html>