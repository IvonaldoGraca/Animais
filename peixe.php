<?php
include_once "animal.php";

class Peixe extends Animal{
    private $cor_escamas;

    public function locomover(){
        echo "nadando";
    }

        public function alimentar(){
            echo "comendo vegetais";
        }

        public function emitirSom()
        {
            echo "soltar bolha";
        }
    

    /**
     * Get the value of cor_escamas
     */ 
    public function getCor_escamas()
    {
        return $this->cor_escamas;
    }

    /**
     * Set the value of cor_escamas
     *
     * @return  self
     */ 
    public function setCor_escamas($cor_escamas)
    {
        $this->cor_escamas = $cor_escamas;

        return $this;
    }
}

?>