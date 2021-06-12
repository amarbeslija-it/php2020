<?php

class MojaKlasaException extends Exception{
    public function __construct(){
        $this->message = "Desila se neka specijalizirana greška!";
    }
}

try{
    //throw new MojaKlasaException();
    throw new Exception();
}catch(MojaKlasaException $e){
    echo "Uhvaćena specijalizirana greška, odnosno specijalizirani Exception!";
}catch(Exception $e){
    echo "Uhvaćena generalna greška, odnosno opći Exception/izuzetak!";
}

/**
 * Uvijek logovati greške (error_log)
 * Prije izbacivanja same greške pokušati napraviti kod koji će probati zamijeniti neuspjeli kod - onaj koji pravi problem
 * U log-u uvijek detaljno opisati šta je greška, šta je pokušano da se uradi, koje funkcije/metode/klase su korištene
 * Korisniku uvijek detaljne informacije o tome šta da uradi dalje
 * Kreirati svoje greške, svoje Exception-e ovisno o problemu
 * Koristiti try-catch u nekom finalnom testiranju izvršavanja koda, a svakako koristiti if-else u nekim standardnim problemima (npr. otvaranje fajla - da li fajl postoji, da li se može upisati u njega; npr. da li je dobra konekcija na bazu, da li su ispunjeni zahtjevi query-a, da li su tačne kolone i njihovi tipovi koje navodimo)
 */