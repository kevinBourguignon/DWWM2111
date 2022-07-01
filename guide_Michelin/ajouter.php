<?php

// var_dump($_GET);
try {
    $objetPdo = new PDO("mysql:host=localhost;dbname=restos", "root", "");
} catch (PDOException $e) {
    
    die('Erreur : '.$e->getMessage());
}


    if (isset($_GET['nom']) && isset($_GET['adresse']) && isset($_GET['prix']) && isset($_GET['commentaire']) && isset($_GET['note']) && isset($_GET['visite']) ) {

                $pdoStat=$objetPdo->prepare("INSERT INTO restaurant VALUES( ID,:nom, :adresse, :prix, :commentaire, :note, :visite)");

                $pdoStat->bindValue(':nom',  $_GET['nom'], PDO::PARAM_STR);
                $pdoStat->bindValue(':adresse',  $_GET['adresse'], PDO::PARAM_STR);
                $pdoStat->bindValue(':prix',  $_GET['prix'], PDO::PARAM_INT);
                $pdoStat->bindValue(':commentaire',  $_GET['commentaire'], PDO::PARAM_STR);
                $pdoStat->bindValue(':note',  $_GET['note'], PDO::PARAM_INT);
                $pdoStat->bindValue(':visite',  $_GET['visite'], PDO::PARAM_STR);
                $pdoStat->execute();
                
            header("Location: index1.php");
}







 



?>


