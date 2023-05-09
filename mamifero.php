<?php
include_once "animal.php";

class Mamifero extends Animal{
    private $cor_pelo;

    public function locomover(){
        echo "correndo";
    }

    public function alimentar(){
        echo "mamando";
    }

    public function emitirSom()
    {
        echo "som do mamifero";
    }

    /**
     * Get the value of cor_pelo
     */ 
    public function getCor_pelo()
    {
        return $this->cor_pelo;
    }

    /**
     * Set the value of cor_pelo
     *
     * @return  self
     */ 
    public function setCor_pelo($cor_pelo)
    {
        $this->cor_pelo = $cor_pelo;

        return $this;
    }
}

?>