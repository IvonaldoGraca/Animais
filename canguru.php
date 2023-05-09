<?php
require_once "mamifero.php";

class Canguru extends Mamifero{
    public function locomover()
    {
        echo "saltando";
    }

public function alimentar()
{
    echo "mamando";
}

public function emitirSom()
{
    echo "som de canguru";
}
}

?>