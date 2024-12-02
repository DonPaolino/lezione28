<?php
$giorniAlCompleanno = function($data_compleanno) {
    // Data corrente
    $data_oggi = date("Y-m-d");

    // Converte la data del compleanno e la data corrente in formato timestamp
    $Compleanno = strtotime($data_compleanno);
    $Oggi = strtotime($data_oggi);

    // Calcola la differenza di giorni
    $differenzaSecondi = $Compleanno - $Oggi;
    $giorni_rimasti = intval($differenzaSecondi / (60 * 60 * 24));

    // Mostra il risultato
    if ($giorni_rimasti > 0) {
        return "Mancano " . $giorni_rimasti . " giorni al tuo compleanno!";
    } elseif ($giorni_rimasti < 0) {
        // Il compleanno è già passato 
        $prossimoCompleanno = strtotime("+1 year", $Compleanno);
        $differenzaSecondi = $prossimoCompleanno - $Oggi;
        $giorni_passati = abs($giorni_rimasti); // Trasforma in positivo
        return "Hai già compiuto gli anni " . $giorni_passati . " giorni fa!";
    } else {
        return "Buon Compleanno!";
    }
};

// Visualizza i giorni al compleanno
echo $giorniAlCompleanno("2024-12-30");


?>

