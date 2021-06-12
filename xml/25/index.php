<?php

# // - Početak i kraj patterna - delimiteri
# ^ - Početak patterna
# $ - Kraj patterna
# . - Mijenja bilo koji karakter u tekstu (slovo, broj, specijalni kar.)
echo preg_match("/moj.tring/", "mojKtring") . "<br>"; //Tačno
echo preg_match("/moj.tring/", "mojString") . "<br>"; //Tačno
echo preg_match("/moj.tring/", "moj9tring") . "<br>"; //Tačno
echo preg_match("/moj.tring/", "moj!tring") . "<br>"; //Tačno
# \s - Označava space (razmak) u tekstu
echo preg_match("/moj\sstring/", "Moj string") . "<br>"; //Tačno
# \d - Označava bilo koji broj (0 do +beskonačno) u tekstu
echo preg_match("/broj \d/", "broj 5") . "<br>"; //Tačno
echo preg_match("/broj \d/", "broj 55") . "<br>"; //Tačno
# \w - Označava riječ (bilo koju riječ) u stringu
echo preg_match("/moj \w/", "moj string") . "<br>"; //Tačno
echo preg_match("/moj \w/", "moj bilokakavstring") . "<br>"; //Tačno
echo preg_match("/moj \w/", "moj string novi") . "<br>"; //Tačno
# [] - Označava grupisanje, odnosno set karaktera
echo preg_match("/a[bcd]e/", "abe") . "<br>"; //Tačno
echo preg_match("/a[bcd]e/", "ace") . "<br>"; //Tačno
echo preg_match("/a[bcd]e/", "ade") . "<br>"; //Tačno
echo preg_match("/a[bcd]e/", "aze") . "<br>"; //Netačno

# Primjer kombinacije (traži slovo a, slovo b ili c i nakon toga neki broj - to daje true, tačan rezultat)
echo preg_match("/a[bc\d]/", "ab3") . "<br>"; //Tačno

# Primjer - "string string"
echo preg_match("/^[a-zA-Z ]*$/", "Amar Beslija") . "<br>"; //Tačno
echo preg_match("/^[a-zA-Z ]*$/", "Amar Bešlija") . "<br>"; //Netačno
echo preg_match("/^[a-žA-Ž ]*$/", "Amar Bešlija") . "<br>"; //Tačno

# Primjer - "<h1>Bilo koji tekst</h1>";
echo preg_match("/<h1>(.*)<\/h1>/", "<h1>Testiranje</h1>") . "<br>"; //Tačno
echo preg_match("/<h1>(.*)<\/h1>/", "<h1>Bilo šta</h1>") . "<br>"; //Tačno
echo preg_match("/<h1>(.*)<\/h1>/", "<p>Netačno</p>") . "<br>"; //Netačno

# Primjer - "<bilokojitag>Bilo koji tekst</bilokojitag>"
echo preg_match("/<(.*)>(.*)<\/(.*)>/", "<p>Test</p>") . "<br>"; //T
echo preg_match("/<(.*)>(.*)<\/(.*)>/", "<h1>Test</h1>") . "<br>"; //T
echo preg_match("/<(.*)>(.*)<\/(.*)>/", "<span>Test</span>") . "<br>"; //Tačno
echo preg_match("/<(.*)>(.*)<\/(.*)>/", "<img src=''>") . "<br>";

# Primjer - Bilo koji broj
echo preg_match("/[0-9]+/", "2021") . "<br>"; //Tačno
echo preg_match("/[0-9]+/", "1") . "<br>"; //Tačno

# Primjer - IP adresa
echo preg_match("/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/", "123.45.1.13") . "<br>"; //Tačno

# Pattern za passworde, gdje morate imati između 8 i 20 karaktera, uključujući barem jedno malo slovo, jedno veliko slovo, broj i specijalni karakter
echo preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/", "Lozinka09!") . "<br>"; // Tačno
echo preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/", "lozinka09!") . "<br>"; // Netačno, nema veliko slovo
echo preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/", "Lozinka!") . "<br>"; // Netačno, nema broj

# Pattern za username, koji ne smije početi brojem, ali može da sadrži velika i mala slova i brojeve, minimalno 8, maksimalno 20 karatera
echo preg_match("/^[^0-9][a-zA-Z0-9]{8,20}$/", "amarbeslija") . "<br>"; //Tačan
echo preg_match("/^[^0-9][a-zA-Z0-9]{8,20}$/", "amarbeslija1") . "<br>"; //Tačan
echo preg_match("/^[^0-9][a-zA-Z0-9]{8,20}$/", "1amarbeslija") . "<br>"; //Netačan jer počinje brojem