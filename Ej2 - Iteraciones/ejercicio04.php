<?php
    /* Realiza la suma desde un número (primerNum) hasta otro (ultimoNum) con While y con For */

    $primerNum = 10;
    $ultimoNum = 20;
    $numTotal = 0;
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
        while($primerNum <= $ultimoNum){
            $numTotal += $primerNum;
            $primerNum++;
        }
        echo $numTotal;

        echo "<br /><br /> <b>For: </b>";
        for($primerNum; $primerNum <= $ultimoNum; $primerNum++){
            $numTotal += $primerNum;
        }
        echo $numTotal;
    ?>
</body>
</html>