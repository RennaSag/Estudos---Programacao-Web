<?php
class Endereco{
    public $rua;
    public $cidade;
    public $bairro;
    public $cep;
    public $estado;


    function __construct($rua, $cidade, $bairro, $cep, $estado){
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->estado = $estado;
        
    }

    function __destruct(){
        echo "Objeto de endereco foi deletado. <br>\n";
    }    
}

?>