<?php

if(!file_exists("neki-fajl.txt")){
    // Odem u bin i provjerim ima li tamo fajla
    // Ako nema, da provjerim log da li je možda fajl trebao da bude kreiran, a nije i zašto nije
    error_log("Fajl neki-fajl.txt nije pronađen", 3, "c://laragon/www/greska.txt");

    error_log("Fajl neki-fajl.txt nije pronađen ni u bin folderu", 3, "c://laragon/www/greska.txt");

    error_log("Fajl neki-fajl.txt nije mogao biti kreiran zbog permisija foldera!", 3, "c://laragon/www/greska.txt");
    
    die("Traženi fajl nije pronađen! Greška 407! Kontaktirajte administratora na ovom linku: xyz");
}else{
    $fajl = fopen("neki-fajl.txt", "r");
}