<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php
require("Mytable.php");

$monObjetTable = new MyTable("restaurant");


// var_dump($monObjetTable->recupererNomCol());

$afficherDonnee = $monObjetTable->recupererNomCol();
$recupererDonnee = $monObjetTable->readData();
echo "<table class='table table-dark table-striped'><thead>";

// var_dump($monObjetTable->recupDonnee());

echo "<tr>";

foreach($afficherDonnee as $value){
        echo "<th>".$value."</th>";
    }

    echo "<th>Modifier</th>";
    echo "<th>Supprimer</th>";

echo "</tr></thead>";

echo "<tbody>";


for ($i=0; $i < $monObjetTable->getStmt()->rowCount(); $i++) { 
   $ligne= $recupererDonnee[$i];
    echo "<tr>";

    foreach($ligne as $value){
       echo "<td>".$value."</td>";
        
}
    echo "<td><form action='form_modification.php' method='GET' enc-type='text/plain'><input  type='submit' id='modifie".$recupererDonnee[$i][0]."' name='modif".$recupererDonnee[$i][0]."'
     value='modifier'><input type='hidden' name='modifligne' value='".$recupererDonnee[$i][0]."'></form></td>";
    
     echo "<td><form action='supprimer.php' method='GET' enc-type='text/plain'><input type='submit' id='supp".$recupererDonnee[$i][0]."'name='supprimerLigne".$recupererDonnee[$i][0]."'
     value='supprimer'><input type='hidden' name='suppLigne' value='".$recupererDonnee[$i][0]."'></form></td>";

     
    echo "</tr>";
}

//Select by id, nouvelle requete, 

echo "</tbody><tfoot></tfoot></table>"
    
?>
<form action="formulaire.php" method="GET">
<input type="submit" name="ajoutLigne" value="ajouter">
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>