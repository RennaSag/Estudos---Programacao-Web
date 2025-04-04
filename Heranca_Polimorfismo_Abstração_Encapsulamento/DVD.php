<?php
class DVD extends Item { 
    private string $tipo;
    private string $descricao;

    public function __construct(int $id, string $nome, array $autores, string $dataAquisicao, string $tipo, string $descricao) {
        parent::__construct($id, $nome, $autores, $dataAquisicao);
        $this->tipo = $tipo;
        $this->descricao = $descricao;
    }

    public function imprimirDados(): void {
        echo "DVD: {$this->nome}, tipo: {$this->tipo}\n";
    }

    public function getTipo(): string {
        return $this->tipo;
    }
    
    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }
    
    public function getDescricao(): string {
        return $this->descricao;
    }
    
    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }
}
?>