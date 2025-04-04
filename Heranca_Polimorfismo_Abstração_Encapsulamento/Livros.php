<?php
class Livros extends Item { 
    private string $editora;
    private int $dataPublicacao; 

    public function __construct(int $id, string $nome, string $dataAquisicao, array $autores, string $editora, int $dataPublicacao) {
        parent::__construct($id, $nome, $autores, $dataAquisicao); 
        $this->editora = $editora;
        $this->dataPublicacao = $dataPublicacao; 
    }

    public function imprimirDados(): void {
        echo "Livro: {$this->nome}, editora {$this->editora}, ano: {$this->dataPublicacao}\n"; 
    }

    public function getEditora(): string { 
        return $this->editora; 
    }
    
    public function getDataPublicacao(): int { 
        return $this->dataPublicacao; 
    }
    
    public function setEditora(string $editora): void { 
        $this->editora = $editora; 
    }
    
    public function setDataPublicacao(int $dataPublicacao): void { 
        $this->dataPublicacao = $dataPublicacao; 
    }
}
?>