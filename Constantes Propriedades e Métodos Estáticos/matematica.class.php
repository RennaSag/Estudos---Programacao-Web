<?php

interface AreaCalculavel {
    public function calculaArea(): float;
}


abstract class FiguraGeometrica {
    protected $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    
    abstract public function desenhar();
}


class Circulo extends FiguraGeometrica implements AreaCalculavel {
    private $raio;
    
    public function __construct($nome, $raio) {
        parent::__construct($nome);
        $this->raio = $raio;
    }
    
    public function getRaio() {
        return $this->raio;
    }
    
    public function setRaio($raio) {
        $this->raio = $raio;
    }
    
    public function calculaArea(): float {
        return pi() * pow($this->raio, 2);
    }
    
    public function desenhar() {
        return "Desenhando círculo de raio {$this->raio}";
    }
}


class Quadrado extends FiguraGeometrica implements AreaCalculavel {
    private $lado;
    
    public function __construct($nome, $lado) {
        parent::__construct($nome);
        $this->lado = $lado;
    }
    
    public function getLado() {
        return $this->lado;
    }
    
    public function setLado($lado) {
        $this->lado = $lado;
    }
    
    public function calculaArea(): float {
        return pow($this->lado, 2);
    }
    
    public function desenhar() {
        return "Desenhando quadrado de lado {$this->lado}";
    }
}


class Retangulo extends FiguraGeometrica implements AreaCalculavel {
    private $largura;
    private $altura;
    
    public function __construct($nome, $largura, $altura) {
        parent::__construct($nome);
        $this->largura = $largura;
        $this->altura = $altura;
    }
    
    public function getLargura() {
        return $this->largura;
    }
    
    public function setLargura($largura) {
        $this->largura = $largura;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function calculaArea(): float {
        return $this->largura * $this->altura;
    }
    
    public function desenhar() {
        return "Desenhando retangulo de largura {$this->largura} e altura {$this->altura}";
    }
}


class Triangulo extends FiguraGeometrica implements AreaCalculavel {
    private $base;
    private $altura;
    
    public function __construct($nome, $base, $altura) {
        parent::__construct($nome);
        $this->base = $base;
        $this->altura = $altura;
    }
    
    public function getBase() {
        return $this->base;
    }
    
    public function setBase($base) {
        $this->base = $base;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function calculaArea(): float {
        return ($this->base * $this->altura) / 2;
    }
    
    public function desenhar() {
        return "Desenhando triangulo de base {$this->base} e altura {$this->altura}";
    }
}
?>