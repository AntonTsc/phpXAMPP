<?php
    /* Define tres variables y ordenar en orden ascendente. Despúes en orden descendente. Guarde como ejercicio04.php */

    $a = 2;
    $b = 3;
    $c = 1;
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
        echo "Orden Ascendente: ";
        if($a <= $b && $a <= $c){
            if($b <= $c){
                echo "$a $b $c";
            } else {
                echo "$a $c $b";
            }
        } elseif($b <= $a && $b <= $c){
            if($a <= $c){
                echo "$b $a $c";
            } else {
                echo "$b $c $a";
            }
        } elseif($c <= $a && $c <= $b){
            if($a <= $b){
                echo "$c $a $b";
            } else {
                echo "$c $b $a";
            }
        }
        
        echo "<br /> Orden Descendente: ";
        if($a >= $b && $a >= $c){
            if($b >= $c){
                echo "$a $b $c";
            } else {
                echo "$a $c $b";
            }
        } elseif($b >= $a && $b >= $c){
            if($a >= $c){
                echo "$b $a $c";
            } else {
                echo "$b $c $a";
            }
        } elseif($c >= $a && $c >= $b){
            if($a >= $b){
                echo "$c $a $b";
            } else {
                echo "$c $b $a";
            }
        }
    ?>
</body>
</html>
