<?php
$addresses = array(
    'via tal dei tali 1, 20220 Milano (MI)',
    ['via tal dei tali 2', 'Genova', 'GE', '10000', 'Italia'],
    2,
    null,
    new stdClass(),
    ['Mario', 'Rossi']
);

// Funzione che verifica se un elemento è un indirizzo valido
$IndirizzoValido = function ($indirizzo) {
    // L'indirizzo è una stringa
    if (is_string($indirizzo)) {
        return true;
    }
    // L'indirizzo è un array corretto
    if (is_array($indirizzo) && count($indirizzo) >= 4) {
        // Controlla che ci siano almeno via, città, provincia e CAP
        return true;
    }
    return false;
};

// Scorre l'array e stampa solo gli indirizzi validi
foreach ($addresses as $indirizzo) {
    if ($IndirizzoValido($indirizzo)) {
        // Stampa l'indirizzo
        if (is_string($indirizzo)) {
            echo "Indirizzo: $indirizzo\n";
        } elseif (is_array($indirizzo)) {
            echo "Indirizzo: " . implode(', ', $indirizzo) . "\n"; 
        }
    }
}
