<?php


class VoitureDeCourse extends Voiture
{
    protected string $marque;
    protected string $modele;
    protected int $poids = 1000;
    protected Moteur $monMoteur;

public function voitureDeCourse(string $marque, string $modele, int $poids, Moteur $monMoteur)
{
        $this->marque = $_marque;
        $this->modele = $_modele;
        $this->poids = $_poids;
        $this->monMoteur = $_monMoteur;
}

public function calculVitesse() :int
{
    
}

}




?>