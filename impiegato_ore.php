<?php
class ImpiegatoAOre extends Impiegato{
    protected $ore_lavorate;
    protected $compenso_orario;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario){
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
    }
    public function calcola_compenso(){
        echo("<p>" . "Compenso totale: ". $this->ore_lavorate * $this->compenso_orario . "</p" . "<br>");
    }
}

?>