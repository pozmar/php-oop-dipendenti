<?php
require_once('persona.php');
require_once('impiegato.php');
require_once('impiegato_s.php');
require_once('impiegato_c.php');
require_once('impiegato_ore.php');

try{
$primo_impiegato = new ImpiegatoSalariato("Matteo", "Rossi", "mttrss01", "001", 5, 50);
$primo_impiegato->to_string();
}
catch(Exception $e){
    echo 'Non hai inserito i dati richiesti: ' . $e->getMessage();
}

$primo_impiegato->calcola_compenso();
$impiegato_commissione = new ImpiegatoSuCommissione("Laura", "Bianchi", "lrbnc02", "010", "Web", "400");
$impiegato_commissione->to_string();
$impiegato_commissione->calcola_compenso();
$impiegato_ore = new ImpiegatoAOre("Luca", "Malavasi", "gbrmlv03", "003", 4, 12);
$impiegato_ore->to_string();
$impiegato_ore->calcola_compenso();
?>