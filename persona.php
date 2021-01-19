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
?>