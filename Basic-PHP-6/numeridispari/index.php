<?php
// Funzione che verifica se un numero è pari
$paridispari = function($numero) {
    return $numero % 2 === 0;
};

// Funzione che trova i primi 10 numeri dispari
$primiNumeriDispari = function($paridispari) {
    $trovati = 0; // Contatore per numeri dispari trovati
    $numero = 1; // Partiamo dal numero 1

    echo "<h3>Primi 10 numeri dispari:</h3>";

    while ($trovati < 10) {
        if (!$paridispari($numero)) { // Controlla se il numero è dispari
            echo $numero . "<br>";
            $trovati++;
        }
        $numero++; // Passa al numero successivo
    }
};

// Mostra i primi 10 numeri dispari
$primiNumeriDispari($paridispari);

?>

