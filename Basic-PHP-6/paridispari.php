<?php 

echo "Funzione semplice\n";

$valore = 2;

function PariDispari($numero) {
    // Pari se il resto della divisione per 2 è 0
    return $numero % 2 === 0; // controlla anche il tipo
}

var_dump(PariDispari($valore));


echo "\nFunzione con Closure\n";


$paridispari = function($numero) {
    return $numero % 2 === 0;
};

var_dump($paridispari($valore));


echo "\nFunzione con Callback\n";

function Controlla($numero, callable $callback) {
    return $callback($numero);
}

// Definizione della callback per verificare se il numero è pari
$sePariDispari = function($numero) {
    return $numero % 2 === 0;
};

/* Con Arrow Function */
//$sePariDispari = fn($numero) => $numero % 2 === 0;

var_dump(Controlla($valore, $sePariDispari));