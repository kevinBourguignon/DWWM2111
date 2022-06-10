<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>formulaire calcul impot sur le revenu</title>
</head>
<body>
    
<form action="index.php" method="post" id="forl1">

<label for="nom">Votre nom</label>

<input type="text" name="lastname" id="lastname" placeholder="votre nom ici" value='<?php
if(!empty($_POST["lastname"]))
  { echo $_POST["lastname"]; }  ?>' > <br>

<label for="revenu">Montant revenu annuel </label>
<input type="number" name="revenu" id="revenu" placeholder="revenu annuel"
value='<?php (!empty($_POST["revenu"])) ? print($_POST["revenu"]) : print("") ; ?>'
><br>


<input type="submit" value="Calculer impôt" id="ir" name="ir">
</form>
<?php  require("models\contribuable.php") ;

// $tab = array("Jusqu'à 10 225€"=>"0%", "de 10 226€ à 26 070€"=>"0.11", "de 26 071€ à 74 545€"=>"0.30", "de 74 546€ à 160 336€"=>"0.41", "Supérieur à 160 336€"=>"0.45");
if(!empty($_POST["lastname"]) && !empty($_POST["revenu"]) ){

    $monContribuable = new Contribuable($_POST["lastname"], $_POST["revenu"] );

    $impot = $monContribuable->calculImpot();

    echo "M(e)".($monContribuable->getNom())." vous avez un impot sur le revenu de : ".($impot)." € à régler";
}
?>



</body>
</html>