<?php

class Matematica {

    public const PI = 3.14;
    
   
    public static $utilizacoes = 0;
    
    
    public static function Soma($a, $b) {
        self::$utilizacoes++; 
        return $a + $b;
    }
    
    
    public static function Subtracao($a, $b) {
        self::$utilizacoes++; 
        return $a - $b;
    }
    
    
    public static function Multiplicacao($a, $b) {
        self::$utilizacoes++; 
        return $a * $b;
    }
    
   
    public static function Divisao($a, $b) {
        self::$utilizacoes++;
        
        
        if ($b == 0) {
            throw new Exception("Não é permitido divisão por zero");
        }
        
        return $a / $b;
    }
}
?>