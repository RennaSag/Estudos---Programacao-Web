<?php
    $n = 12;

    if($n % 10 == 0){
        echo("Valor divisivel por 10");
    }
    elseif($n % 5 == 0){
        echo("Valor divisivel por 5");
    }
    elseif($n % 2 == 0){
        echo("Valor divisivel por 2");
    }
    else{
        echo("Nao eh divisivel por 10, 5 ou 2");
    }
?>