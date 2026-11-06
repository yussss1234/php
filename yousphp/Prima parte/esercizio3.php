<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    define("MIN_TENTATIVI", 5);

    $tentativi_falliti = 7;
    $amministratore = false;
    $ip_whitelist = false;

    if($tentativi_falliti >= 5 & $amministratore = false & $ip_whitelist = false){

        echo "Stato IP: bloccato";

    }else{

        echo "Stato IP: bloccato";
        
    }

    ?>
</body>
</html>