<?php


class  Moteur{

    private string $marque;
    private float $vitesseMax;

    public function __construct(string $marque, float $vitesseMax)
    {
        $this->marque = $marque;
        $this->vitesseMax = $vitesseMax;

    }

    public function getMarque() :string
    {
        return $this->marque;
    }

    

    
}

?>