<?php
include_once "animal.php";
class Ave extends Animal{
    private $cor_pena;

    public function locomover(){
        echo "Voando";
        
    }

    public function alimentar(){
        echo "Comendo frutas ou cereais";
        
    }

    public function emitirSom(){
        echo "Som da ave";

        
    }

    public function fazerNinho(){
        echo "Criando Ninho";
    }

    /**
     * Get the value of cor_pena
     */ 
    public function getCor_pena()
    {
        return $this->cor_pena;
    }

    /**
     * Set the value of cor_pena
     *
     * @return  self
     */ 
    public function setCor_pena($cor_pena)
    {
        $this->cor_pena = $cor_pena;

        return $this;
    }
}

?>