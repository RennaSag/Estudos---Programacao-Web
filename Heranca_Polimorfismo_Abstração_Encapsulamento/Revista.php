<?php
class Revista extends Item { 
    private string $dataPublicacao;
    private int $volume;
    private string $editora;
    private string $assunto; 

    public function __construct(int $id, string $nome, array $autores, string $dataAquisicao, string $dataPublicacao, int $volume, string $editora, string $assunto) { // Corrigido: __construct em vez de __contruct
        parent::__construct($id, $nome, $autores, $dataAquisicao); 
        $this->dataPublicacao = $dataPublicacao;
        $this->volume = $volume;
        $this->editora = $editora;
        $this->assunto = $assunto;
    }

    public function imprimirDados(): void {
        echo "Revista: {$this->nome}, assunto: {$this->assunto}\n";
    }

    public function getDataPublicacao(): string {
        return $this->dataPublicacao;
    }
    
    public function setDataPublicacao(string $dataPublicacao): void {
        $this->dataPublicacao = $dataPublicacao;
    }
    
    
    public function getVolume(): int {
        return $this->volume;
    }
    
    public function setVolume(int $volume): void {
        $this->volume = $volume;
    }
    
    public function getEditora(): string {
        return $this->editora;
    }
    
    public function setEditora(string $editora): void {
        $this->editora = $editora;
    }
    
    public function getAssunto(): string {
        return $this->assunto;
    }
    
    public function setAssunto(string $assunto): void {
        $this->assunto = $assunto;
    }
}
?>