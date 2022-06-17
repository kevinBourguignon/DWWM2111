<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mensualité d'un prêt</title>
</head>

<body class="p-3 mb-2 bg-secondary">

    <main>
    <?php require ("financier.php") ; 
    if(isset($_GET["validation"])){
     if(!empty($_GET["emprunt"]) && !empty($_GET["interet"]) && !empty($_GET["remboursement"]) ){
//changement en float instancier l'objet.
// echo "i am here";
    $financier = new Financier(floatval($_GET["emprunt"]), floatval($_GET["interet"]), floatval($_GET["remboursement"]));

        $mensualite = round($financier->mensualite(),2);
        // echo $mensualite;

}
}else{
    $mensualite=0;
    echo "veuillez remplir le formulaire";}
?>
    <form action="index.php" method="GET" id="calculPret" enctype="multipart/form-data">
    
    <label for="emprunt" id="capitalEmprunte">Capital emprunté</label>
    <input type="text" id="emprunt" name="emprunt" size="15" maxlength="120" value='<?php 
    if(!empty($_GET["emprunt"]))
    { echo $_GET["emprunt"]; } ?>' > <br>

    <label for="interet" id="tauxInteret">Taux intérêt en %:</label>
    <input type="text" id="interet" name="interet" size="15" maxlength="120" value='<?php 
    if(!empty($_GET["interet"]))
    { echo $_GET["interet"]; } ?>' > <br>

    <label for="remboursement" id="dureeRemboursement">Durée de remboursement en nb d'année:</label>
    <input type="text" id="remboursement" name="remboursement" size="15" maxlength="120" value='<?php 
    if(!empty($_GET["remboursement"]))
    { echo $_GET["remboursement"]; } ?>' > <br>

    <input type="submit" value="valider" id="validation" name="validation"> 

    <label for="mensualite" id="mensualite1">Mensualité:</label>
    <input type="text" readonly="true"  id="mensualite" size="30" maxlength="120" value='<?php 
    $mensualiteres=(!empty($mensualite))? $mensualiteres=$mensualite:0; echo $mensualiteres ?>' > <br>

    <p>Tableau de remboursements (d'amortissements) du prêt</p>

   <?php
   if(isset($financier)){
    $machaine =  $financier->genererTableau(); 
    echo $machaine;
}
    ?>
    
</form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>