<?php

//problema: validare una password
    //deve contenere almeno 8 caratteri
    //deve contenere almeno una lettara maiuscola
    //deve contenere almeno un numero
    //deve contenere almeno un carattere speciale


//leggere dalla console la password

//se la lunghezza della password è maggiore o uguale a 8
    //la password è valida

//per ogni carattere della password
    //se il carattere è maiuscolo 
        //la password è valida

//? finchè il carattere della password non è maiuscola
    //? la password non è valida

//per ogni carattere della password
    //se il carattere è un numero 
        //la password è valida

//? finchè il carattere della password non è un numero
    //? la password non è valida

//per ogni carattere della password
    //se il carattere è speciale 
        //la password è valida

//? finchè il carattere della password non è speciale
    //? la password non è valida

$password = readline("Inserire la password: ");


//se la lunghezza della password è maggiore o uguale a 8
    //la password è valida
$checkLenght = false;
if( strlen($password) >= 8){
    $checkLenght = true;
}

var_dump($checkLenght);


//per ogni carattere della password
    //se il carattere è maiuscolo 
        //la password è valida

//? finchè il carattere della password non è maiuscola
    //? la password non è valida
//buongiorno
$checkUpper = false;
for ($i=0; $i < strlen($password) ; $i++) { 
    if(ctype_upper($password[$i])){
       $checkUpper = true; 
    }
}

var_dump($checkUpper);

//per ogni carattere della password
    //se il carattere è un numero 
        //la password è valida

$checkNumber = false;
for ($i=0; $i < strlen($password) ; $i++) { 
    if(is_numeric($password[$i])){
         $checkNumber = true; 
    }
}
        
var_dump($checkNumber);


//per ogni carattere della password
    //se il carattere è speciale 
        //la password è valida

$checkSpecial = false;
$specialChars = ["!","@","#","$","%"];

for ($i=0; $i < strlen($password) ; $i++) { 
    foreach ($specialChars as $specialChar) {
        if($password[$i] == $specialChar){
            $checkSpecial = true; 
        }     
    }
}
                
var_dump($checkSpecial);