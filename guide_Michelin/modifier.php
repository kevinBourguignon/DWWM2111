<?php

//ouverture d'une connexion à la bdd restos

$objetPDO =new PDO('mysql:host=localhost;dbname=restos', 'root', '');



//préparation de la requête

$pdoStat = $objetPDO->prepare('UPDATE restaurant set Nom=:nom, Adresse=:adresse, Prix=:prix, Commentaire=:commentaire, 
Note=:note, Visite=:visite WHERE id=:num');




//liaison du paramètre nommé

$pdoStat->bindParam(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$pdoStat->bindParam(':prix', $_POST['prix'], PDO::PARAM_INT);
$pdoStat->bindParam(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
$pdoStat->bindParam(':note', $_POST['note'], PDO::PARAM_INT);
$pdoStat->bindParam(':visite', $_POST['visite'], PDO::PARAM_STR);

//executer la requête

 $pdoStat->execute();

header("Location: index1.php");

// if($executeIsOk==true){
//     $message = 'Le changement à bien été pris en compte';
// }
// else{
//     $message = 'Echec de la mise a jour';
// }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Résultat de la modification </h1>

<p><?= $message ?></p>

</body>
</html> -->