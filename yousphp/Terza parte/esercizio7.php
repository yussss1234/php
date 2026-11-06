<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    $passwordCorretta = true;
    $codiceOTP = "123456";

    if(is_numeric($codiceOTP) && strlen(settype($codiceOTP, "string"))){

        echo "Accesso autorizzato";

    }else{

        echo "Accesso non autorizzato";

    }
    
    ?>
</body>
</html>