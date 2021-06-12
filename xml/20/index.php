<?php

function mojaGreska($broj, $poruka, $fajl, $linija){
    // Definisanje custom prikaza greške
    echo "Greška: <br>";
    echo "Broj greške: " . $broj . "<br>";
    echo "Poruka greške: " . $poruka . "<br>";
}

// Postavljanje error handlera na ovaj iz domaće radinosti
set_error_handler(mojaGreska);
// Izazivanje greške
file_get_contents("nepostojeci-fajl.txt");
