<?php
// Exemplo 1: Diferença entre aspas simples e aspas duplas
$nome = "Marcos";
echo "Olá, $nome! <br>"; // Aspas duplas interpretam variáveis
echo 'Olá, $nome! <br>'; // Aspas simples não interpretam variáveis, exibem o texto literal

// Exemplo 2: Uso de caracteres especiais
echo "Quebra de linha \n não funciona diretamente no navegador, mas funciona no console.<br>";
echo 'Quebra de linha \n com aspas simples será exibida literalmente.<br>';

// Exemplo 3: Concatenando strings
echo 'Meu nome é ' . $nome . '<br>'; // Necessário concatenar com . quando usa aspas simples

// Exemplo 4: Escapando aspas dentro da string
echo "Ele disse: \"Olá, tudo bem?\" <br>"; // Aspas duplas precisam de barra invertida para escapar
echo 'Ele disse: \'Olá, tudo bem?\' <br>'; // Aspas simples também precisam da barra invertida

// Exemplo 5: Uso de variáveis dentro de aspas duplas
$idade = 25;
echo "Meu nome é $nome e tenho $idade anos.<br>"; // Aspas duplas interpretam as variáveis

// Exemplo 6: Utilizando chaves para evitar ambiguidades
$cor = "azul";
echo "Minha cor favorita é {$cor}.<br>"; // Uso de chaves para evitar conflitos de interpretação
?>

