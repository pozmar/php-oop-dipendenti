<?php
class Persona{
    public $nome;
    public $cognome;
    public $codice_fiscale;
    function __construct($nome, $cognome, $codice_fiscale){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }
    public function to_string(){
        foreach($this as $key=>$value){
            echo ("<p>" . $key . ":" . $value . "</p>" . "<br>");
        }
    }
}
class Impiegato extends Persona{
    protected $codice_impiegato;
    protected $compenso;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso = "da calcolare"){
        parent::__construct($nome, $cognome, $codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }
    public function calcola_compenso(){
        echo("<p>". "Compenso totale: " . $this->compenso . "</p>" . "<br>");

    }
}
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
trait Progetto{
    protected $nome_progetto;
    protected $commissione;
}
class ImpiegatoSuCommissione extends Impiegato{
    use Progetto;
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione){
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;
    }
    public function calcola_compenso(){
        echo("<p>" . "Compenso totale: " . $this->commissione . "</p" . "<br>");
    }
}
$primo_impiegato = new ImpiegatoSalariato("Mattia", "Rossi", "mttrss01", "001", 5, 50);
$primo_impiegato->to_string();
$primo_impiegato->calcola_compenso();
$impiegato_commissione = new ImpiegatoSuCommissione("Laura", "Bianco", "lrbnc02", "010", "Web", "400");
$impiegato_commissione->to_string();
$impiegato_commissione->calcola_compenso();
$impiegato_ore = new ImpiegatoAOre("Gabriele", "Malavasi", "gbrmlv03", "003", 8, 12);
$impiegato_ore->to_string();
$impiegato_ore->calcola_compenso();
?>