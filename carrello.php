<?php

//simulare un carrello di un ecommerce

class Carrello{
    public $prodotti;
    public $importoTot;

    public function __construct(Prodotto ...$prodotti){
        $this->prodotti = $prodotti;

        $this->importoTot = $this->calcolaImporto();
    }

    public function calcolaImporto(){
        $sum = 0;
        foreach ($this->prodotti as $prodotto) {
            $sum += $prodotto->importo;
        }
        return $sum;
    }
}

class Prodotto{
    public $nome;
    public $prezzo;
    public $quantità;
    public $importo;

    public function __construct($nome,$prezzo,$quantità){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;

        $this->importo = $this->calcolaImporto();
    }

    public function calcolaImporto(){
        return $this->quantità * $this->prezzo;
    }
}

$prodotto1 = new Prodotto("Galaxy A52",400,2);
$prodotto2 = new Prodotto("Cuffie",50,1);
$prodotto3 = new Prodotto("Custodia",10,3);
$prodotto4 = new Prodotto("Ciao",10,3);

$carrello = new Carrello($prodotto1,$prodotto3);//object composition

print_r($carrello);