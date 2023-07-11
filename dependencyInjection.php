<?php

//! dependency injection: con essa facciamo dipendere il funzionamento di una classe da una altra


//? manichino: delle braccia e delle gambe

class Manichino{
    public $braccia;
    public $gambe;

    public function __construct(Braccia $braccia, Gamba $gambe){//dependency injection: il manichino dipende dalla classe Braccia e dalla classe Gamba
        $this->braccia = $braccia;
        $this->gambe = $gambe;
    }
    
}


abstract class Braccia{
    abstract public function attacca();
}

class Ceffone extends Braccia{
    public function attacca(){
        echo "Ti tiro un ceffone \n";
    }
}

class Pugno extends Braccia{
    public function attacca(){
        echo "Ti tiro un pugno \n";
    }
}

class Gamba {
    public function muoviti(){
        echo "Mi sto muovendo \n";
    }
}


$ceffone = new Ceffone();
$pugno = new Pugno();
$gambe = new Gamba();
$manichino = new Manichino($pugno,$gambe);// object composition

$manichino->braccia->attacca();

$manichino->braccia = $ceffone;

$manichino->braccia->attacca();
