<?php

$string = "amar.test@beslija.com";
$izraz = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,100})$/";
echo preg_match($izraz, $string);