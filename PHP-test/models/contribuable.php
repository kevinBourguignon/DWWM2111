<?php

class Contribuable{
    //attributs
    private  $nom;
    private  $revenu;

    private const tranche1=0;
    private const tranche2=0.11;
    private const tranche3=0.30;
    private const tranche4=0.41;
    private const tranche5=0.45;

   

//constructeur surchargé
    public function __construct($_name, $_income)
    {
        $this->nom=$_name;
        $this->revenu=$_income;
    }

    //propriété
    public function getRevenu()
    {

        return $this->revenu;
    }

    public function setRevenu(float $_newIncome)
    {

        $this->revenu=$_newIncome;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function calculImpot()
    {
        $resImpot = 0;
    
        
    
        if($this->revenu<=10225){

            $resImpot = $this->revenu* self::tranche1;
        }
        else if($this->revenu>=10226 && $this->revenu<=26070)
        {
 
            $resImpot = ($this->revenu - 10226) * self::tranche2;
        }
        else if($this->revenu>=26071 && $this->revenu<=74545)
        {
          
            $resImpot = (15845* self::tranche2) + ($this->revenu-26070)* self::tranche3;
        }
        else if($this->revenu>=74546 && $this->revenu<=160336)
        {
           
            $resImpot = (15845* self::tranche2) + (48474* self::tranche3) + ($this->revenu-74545)* self::tranche4;
        }
        else if($this->revenu>160336)
        {
           
            $resImpot = (15845* self::tranche2) + (48474* self::tranche3) + (85790* self::tranche4) + ($this->revenu-160336)* self::tranche5;
        }

        return $resImpot;
        }
    }



?>