<?php

abstract class Item{
    protected int $id;
    protected string $nome;
    protected array $autores;
    protected string $dataAquisicao;
    

    public function __construct(int $id, string $nome, array $autores, string $dataAquisicao){
        $this->id = $id;
        $this->nome = $nome;
        $this->autores = $autores;
        $this->dataAquisicao = $dataAquisicao;
    }

    abstract public function imprimirDados(): void;

    public function getId(): int{
        return $this->id;
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function getAutores(): array {
        return $this->autores;
    }
    public function setAutores(array $autores): void{
        $this->autores = $autores;
    }

    public function getDataAquisicao(): string {
        return $this->dataAquisicao;
    }
    public function setDataAquisicao(string $dataAquisicao): void{
        $this->dataAquisicao = $dataAquisicao;
    }

}
?>