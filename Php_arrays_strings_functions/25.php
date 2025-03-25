<?php

    $array = array();

    for($i = 0; $i<100; $i++){
        $array[$i] = rand(0, 1000);
    }

    foreach ($array as $valor){
        echo $valor . "<br>";
    }
?>