<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $anno = 1996;

    if($anno % 4 == 0){

        if($anno % 100 == 0){

            if($anno % 400 == 0){

                echo "E bisestile";

            }else{

                echo "Non e bisestile";

            }

        }else{

            echo "E bisestile";

        }

    }else{

        echo "Non e bisestile";

    }
    
    ?>
</body>
</html>