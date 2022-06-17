<?php


class Financier{

    private float $k;
    private  $tm;
    private  $nb_mois;
    

public function __construct(float $_k, $_ta, $_an){
    $this->k = $_k;
    $this->tm = $_ta/(12*100);
    $this->nb_mois = $_an*12;
}

public function getCapital(){
    return $this->k;
}
public function mensualite(){
 
 $a= ($this->k*$this->tm)/(1-pow((1+$this->tm),-$this->nb_mois));

 
 return $a;
}


public function genererTableau(){
    
    $chaine= "<table class='table table-dark table-striped'><thead><tr><th>numéro de mois</th><th>Intérêts</th><th>partie Amortissement</th><th>capital restant dù</th><th>Mensualité constante</th></thead><tbody>";
    $parinteret = 0;
    $parAmortissement = 0;
    $capitalRestant = 0;
    for ($i=0 ; $i < $this->nb_mois ; $i++) { 
        if($i==0){
            $parinteret = $this->k*$this->tm;
            $parAmortissement = $this->mensualite()-$parinteret;
            $capitalRestant = $this->k-$parAmortissement;
            $chaine.="<tr><td>".($i+1)."</td><td>".round($parinteret,2)."</td><td>".round($parAmortissement,2)."</td><td>".round($capitalRestant,2)."</td><td>".round($this->mensualite(),2)."</td></tr>";
        }else{
            $parinteret = $capitalRestant*$this->tm;
            $parAmortissement = $this->mensualite()-$parinteret;
            $capitalRestant = $capitalRestant-$parAmortissement;
            $chaine.="<tr><td>".($i+1)."</td><td>".round($parinteret,2)."</td><td>".round($parAmortissement,2)."</td><td>".round($capitalRestant,2)."</td><td>".round($this->mensualite(),2)."</td></tr>";
        }

       
    }
    $chaine.="</tbody></table>";
   
return $chaine;
}








}






?>