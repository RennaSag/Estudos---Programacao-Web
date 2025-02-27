<?php
    function maiorMenor($n1, $n2) {
        if($n1 > $n2){
            echo "Primeiro eh maior";
            return;
        }
        echo("O segundo eh maior");
    }

        $n1 = 10;
        $n2 = 9;
        maiorMenor($n1, $n2);

?>