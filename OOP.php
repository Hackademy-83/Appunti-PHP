<?php

// l'OOP è un paradigma che ci permette di strutturare il codice in blocchi, detti classi, che ci consentono di istanziare oggetti 


//insieme di utenti che avranno delle caratteristiche in comune
//nome, email, password


$user = [
    "nome" => "Nicola",
    "email" => "nicola@gmail.com",
    "password" => "12345678"
];


// le classi hanno bisogno prima di una dichiarazione
class User{//La prima lettera deve essere maiuscola, il nome deve essere sempre al singola e dobbiamo usare l'inglese
    //attributi
    public $nome;
    public $email;
    private $password;

    static public $counter = 0;//attributo statico è indipendente dall'oggetto istanziato ma opera direttamente sulla classe

    //costruttore: serve per inizializzare gli attributi e non è altro che una funzione normale ma con un nome fisso (__construct)
    public function __construct($pippo,$_email,$_password){
        $this->nome = $pippo;//il this indica il futuro oggetto che istanzieremo
        $this->email = $_email;
        $this->password = $_password;

        self::$counter++;
    }

    //metodi
    public function saluta(){
        echo "Ciao, sono $this->nome \n";
    }

    static public function ciao(){
        echo "Ciao";
    }
}

//istanziamento di un oggetto
$user = new User("Nicola","nicola@gmail.com","12345678");//abbiamo implicitamente richimato il costruttore
$user1 = new User("Antonello","antonello@gmail.com","12345678");
$user2 = new User("Ilaria","ilaria@gmail.com","12345678");
/* $user2 = new User;
$user3 = new User;
$user4 = new User;
$user5 = new User; */


$user->saluta();
$user1->saluta();
/* 
echo User::saluta(); */


 

/* 
var_dump($user1); */
/* var_dump($user2);
var_dump($user3);
 */



class Studente extends User{
    public $media;
    public function __construct($nome, $email, $password, $media){
        parent::__construct($nome, $email, $password);//richiamare il costruttore del genitore

        $this->media = $media;
    }
}


$studente = new Studente("Pasqua","pasqua@gmail.com","12345678",9);

var_dump($studente);

class Docente extends User {
    public $stipendio;

    public function __construct($nome, $email, $password, $stipendio){
        parent::__construct($nome, $email, $password);

        $this->stipendio = $stipendio;
    }

    public function saluta(){
        echo "Ciao, sono $this->nome e sono un docente con la password: $this->password \n";
    }

    
}


$docente = new Docente("Donato", "doanto.bitetto@aulba.it","12345678", 100000);

$docente->saluta();

//access modifier: indica la visibilità di un attributo o metodo
//public: attributo o il metodo è vibile in qualsiasi parte del codice
//protected: un attributo o metodo è visibile solo all'interno della classe o delle classi figlie
//private: un attributo o metodo è visibile solo all'interno della classe
