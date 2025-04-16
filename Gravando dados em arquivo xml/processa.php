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

    //funcao para salvar os dados do cliente
    salvarXML($cliente);


    unset($cliente);
}

function salvarXML($cliente){
    $arquivo = 'clientes.xml';

    //condicao para verificar se o arquivo ja existe
    if(file_exists('clientes.xml')){
        $xml = simplexml_load_file($arquivo);

    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><clientes></clientes>');
    }


    //adiciona o novo cliente ao xml
    $novoCliente = $xml->addChild('cliente');
    $novoCliente->addChild('nome', htmlspecialchars($cliente->nome));
    $novoCliente->addChild('email', htmlspecialchars($cliente->email));
    $novoCliente->addChild('sexo', htmlspecialchars($cliente->sexo));
    $novoCliente->addChild('estadoCivil', htmlspecialchars($cliente->estadoCivil));
    $novoCliente->addChild('observacoes', htmlspecialchars($cliente->observacoes));


    //adiciona dados de endereco se existirem
    if($cliente->endereco !== null){
        $enderecoXml = $novoCliente->addChild('endereco');
        $enderecoXml->addChild('rua', htmlspecialchars($cliente->endereco->rua));
        $enderecoXml->addChild('bairro', htmlspecialchars($cliente->endereco->bairro));
        $enderecoXml->addChild('cidade', htmlspecialchars($cliente->endereco->cidade));
        $enderecoXml->addChild('estado', htmlspecialchars($cliente->endereco->estado));
        $enderecoXml->addChild('cep', htmlspecialchars($cliente->endereco->cep));
    }


    //usa instancia da classe DOMDocument que é mais avançado que SimpleXMLElement
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save($arquivo);
    
    echo "<p>Dados salvos com sucesso no arquivo XML!</p>";

}


?>