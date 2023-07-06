<?php

//! funzioni: porzioni di codice che possono essere seguite più volte all'interno di un programma

//? built-in: sono funzioni fornite da PHP (count,var_dum o print_r)
//? user functions: sono funzioni scritte da noi programmatori



//dichiarazione
function nomeFunzione(/* parametri formali */){
    /* le istruzioni della funzione */
}

//invocazione
/* nomeFunzione(/* parametri reali *//* ); */

//dichiariamo la funzione sum
//il passaggio dei parametri è posizionale
function sum($num, $num2){//parametri formali
    return $num + $num2;
}

//invocazione
$sum = sum(1,2);//parametri reali
$sum2 = sum($sum,2);

/* echo $sum2; */


//! scope: è una porzione di codice in cui è visibile una variabile
//! globale (JS): una varibile dichiarata all'esterno di una funzione può essere richiamata anche all'interno di essa

/* let x = 5;

function sum(){
    console.log(x);
} */



//! locale (PHP): se dichiaro una variabile allésterno di una funzione, non posso richiamarla all'interno di essa


/* $x = 5;

function sum2($a){
    echo $a;
}

sum2($x); */

//! passaggio dei parametri

// passaggio per valore: il dato passato in input viene duplicato. Quindi all'interno di una funzione manipoliamo la copia dell'input e 
//non l'input stesso

$x = 5;

function sum2($a){
    $a += 2;
    echo $a;
}

/* sum2($x);

echo $x; */

//passaggio per riferimento: io non passo il dato contenuto nella varibile ma l'indirizzo della locazione di memoria

$x = 5;

function sum3(&$a){
    $a += 2;
    echo $a;
}

/* sum3($x);

echo $x; */

//parametri di default: noi possiamo specificare un valore che un parametro deve assuemere nel momento in cui non passiamo nessun input

$x = 5;

function sum4($a = 0){
    $a += 2;
    echo $a;
}

/* sum4(); */

// parametri variabili
function avg(...$numbers){/* spread operator */
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum / count($numbers);
}
/* una funzione che non ha un output (return) si dice void function */

var_dump(avg(1,2,3,4,5,6,7,8,6,7,8,9));


//callback: funzione passata in input ad un'altra funzione


function avg2(...$numbers){/* spread operator */
    $sum = 0;
    $sum = array_reduce($numbers, function ($sum,$num){/*  funzione anonima */
        return $sum + $num;
    });
    return $sum / count($numbers);
}
/* una funzione che non ha un output (return) si dice void function */

var_dump(avg2(1,2,3,4,5,6,7,8,6,7,8,9));

