<?php
class Cliente{
    public $nome;
    public $email;
    public $sexo;
    public $estadoCivil;
    public $observacoes;
    
    public $endereco;

    
    function __construct($nome, $email, $sexo, $estadoCivil, $observacoes, $endereco = null){
        $this->nome = $nome;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->estadoCivil = $estadoCivil;
        $this->observacoes = $observacoes;
        $this->endereco = $endereco; 
    }

    function __destruct(){
        echo "Objeto {$this->nome} foi deletado. <br>\n";
    }

    function imprimir(){
        echo "Nome: {$this->nome} <br>\n";
        echo "Email: {$this->email} <br>\n";
        echo "Sexo: {$this->sexo} <br>\n";
        echo "Estado Civil: {$this->estadoCivil} <br>\n";
        echo "Observacoes: {$this->observacoes} <br>\n";
        
        if($this->endereco !== null){
            echo "Endereço: <br>\n";
            echo "Rua: {$this->endereco->rua} <br>\n";
            echo "Bairro: {$this->endereco->bairro} <br>\n";
            echo "Cidade: {$this->endereco->cidade} <br>\n";
            echo "Estado: {$this->endereco->estado} <br>\n";
            echo "CEP: {$this->endereco->cep} <br>\n";
        } else {
            echo "Endereco não fornecido <br>\n";
        }
    }
}
?>