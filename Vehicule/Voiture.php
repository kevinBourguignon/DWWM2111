<?php

class Voiture
{
    protected string $marque;
    protected string $modele;
    protected int $poids = 1000;
    protected Moteur $monMoteur;


    public function __construct(string $_marque, string $_modele, int $_poids, Moteur $_monMoteur)
    {
        $this->marque = $_marque;
        $this->modele = $_modele;
        $this->poids = $_poids;
        $this->monMoteur = $_monMoteur;
    }

    public function getMarque() :string
    {
        return $this->marque;
    }

    public function getModele() :string
    {
        return $this->modele;
    }

    public function getPoids() :int
    {
        return $this->poids;
    }

    public function setPoids(int $_newpoids) 
    {
        $this->poids = $_newpoids;
    }

    public function setMoteur(Moteur $_newMoteur) 
    {
        $this->monMoteur = $_newMoteur;
    }

    public function calculVitesse() :int
    {
        $vitesseMax = 0;

        $vitesseMax = $this->monMoteur-($this->poids*0.3);

        
    }


}




























?>