<?php

//gestionale scolastico: abbiamo docenti e studenti


abstract class User{
    public $nome;
    public $email;
    public $password;

    public function __construct($nome,$email,$password){
        $this->nome = $nome;
        $this->email = $email;
        $this->password = $password;
    }

    abstract public function saluta();
}




class Docente extends User {
    use Jetpack;
    public $stipendio;

    public function __construct($nome,$email,$password,$stipendio){
        parent::__construct($nome,$email,$password);

        $this->stipendio = $stipendio;
    }

    public function saluta(){
        echo "Ciao, sono $this->nome e sono un docente";
    }
}


$docente = new Docente("Donato", "donato@gmail.com" , "12345678", 100000000);

$docente->volo();


// tratti o traits: è una porzione di codice esterna alle classi, ma può essere assegnata ad esse. La particolarità è che a livello concettuale,
// i tratti sono funzioni che non centrano con ciò che la classe rappresenta


trait Jetpack
{
    public function volo(){
        echo "Ciao mamma, sto volando";
    }
}
