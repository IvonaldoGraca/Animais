<?php
abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;


   abstract public function locomover();

    abstract public function alimentar();
    
    abstract function emitirSom();

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;

        return $this;
    }

    public function getMembros(){
        return $this->membros;
    }

   
    public function setMembros($membros){
        $this->membros = $membros;

        return $this;
    }
}

?>