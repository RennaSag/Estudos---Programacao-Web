<?php
// Exemplo 1: Atribuição simples
$nome = "Felipe";
$idade = 17;
echo "<p>Eu sou $nome e tenho $idade anos</p>";

// Exemplo 2: Operadores de atribuição
$var = 100;
$var += 25; // Soma 25 ao valor atual de $var
echo "Valor após soma: " . $var . "<br>"; 

// Pós-incremento
echo "Pós-incremento: " . $var++ . "<br>"; // Mostra o valor atual e depois incrementa
echo "Valor atualizado: " . $var . "<br>"; // Exibe o valor após incremento

// Pré-incremento
echo "Pré-incremento: " . ++$var . "<br>"; // Incrementa antes de exibir

// Pós-decremento
echo "Pós-decremento: " . $var-- . "<br>"; // Mostra o valor atual e depois decrementa
echo "Valor atualizado: " . $var . "<br>"; // Exibe o valor após decremento

// Pré-decremento
echo "Pré-decremento: " . --$var . "<br>"; // Decrementa antes de exibir

// Operadores de atribuição com diferentes operações
$numero = 50;

$numero -= 10; // Subtrai 10
echo "Após subtração: $numero <br>";

$numero *= 2; // Multiplica por 2
echo "Após multiplicação: $numero <br>";

$numero /= 4; // Divide por 4
echo "Após divisão: $numero <br>";

$numero %= 3; // Resto da divisão por 3
echo "Após módulo: $numero <br>";

$numero **= 3; // Eleva ao cubo
echo "Após exponenciação: $numero <br>";
?>
