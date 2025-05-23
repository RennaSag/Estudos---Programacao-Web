<?php
class Cliente{
    public $nome;
    public $email;
    public $sexo;
    public $estadoCivil;
    public $observacoes;


    function __construct($nome, $email, $sexo, $estadoCivil, $observacoes){
        $this->nome = $nome;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->estadoCivil = $estadoCivil;
        $this->observacoes = $observacoes;
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
    }


}



?>