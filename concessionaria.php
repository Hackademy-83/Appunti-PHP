<?php

/* Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta 
(Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
Automobile
SUV
Utilitaria
Sportiva */

/* class Car{
    //attributi
    public $marchio;
    public $modello;
    public $prezzo;

    //construttore
    public function __construct($marchio, $modello, $prezzo){
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->prezzo = $prezzo;
    }

    //metodo
    public function muoviti(){
        echo "Ti porto a destinazione \n";
    }
} */



/* class Utilitaria extends Car{
    //construttore
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);
    }

    //metodo
    public function muoviti(){//override
        echo "Ti porto a lavoro o a fare la spesa \n";
    }
} */

class Sportiva extends Car{
    //construttore
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);
    }

    //metodo
    public function muoviti(){//override
        echo "Ti porto a gareggiare e a morire \n";
    }
}

/* $macchina = new Car("Fiat","Punto",4500); */
/* $panda = new Utilitaria("Fiat","Panda",15000); */
/* $lamborghini = new Sportiva("Lamborghini","Aventador", 10000000000);

$panda->muoviti();
$macchina->muoviti();
$lamborghini->muoviti(); */


//! classi astratte: esse rappresentano il concetto più astratto e servono per dettare regole alle classi figlie
//? una classe astratta non può più essere usata per istaziare degli oggetti
//? una classe astratta può contenere anche metodi astratti: sono metodi che non dobbiamo implementare obbligatoriamente nella classe astratta
//? ma devono essere obbligatoriamente implementati dalle classi figlie

abstract class Car{
    //attributi
    public $marchio;
    public $modello;
    public $prezzo;

    //construttore
    public function __construct($marchio, $modello, $prezzo){
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->prezzo = $prezzo;
    }

    //metodo
    abstract public function muoviti();  
    //perche noi non istanziere oggetti di tipo car quindi noi questo metodo non lo useremo mai. Ma vogliamo
    //che tutte le classi figlie di Car devono implemetare muoviti
}



class Utilitaria extends Car{
    public $velocitaMassima;

    //construttore
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);
    }


    public function muoviti(){
        echo "Ti porto a fare la spesa";
    }
}

$utilitaria = new  Utilitaria("Fiat","Punto",4500);
$utilitaria->muoviti();