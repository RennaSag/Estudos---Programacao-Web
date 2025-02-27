<?php
    $ar1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $ar2 = array(9, 2, 7, 4, 12, 15, 8, 10, 6, 3);

    foreach($ar1 as $valor1){
        if(in_array($valor1, $ar2)){
            echo $valor1 . " ";
        }
    }
?>