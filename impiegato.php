<?php
class Impiegato extends Persona{
    protected $codice_impiegato;
    protected $compenso;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso = "da calcolare"){
        parent::__construct($nome, $cognome, $codice_fiscale);
        if(!is_string($nome)|| !is_string($cognome)){
            throw new Exception("Non è stata inserita una stringa");
        }
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }
    public function calcola_compenso(){
        echo("<p>". "Compenso totale: " . $this->compenso . "</p>" . "<br>");

    }
}

?>