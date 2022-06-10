<?php

$min = intval($_GET["min"] ?? 0);
$max = intval($_GET["max"] ?? 0);

// todo: controler min et max


$donnees = file_get_contents("../volcan.json");

// echo $donnees;

$tab = json_decode($donnees, true);

var_export($tab);

foreach ($donnees as $key => $value) {
    # code...
}


$result = [];

// parcourir $tab et sélectionner uniquement les images delandées
// et les mettres dans result.


echo json_encode($result);