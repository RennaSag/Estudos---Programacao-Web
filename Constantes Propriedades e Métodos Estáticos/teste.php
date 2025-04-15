<?php

require_once 'matematica.class.php';


echo "<h2>Testando as Figuras Geométricas</h2>";


$circulo1 = new Circulo("Círculo 1", 5);
$circulo2 = new Circulo("Círculo 2", 7.5);
$circulo3 = new Circulo("Círculo 3", 10);

echo "<h3>Círculos</h3>";
echo "<p>{$circulo1->getNome()}: Área = {$circulo1->calculaArea()}</p>";
echo "<p>{$circulo1->desenhar()}</p>";
echo "<p>{$circulo2->getNome()}: Área = {$circulo2->calculaArea()}</p>";
echo "<p>{$circulo2->desenhar()}</p>";
echo "<p>{$circulo3->getNome()}: Área = {$circulo3->calculaArea()}</p>";
echo "<p>{$circulo3->desenhar()}</p>";


$quadrado1 = new Quadrado("Quadrado 1", 4);
$quadrado2 = new Quadrado("Quadrado 2", 6);
$quadrado3 = new Quadrado("Quadrado 3", 8);

echo "<h3>Quadrados</h3>";
echo "<p>{$quadrado1->getNome()}: Área = {$quadrado1->calculaArea()}</p>";
echo "<p>{$quadrado1->desenhar()}</p>";
echo "<p>{$quadrado2->getNome()}: Área = {$quadrado2->calculaArea()}</p>";
echo "<p>{$quadrado2->desenhar()}</p>";
echo "<p>{$quadrado3->getNome()}: Área = {$quadrado3->calculaArea()}</p>";
echo "<p>{$quadrado3->desenhar()}</p>";


$retangulo1 = new Retangulo("Retângulo 1", 3, 5);
$retangulo2 = new Retangulo("Retângulo 2", 4, 8);
$retangulo3 = new Retangulo("Retângulo 3", 6, 10);

echo "<h3>Retângulos</h3>";
echo "<p>{$retangulo1->getNome()}: Área = {$retangulo1->calculaArea()}</p>";
echo "<p>{$retangulo1->desenhar()}</p>";
echo "<p>{$retangulo2->getNome()}: Área = {$retangulo2->calculaArea()}</p>";
echo "<p>{$retangulo2->desenhar()}</p>";
echo "<p>{$retangulo3->getNome()}: Área = {$retangulo3->calculaArea()}</p>";
echo "<p>{$retangulo3->desenhar()}</p>";


$triangulo1 = new Triangulo("Triângulo 1", 4, 3);
$triangulo2 = new Triangulo("Triângulo 2", 6, 5);
$triangulo3 = new Triangulo("Triângulo 3", 10, 8);

echo "<h3>Triângulos</h3>";
echo "<p>{$triangulo1->getNome()}: Área = {$triangulo1->calculaArea()}</p>";
echo "<p>{$triangulo1->desenhar()}</p>";
echo "<p>{$triangulo2->getNome()}: Área = {$triangulo2->calculaArea()}</p>";
echo "<p>{$triangulo2->desenhar()}</p>";
echo "<p>{$triangulo3->getNome()}: Área = {$triangulo3->calculaArea()}</p>";
echo "<p>{$triangulo3->desenhar()}</p>";
?>