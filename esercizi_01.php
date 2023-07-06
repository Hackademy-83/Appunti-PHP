<?php

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

//dichiarare un array di numeri
//dichiarare un contatore
//per ogni elemento contenuto nell'array
//se l'elemento dell'array è pari
//somma l'elemento
//incrementare il contatore

//dividere la somma per il contatore

$numbers = [1,3,4,6,71,100,20,54];
$counter = 0;
$sum = 0;

foreach($numbers as $number){
    if($number % 2 == 0){
        $sum += $number;
        $counter++;
    }
}

$avg = $sum / $counter;

echo $avg;


/* $numeri = [1,2,3,4,5,6];
$media = 0;

$pari = [];

foreach ($numeri as $numero) {
    if($number % 2 == 0){
        array_push($pari,$numero);
    }
}

$media = array_sum($pari)/count($pari); */

//Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” 
//al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY83".

//per ogni numero da 1 a 100
//se il modulo tra il numero e 5 è uguale a 0 E il modulo tra il numero e 3 è uguale a 0
//stampa "HACKADEMY83"
//se il modulo tra il numero e 5 è uguale a 0
//stampa “JAVASCRIPT”
//se il modulo tra il numero e 3 è uguale a 0
//stampa  “PHP”

for ($i = 1; $i <= 100; $i++) {
    if($i % 5 == 0 && $i % 3 == 0){
        echo "HACKADEMY83 \n";
    } else if($i % 5 == 0){
        echo "JAVASCRIPT \n";
    }else if($i % 3 == 0){
        echo "PHP \n";
    }else{
        echo $i . "\n";
    }
}
