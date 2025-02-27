<?php
    function imposto($salario) {
        $resultado;
        
        if($salario <= 1787.77){
            $resultado = 0;
            return 0;
        }

        elseif($salario > 1787.78 and $salario <= 2679.29){
            $resultado = ($salario * 0.075)-134.08;
            return $resultado;
        }

        elseif($salario > 2679.29 and $salario <= 3572.43){
            $resultado = ($salario * 0.15)-335.03;
            return $resultado;
        }

        elseif($salario > 3572.44 and $salario <= 4463.81){
            $resultado = ($salario * 0.225)-602.96;
            return $resultado;
        }

        elseif($salario > 4463.81){
            $resultado = ($salario * 0.275)-826.15;
            return $resultado;
        }
    }


    $salario = 5000;
    imposto($salario);
       

?>