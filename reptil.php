<?php
require_once "animal.php";

class Reptil extends Animal{
    private $cor_escama;

    public function locomover()
    {
        echo "rastejando";
    }

    public function alimentar()
    {
        echo "comendo vegetais";
    }

    public function emitirSom()
    {
        echo "som de réptil";
    }
}
?>