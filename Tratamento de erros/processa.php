<?php
require_once "Classes/Cliente.class.php";
require_once "Classes/Endereco.class.php";

// exceção personalizada que estende a classe Exception
class SaveXMLException extends Exception {
    private $xmlContent;
    
    public function __construct($message, $xmlContent = null, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->xmlContent = $xmlContent;
    }
    
    public function getXMLContent() {
        return $this->xmlContent;
    }
}

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

    // fun para salvar os dados do cliente
    try {
        salvarXML($cliente);
        echo "<p>Dados salvos com sucesso no arquivo XML!</p>";
    } catch (SaveXMLException $e) {
        echo "<p>Erro ao salvar dados: " . $e->getMessage() . "</p>";
        
        // desafio 1: Gravar a mensagem de erro em um arquivo de texto
        $logFile = 'error_log.txt';
        $errorMessage = date('[Y-m-d H:i:s]') . ' - ' . $e->getMessage() . "\n";
        file_put_contents($logFile, $errorMessage, FILE_APPEND);
        
        // desafio 3: Gravar as mensagens de exceções em formato XML
        gravarErroXML($e->getMessage(), $e->getXMLContent());
    }

    unset($cliente);
}

function gravarErroXML($mensagem, $xmlContent) {
    $arquivo = 'erros.xml';
    
    if(file_exists($arquivo)) {
        $xml = simplexml_load_file($arquivo);
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><erros></erros>');
    }
    
    $erro = $xml->addChild('erro');
    $erro->addChild('data', date('Y-m-d H:i:s'));
    $erro->addChild('mensagem', htmlspecialchars($mensagem));
    
    if ($xmlContent !== null) {
        $erro->addChild('conteudo', htmlspecialchars($xmlContent));
    }
    
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save($arquivo);
}

function salvarXML($cliente){
    $arquivo = 'clientes.xml';
    $xmlContent = null;
    
    try {
        // condicional que verifica se o arquivo ja existe
        if(file_exists($arquivo)){
            $xml = simplexml_load_file($arquivo);
            if ($xml === false) {
                throw new SaveXMLException("Erro ao carregar o arquivo XML existente", null);
            }
        } else {
            $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><clientes></clientes>');
        }

        // adicionar o novo cliente ao xml
        $novoCliente = $xml->addChild('cliente');
        $novoCliente->addChild('nome', htmlspecialchars($cliente->nome));
        $novoCliente->addChild('email', htmlspecialchars($cliente->email));
        $novoCliente->addChild('sexo', htmlspecialchars($cliente->sexo));
        $novoCliente->addChild('estadoCivil', htmlspecialchars($cliente->estadoCivil));
        $novoCliente->addChild('observacoes', htmlspecialchars($cliente->observacoes));

        // adicionar dados de endereço se existirem
        if($cliente->endereco !== null){
            $enderecoXml = $novoCliente->addChild('endereco');
            $enderecoXml->addChild('rua', htmlspecialchars($cliente->endereco->rua));
            $enderecoXml->addChild('bairro', htmlspecialchars($cliente->endereco->bairro));
            $enderecoXml->addChild('cidade', htmlspecialchars($cliente->endereco->cidade));
            $enderecoXml->addChild('estado', htmlspecialchars($cliente->endereco->estado));
            $enderecoXml->addChild('cep', htmlspecialchars($cliente->endereco->cep));
        }

        // pega o conteúdo XML antes de tentar salvar (para desafio 2)
        $xmlContent = $xml->asXML();

        // usa DOMDocument
        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        
        if (!$dom->loadXML($xmlContent)) {
            throw new SaveXMLException("Erro ao processar o XML", $xmlContent);
        }
        
        // verifica se pode gravar no diretorio, antes de gravar de fato
        if (!is_writable(dirname($arquivo)) && !file_exists($arquivo)) {
            throw new SaveXMLException("Diretório não tem permissão de escrita", $xmlContent);
        }
        
        // verifica se o arquivo existe e se eh gravavel
        if (file_exists($arquivo) && !is_writable($arquivo)) {
            throw new SaveXMLException("Arquivo XML não tem permissão de escrita", $xmlContent);
        }
        
        if (!$dom->save($arquivo)) {
            throw new SaveXMLException("Falha ao salvar o arquivo XML", $xmlContent);
        }
        
    } catch (Exception $e) {
        // excessão personalizada
        throw new SaveXMLException("Erro ao salvar XML: " . $e->getMessage(), $xmlContent);
    }
}
?>