<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier le form</title>
</head>
<body>
    <form action="ajouter.php" method="GET" id="forl2">

        

        <label for="nom" id="nom1" >Nom</label>
        <input type="text" id="nom" name="nom" >
        <br>

        <label for="adresse" id="adresse1">Adresse</label>
        <input type="text" id="adresse" name="adresse" >
        <br>

        <label for="prix" id="prix1">Prix</label>
        <input type="number" id="prix" name="prix" >
        <br>

        <label for="commentaire" id="commentaire1">Commentaire</label>
        <input type="text" id="commentaire" name="commentaire" >
        <br>

        <label for="note" id="note1">Note</label>
        <input type="text" id="note" name="note" >
        <br>

        <label for="visite" id="visite1">Visite</label>
        <input type="date" id="visite" name="visite" >
        <br>

        <input type="submit" id="valider" name="enregistre" value="Enregistrer">

    </form>

</body>
</html>