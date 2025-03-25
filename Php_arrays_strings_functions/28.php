<?php
$matriz = array();
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(0, 1000);
    }
}

function maior_valor_matriz($matriz) {
    $maior = $matriz[0][0];
    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
            if ($valor > $maior) {
                $maior = $valor;
            }
        }
    }
    return $maior;
}

echo "Matriz 5x5:<br>";
foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo $valor . "\t";
    }
    echo "<br>";
}

echo "<br>O maior valor na matriz é: " . maior_valor_matriz($matriz);
?>
