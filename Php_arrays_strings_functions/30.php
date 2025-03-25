<?php
function verificar_valor($array, $valor) {
    $chave = array_search($valor, $array);
    if ($chave !== false) {
        return $chave;
    } else {
        return "Valor não encontrado no array.";
    }
}

$array = array(10, 20, 30, 40, 50);
echo verificar_valor($array, 30); 
echo "<br>";
echo verificar_valor($array, 100);
?>
