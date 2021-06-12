<?php

class mojaGreska extends Exception{
    // Definisanje poruke naše specijalizirane greške
    public function __construct(){
        $this->message = "Desila se mojaGreska!";
    }
    // Definisanje šta će se naći na izlazu prilikom izbacivanja greške
    public function __toString(){
        $klasa = __CLASS__;
        $poruka = $this->getMessage();
        $fajl = $this->getFile();
        $linija = $this->getLine();
        $stakTrejs = $this->getTraceAsString();
        return $stakTrejs;
    }
}

try{
// Testiramo izbacivanje greške
if(!file_exists("nepostojeci-fajl.txt")){
    throw new mojaGreska();
}
}catch(Exception $e){
    echo $e->getMessage();
}
