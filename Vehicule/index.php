<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="post" id="form1">

    <label for="poids">Poids du véhicule</label>

    <input type="number" name="kilo" id="kilo" value='<?php
    if(!empty($_POST["kilo"])) 
       { echo $_POST["kilo"];} ?>'> <br>

    <label for="moteur">Vitesse maximum du moteur</label>

    <input type="text" name="vitesse" id="vitesse" value='<?php
    if(!empty($_POST["vitesse"]))
    {echo $_POST["vitesse"];} ?>'> <br>

    



</form>






</body>
</html>