<?php

//! paradigma funzionale

//? estrapolamento, incapsulamento e astrazione


function checkLenght($string)
{
    if (strlen($string) >= 8) {
        return true;
    }
    echo "Attenzione: input troppo corto! \n";
    return false;
}


function checkNumber($string)
{

    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        }
    }

    echo "Attenzione: input senza numero \n";
    return false;
}

function checkUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }

    echo "Attenzione: input senza maiuscola \n";

    return false;
}

function checkSpecial($string)
{
    $specialChars = ["!", "@", "#", "$", "%"];

    for ($i = 0; $i < strlen($string); $i++) {
        foreach ($specialChars as $specialChar) {
            if ($string[$i] == $specialChar) {
                return true;
            }
        }
    }
    echo "Attenzione: input senza carattere speciale \n";

    return false;
}


function checkPassword($password)
{
    if (checkLenght($password) && checkUpper($password) && checkNumber($password) && checkSpecial($password)) {
        return true;
    }
    return false;
}



do {
    $password = readline("Inserire password:");
} while (!checkPassword($password));

echo "Password corretta";