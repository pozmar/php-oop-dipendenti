<?php
trait Progetto{
    protected $nome_progetto;
    protected $commissione;
}
class ImpiegatoSuCommissione extends Impiegato{
    use Progetto;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione){
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        if(!is_string($nome)|| ($cognome)){
            throw new Exception("Non è stata inserita una stringa");
        }
        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;
    }
    public function calcola_compenso(){
        echo("<p>" . "Compenso totale: " . $this->commissione . "</p" . "<br>");
    }
}
?>