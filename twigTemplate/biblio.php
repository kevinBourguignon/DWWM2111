<?php

// biblio.php
/* récupérer le tableau des données */
require 'modele/data.php';
$donnees = getData();
 
/* inclure l'autoloader */
require_once 'vendor/autoload.php';
/* templates chargés à partir du système de fichiers (répertoire vue) */
$loader = new Twig_Loader_Filesystem('vue');
/* options : prod = cache dans le répertoire cache, dev = pas de cache */
$options_prod = array('cache' => 'cache', 'autoescape' => true);
$options_dev = array('cache' => false, 'autoescape' => true);
/* stocker la configuration */
$twig = new Twig_Environment($loader, $options_dev);
/* charger+compiler le template, exécuter, envoyer le résultat au navigateur */
echo $twig->render('biblio.twig', $donnees);