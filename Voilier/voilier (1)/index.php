
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require "connexion.php";

  
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"])){

 
    $maconnexion = maConnection::getInstance();
    $sql = "SELECT * FROM utilisateur WHERE mail_user = ?";


    $stmt = $maconnexion->prepare($sql);
    $stmt->execute(array($_POST["email"]));


    $ligne = $stmt->fetch();
    //var_dump($ligne);

    session_start();

        if($stmt->rowCount() != 0){
            if(password_verify($_POST["mdp"], $ligne[4])== true){
            $_SESSION["nom_ut"] = $ligne[1];
            $_SESSION["prenom_ut"] = $ligne[2];
            header("Location: liste.php");
            }
            else{
                echo "Mot de passe ou Login incorrecte";
            }


        } else{
            echo "Mot de passe ou Login incorrecte";
        }
}else{
    echo "Veuillez remplir tous les champs";
}



?>   

<a href="liste.php">retour</a>
 
 
 

<form action="index.php" method="POST" enctype="multipart/form-data">

<h1>ACCES MEMBRES</h1>

<label for="email"  id="email">Email</label>

<br>

<input type="email" name="email" id="email" >

<br><br>

<label for="mdp"  id="mdp">Mot de passe</label>

<br>

<input type="password" name="mdp" id="mdp">

<br><br>

<input type="submit" id="valider" name="valider" value="Valider">

</form>



   
   








</body>
</html>