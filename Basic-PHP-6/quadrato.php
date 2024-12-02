<?php

// Funzione che calcola il quadrato di un numero
$calcoloQuadrato = function ($numero) {
    return $numero ** 2;
};

// Funzione che utilizza array_map per applicare calcoloQuadrato
$al_quadrato = function (...$numeri) use ($calcoloQuadrato) {
    return array_map($calcoloQuadrato, $numeri);
};



// Array di test
$origine = [1, 2, 3, 4, 5];

// Calcola i quadrati utilizzando la closure
$quadrato = $al_quadrato(...$origine);

// Stampa dell'array originale
echo "Array originale:\n";
foreach ($origine as $key => $valore) {
    echo "Origine --> $key: $valore\n";
}

// Stampa dell'array dei numeri elevati al quadrato
echo "Numeri elevati al quadrato:\n";
foreach ($quadrato as $key => $valore) {
    echo "Quadrato --> $key: $valore\n";
}

// Stampa degli array originale e al quadrato affiancati
echo "\nArray originale e al quadrato affiancati:\n";
foreach ($origine as $key => $valore) {
    $v_origine = $valore;
    $v_risultato = $quadrato[$key];
    echo "$key: Origine --> $v_origine, Al quadrato --> $v_risultato\n";
}