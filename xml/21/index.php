<?php

function proba(){
    //throw new Exception("DESILA SE GREŠKA! HAHA");
    if(!file_exists("nepostojeci-fajl.txt")){
        $kreirani_fajl = fopen("nepostojeci-fajl.txt", "w");
        if(!file_exists("nepostojeci-fajl.txt")){
            
            error_log("Fajl nepostojeci-fajl.txt nije bio kreiran, a pokušao se učitati. Fajl smo pokušali ponovno kreirati kroz funkciju fopen(), ali ni to nije uspjelo!", 3, "C://laragon/www/mojegreske.txt");

            throw new Exception("Nije moguće kreirati fajl! Kontaktirajte administratora za pomoć na linku: xyz ili pogledajte našu dokumentaciju na linku: abc.");
        }
    }else{
        file_get_contents("nepostojeci-fajl.txt");
    }
}

try{
    // Pokušam da izvršim funkciju
    proba();
    // Ako se desi greška (Exception) idem na catch(){}
}catch(Exception $e){
    echo $e->getMessage();
}