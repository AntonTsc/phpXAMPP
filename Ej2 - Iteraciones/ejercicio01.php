<?php
    /*  Mostrar en pantalla números del 1 al 100 con While y con For */

    $num = 0;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<b>While: </b>";
        while($num < 100){
            $num++;
            echo " " . $num;
        }

        echo "<br /><br /> <b>For: </b>";
        for($num=0; $num <= 100; $num++){
            echo " " . $num;
        }
    ?>
</body>
</html>