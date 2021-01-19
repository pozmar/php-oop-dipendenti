<?php
class ImpiegatoSalariato extends Impiegato{
    protected $giorni_lavorati;
    protected $compenso_giornaliero;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorati, $compenso_giornaliero){
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }
    public function calcola_compenso(){
        echo("<p>". "Compenso totale: " . $this->giorni_lavorati * $this->compenso_giornaliero . "</p>" . "<br>");
    }
}
?>