<?php
    $n = 11;

    switch(true) {
        case ($valor > 0):
            echo "positivo.";
            break;
        
        case ($valor < 0):
            echo "negativo.";
            break;
        
        case ($valor == 0):
            echo "zero.";
            break;

        default:
            echo "valor errado";
    }


?>