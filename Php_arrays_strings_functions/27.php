<?php
$clientes = array(
    array("nome" => "João", "cpf" => "123.456.789-00", "rg" => "12.345.678-9", "telefone" => "(11) 98765-4321"),
    array("nome" => "Maria", "cpf" => "987.654.321-00", "rg" => "98.765.432-1", "telefone" => "(21) 98765-4321"),
    array("nome" => "Pedro", "cpf" => "111.222.333-44", "rg" => "11.223.344-5", "telefone" => "(31) 98765-4321"),
    array("nome" => "Ana", "cpf" => "444.555.666-77", "rg" => "44.556.667-8", "telefone" => "(41) 98765-4321"),
    array("nome" => "Lucas", "cpf" => "555.666.777-88", "rg" => "55.667.788-9", "telefone" => "(51) 98765-4321")
);

foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente["nome"] . "<br>";
    echo "CPF: " . $cliente["cpf"] . "<br>";
    echo "RG: " . $cliente["rg"] . "<br>";
    echo "Telefone: " . $cliente["telefone"] . "<br><br>";
}
?>
