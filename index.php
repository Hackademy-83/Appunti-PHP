<?php

//let x = 5;
//il codice da noi scritto deve essere tradotto

//compilazione: il codice viene tradotto in linguaggio macchina e 
//viene generato un eseguibile solo ed esclusivamente se non vengono trovati errori
//in questi caso la traduzione viene effettuata da un compilatore che non è altro che un software che si occupa della traduzione



//interpretazione: il codice viene sempre tradotto ma viene anche eseguito immediatamente

/* let x = 5;
console.log(y);
console.log(x); */


//PHP è un linguaggio di programmazione interpretato, lato server e si basa sull'OOP.

/* lato client = codice eseguito dal browser (JS)
lato server = codice eseguito da un server (PHP)

Il web si basa su una architettura client/server in cui il client invia una richiesta ad un server e il server deve rispondere
a tale riesta con una pagina HTML.

Vantaggi PHP:
- lato server
- interpratato
- permette la minpolazione dell'HTML
- PHP permette di interfacciarsi con i database

PHP: Hypertext preprocessor */




//! varibili è una locazione di memoria in cui possiamo inserire dei dati

//? dichiarazione
$prova;

//? asseganzione
$prova = 5;

//? inizializzazione
$numero = 10;

$user_name = "Davide"; //snake sintax
$userName = "Nicola"; //camel case

/* echo $user_Name; */



//! tipi di dati:

//? dati primitivi: interi, float, bool e string
$num = -2; //intero
$num = -22222222222222222.2; //float

// i booleani vengono utilizzare per vericare che una condizione si verifica o meno
$bool = true; // booleani: possono essere solo true o false
$bool2 = false;


//PHP è un linguaggio a tipizzazione debole: non ho bisogno di specificare il tipo di dato
//C++ abbiamo una tipizzazione forte: int a = "Ciao";

//string
$username = "Valerio";
$string = "Ciao, sono $username \n"; //supportano la string interpolation
$string2 = 'Ciao, sono \n' . $username; //non sula supportano
$string3 = 'L\'albero è abbassito'; //escape character

/* echo $string;
echo $string2; */

//? dati composti: dati che possono contenere a loro volta altri dati
//array: sono una lista di valori

$array = [1, 2, 3, 4, 5, 6]; //array omogeneo: un array che contine valori dello stesso tipo
$array2 = [1, 2, 3, "Ciao", 5, false]; //array eterogeneo: un array che contine valori di diverso tipo

//a dogni elemento contenuto in un array viene automaticamente assegnato un indice che parte da 0
//0-based
/* echo $array; *///echo prova a convertire le varibili in input, in stringhe
/* var_dump($array2);
print_r($array2); */

//?array associativi: negli array associativi il programmatore può personalizzare gli indici

$studente = [
    "cognome" => "Cutrone",
    "hack" => 83,
    "nome" => "Davide"
];

$studente2 = [
    "Antonello",
    "Paparella",
    83
];

/* print_r($studente['nome']);
print_r($studente2); */

//array di array associativi
$studenti = [
    [
        "nome" => "Alina",
        "cognome" => "Virvea",
        "hack" => 83
    ],
    [
        "nome" => "Ilaria",
        "cognome" => "Amorotti",
        "hack" => 83
    ]
];

/* print_r($studenti['primo_studente']); */



//! operatori: ci permottono di effettuare delle operazioni
//? matematici, di confronto e logici

// matematici: +, -, *, /, %
$operando1 = 4;
$operando2 = 4;

$somma = $operando1 + $operando2;
$diff = $operando1 - $operando2;
$div = $operando1 / $operando2;
$molt = $operando1 * $operando2;
$mod = $operando1 % $operando2;



$operando1 = 4;
$operando2 = 4;
//confronto: ==, ===, <, >, >=, <=, != (il risulto degli operatori di confronto sarà sempre un valore booleano)
$uguale = $operando1 == $operando2;
$triplo_uguale = $operando1 === $operando2; //prima di confrontare i valori, confrontera il tipo di dato
$diverso = $operando1 != $operando2; // il diverso è l'opposto dell'uguaglianza
$triplo_diverso = $operando1 !== $operando2;
$minore = $operando1 <= $operando2;

//logici: AND, OR, NOT (restituiscono un valore booleano)

//AND restituisce true se entrambi i suoi operandi sono true. In tutti gli atri casi restituisce false
$and = $uguale && $diverso; //false

//OR restituisce true se alemno uno dei due operandi è true
$or = ($uguale || $diverso) && $triplo_uguale; //true

//NOT restiusce l'inverso !
$not = !($operando1 == $operando2 && $operando1 != $operando2 || $operando1 <= $operando2);

/* var_dump($not); */


//! costrutti
//? come si risolve un problema? un problema di risolve con un insieme di istruzione. Questo insieme prende il nome di algoritmo

//? teorema di bohm e jacopini: per risolvere un qualisasi problema bastano questi tre costrutti:

//? sequenza: l'ordine con cui eseguiamo le istruzioni
/* $num = 5;
$somma = $num + $num2;
$num2 = 4; */

/* echo $somma; */
//? selezione: permette, in base al verificarsi di una condizione o meno, di eseguire del codice invece che un altro
$age = 16;

/* if ( condizione ){
     codice da eseguire nel caso in cui la condizione viene verificata 
} */

if ($age >= 18) {
    /* echo "Puoi guidare"; */
} else if ($age <= 18) {
    /* il codice che deve esere eseguito nel caso in cui la condizione non viene verificata */
    /* echo "Non puoi guidare"; */
}


$colore = "verde";

/* if($colore == "bianco"){
    echo "Il tuo colore preferito è il bianco";
}else if($colore == "verde"){
    echo "Il tuo colore preferito è il verde";
}else if($colore == "giallo"){
    echo "Il tuo colore preferito è il giallo";
}else if($colore == "rosso"){
    echo "Il tuo colore preferito è il rosso";
}else{
    echo "Colore non rilevato";
} */

/* switch( *//* variabile su cui effettuare i cotrolli *//* ){ */
//casi che vogliamo controllare
/* } */

/* switch ($colore) {
    case "bianco":
        echo "Il tuo colore preferito è il bianco";
        break;
    case "verde":
        echo "Il tuo colore preferito è il verde";
        break;
    case "giallo":
        echo "Il tuo colore preferito è il giallo";
        break;
    case "rosso":
        echo "Il tuo colore preferito è il rosso";
        break;
    default:
        echo "Colore non rilevato";
} */

//?iteazione: è la ripetizione di una porzione di codice fino a quando una determinata condizione viene verificata
/* for(/* contatore; condizione; incremento *//* ){ */

/* } */
$studenti = [1,"ciao",3,4,5,6];

/* for($i = 0; $i < count($array); $i++){
    echo $array[$i];
} */


/* $i=0;
while($i < count($array)){
    echo $array[$i];
    $i++;
} */

//solo per gli array
foreach($studenti as $studente){
    echo $studente;
}

var_dump($pippo);
//? iterazione




















?>