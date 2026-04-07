<?php

// ricevo lp nuovo da inserire
$newLp = $_POST;

// leggo file lps
$lps_text = file_get_contents("./lps.json");


// converto da json a struttura dati php
$lps = json_decode($lps_text, true);


// inserisco nuovo lp nel file
$lps[] = $newLp;

// riconverto struttura php in json
$lps_text = json_encode($lps);


//sovrascrivo file
file_put_contents('./lps.json', $lps_text);

// rimando l'utente all'index
header('Location: ./index.php');

?>