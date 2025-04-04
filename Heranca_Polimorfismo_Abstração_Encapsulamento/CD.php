<?php
class CD extends Item { 
    private string $generoMusical;
    private string $faixas;

    public function __construct(int $id, string $nome, string $dataAquisicao, array $autores, string $generoMusical, string $faixas) {
        parent::__construct($id, $nome, $autores, $dataAquisicao);
        $this->generoMusical = $generoMusical;
        $this->faixas = $faixas;
    }

    public function imprimirDados(): void {
        echo "CD: {$this->nome}, genero: {$this->generoMusical}\n"; 
    }

    public function getGeneroMusical(): string {
        return $this->generoMusical;
    }
    
    public function setGeneroMusical(string $generoMusical): void {
        $this->generoMusical = $generoMusical;
    }
    
    public function getFaixas(): string {
        return $this->faixas;
    }
    
    public function setFaixas(string $faixas): void {
        $this->faixas = $faixas;
    }
}
?>