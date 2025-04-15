<?php

require_once 'classemat.php';


echo "<h2>Testando a Classe Matematica</h2>";


echo "<h3>Método Soma</h3>";
$resultado1 = Matematica::Soma(10, 5);
echo "Soma 1: 10 + 5 = $resultado1<br>";

$resultado2 = Matematica::Soma(7.5, 2.5);
echo "Soma 2: 7.5 + 2.5 = $resultado2<br>";

$resultado3 = Matematica::Soma(-3, 8);
echo "Soma 3: -3 + 8 = $resultado3<br>";


echo "<h3>Método Subtracao</h3>";
$resultado1 = Matematica::Subtracao(20, 8);
echo "Subtração 1: 20 - 8 = $resultado1<br>";

$resultado2 = Matematica::Subtracao(15.5, 7.2);
echo "Subtração 2: 15.5 - 7.2 = $resultado2<br>";

$resultado3 = Matematica::Subtracao(5, 10);
echo "Subtração 3: 5 - 10 = $resultado3<br>";


echo "<h3>Método Multiplicacao</h3>";
$resultado1 = Matematica::Multiplicacao(6, 4);
echo "Multiplicação 1: 6 * 4 = $resultado1<br>";

$resultado2 = Matematica::Multiplicacao(3.5, 2);
echo "Multiplicação 2: 3.5 * 2 = $resultado2<br>";

$resultado3 = Matematica::Multiplicacao(-5, -3);
echo "Multiplicação 3: -5 * -3 = $resultado3<br>";


echo "<h3>Método Divisao</h3>";
try {
    $resultado1 = Matematica::Divisao(10, 2);
    echo "Divisão 1: 10 / 2 = $resultado1<br>";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "<br>";
}

try {
    $resultado2 = Matematica::Divisao(15, 3);
    echo "Divisão 2: 15 / 3 = $resultado2<br>";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "<br>";
}

try {
    $resultado3 = Matematica::Divisao(7, 0);
    echo "Divisão 3: 7 / 0 = $resultado3<br>";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "<br>";
}


echo "<h3>Valor do atributo utilizacoes</h3>";
echo "Total de utilizações: " . Matematica::$utilizacoes;
?>