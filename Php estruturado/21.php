<?php
    include_once 'biblioteca.inc.php';

    $salario = 5000;
    $impostoCalculado = imposto($salario);
    echo "Imposto: " . number_format($salario, 2, ',', '.') . ": R$ " . number_format($impostoCalculado, 2, ',', '.') . "<br>";

    $numero = 7;
    echo "O número " . $numero . " eh: ";
    parImpar($numero);
    echo "<br>";

    $n1 = 10;
    $n2 = 20;
    echo "Comparando os números " . $n1 . " e " . $n2 . ": ";
    maiorMenor($n1, $n2);
?>
