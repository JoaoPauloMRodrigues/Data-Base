<?php

class Carro {
    public static string $nome;
    public static float $preco;

    public static function setNome(string $nome){
        self::$nome = $nome;
    }

    public static function getNome(){
       return self::$nome;
    }

    public static function setPreco(float $preco){
        self::$preco = $preco;
    }

    public static function getPreco(){
       return self::$preco;
    }
    
}