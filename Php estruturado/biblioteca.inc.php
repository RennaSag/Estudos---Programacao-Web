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

    function parImpar($n1) {
        if($n1 % 2 == 0){
            echo "Par";
            return;
        }
        echo("Impar");
    }

    function maiorMenor($n1, $n2) {
        if($n1 > $n2){
            echo "Primeiro eh maior";
            return;
        }
        echo("O segundo eh maior");
    }


    function verifica_data($dia, $mes, $ano) {
        return checkdate($mes, $dia, $ano);
    }
    $dia = 21;
    $mes = 4;
    $ano = 2003;
    
    if (verifica_data($dia, $mes, $ano)) {
        echo "Data valida";
    } else {
        echo "Data invalida";
    }



    function data_extenso_timestap($timestamp){
        return date("d \d\e F \d\e Y", $timestamp);
    }

    $timestamp = time();
    echo data_extenso_timestamp($timestamp);


    function data_extenso($dia, $mes, $ano){
        $timestamp = mktime(0, 0, 0, $mes, $dia, $ano);

        return date("d \d\e F \d\e Y", $timestamp);
    }


    function gera_decimal_aleatorio($min, $max, $qtD){
        $fator = pow(10, $qtD);

        return number_format(mt_rand($min * $fator, $max * $fator)) / $fator,$qtD, '.', '');    
    }
    echo gera_decimal_aleatorio(0, 1000, 2);



    function formata_reais($num){
        echo 'R$ ' . number_format($num, 2, ',', '.');
    }


    function oculta_vogais($string){
        echo str_replace(array('a','e','i','o','u'), '?', $string);
    }


    function inverte($string){
        strrev($string);
    }
?>