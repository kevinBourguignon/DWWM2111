<?php

$min = intval($_GET["min"] ?? 0);
$max = intval($_GET["max"] ?? 0);

// todo: controler min et max


$donnees = file_get_contents("../volcan.json");

if($min === 0 && $max === 0){
    exit($donnees);
}
// echo $donnees;

$tab = json_decode($donnees, true);

if($max== 0){
    $max = count($tab);
} 

//var_export($tab);

$result = [];

foreach ($tab as $key => $value) {

    if($value["id"] >= $min && $value["id"] <= $max){
        $result[] = $value;
    }
   
}


// parcourir $tab et sélectionner uniquement les images delandées
// et les mettres dans result.

//option pour les accents
echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

