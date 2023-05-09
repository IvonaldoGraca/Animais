<?php
require_once "mamifero.php";

abstract class Cao extends Mamifero{
    private $nose;
public final function emitirSom()
{
    echo "latindo";
}
public final  function alimentar()
{
    echo"mamando";
}

public final function locomover()
{
    echo "correndo";
}

    /**
     * Get the value of nose
     */ 
    public function getNose()
    {
        return $this->nose;
    }

    /**
     * Set the value of nose
     *
     * @return  self
     */ 
    public function setNose($nose)
    {
        $this->nose = $nose;

        return $this;
    }
}

?>