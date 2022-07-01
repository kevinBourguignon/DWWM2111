<?php

//ouverture d'une connexion à la bdd restos

$objetPDO =new PDO('mysql:host=localhost;dbname=restos', 'root', '');


//préparation de la requête

$pdoStat = $objetPDO->prepare('DELETE FROM restaurant WHERE id=:num');                   


$pdoStat->bindParam(':num', $_GET['suppLigne'], PDO::PARAM_INT );

// $executeIsOk = 
$pdoStat->execute();

header("Location: index1.php");

// if($executeIsOk==true){
//     $message= 'Le contact a bien était supprimé';

// }else {
//     $message= 'echec de la suppression du restaurant';
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
 <h1>Suppression </h1>

 <p><?= $message ?></p>

 </body>
 </html>  -->




