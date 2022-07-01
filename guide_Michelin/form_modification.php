<?php



$objetPdo = new PDO('mysql:host=localhost;dbname=restos', 'root', '');

$pdoStat = $objetPdo->prepare('SELECT * FROM restaurant WHERE ID = :num');

$pdoStat->bindValue(':num', $_GET['modifligne'], PDO::PARAM_INT);


$executeIsOk = $pdoStat->execute();


$contact = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier le form</title>
</head>
<body>
    <form action="modifier.php" method="POST" id="forl1">

        <input type="hidden" name="numContact" value="<?= $contact['ID'] ?>">
        <br>

        <label for="nom" id="nom1" >Nom</label>
        <input type="text" id="nom" name="nom" value="<?= $contact['Nom']; ?>">
        <br>

        <label for="adresse" id="adresse1">Adresse</label>
        <input type="text" id="adresse" name="adresse" value="<?= $contact['Adresse']; ?>">
        <br>

        <label for="prix" id="prix1">Prix</label>
        <input type="number" id="prix" name="prix" value="<?= $contact['Prix']; ?>">
        <br>

        <label for="commentaire" id="commentaire1">Commentaire</label>
        <input type="text" id="commentaire" name="commentaire" value="<?= $contact['Commentaire']; ?>">
        <br>

        <label for="note" id="note1">Note</label>
        <input type="text" id="note" name="note" value="<?= $contact['Note']; ?>">
        <br>

        <label for="visite" id="visite1">Visite</label>
        <input type="date" id="visite" name="visite" value="<?= $contact['Visite']; ?>">
        <br>

        <input type="submit" id="valider" name="validation" value="validation des modification">

    </form>

</body>
</html>