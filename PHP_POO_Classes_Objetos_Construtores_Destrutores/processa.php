<?php
require_once "Classes/Cliente.class.php";
require_once "Classes/Endereco.class.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 'naoinfo';
    
    $estadoCivil = $_POST['estado_civil'];
    $observacoes = $_POST['obs'];

    
    $endereco = null;
    if (!empty($_POST['rua']) && !empty($_POST['cidade']) && 
        !empty($_POST['bairro']) && !empty($_POST['cep']) && 
        !empty($_POST['estado'])) {
        $endereco = new Endereco(
            $_POST['rua'],
            $_POST['cidade'], 
            $_POST['bairro'], 
            $_POST['cep'], 
            $_POST['estado']
        );
    }

    $cliente = new Cliente(
        $nome, 
        $email, 
        $sexo, 
        $estadoCivil, 
        $observacoes, 
        $endereco
    );

    $cliente->imprimir();

    unset($cliente);
}
?>