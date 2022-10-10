<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

require '../vendor/autoload.php';

use App\Models\Car;
use App\Models\CarRepository;
use App\Models\DbConnect;
use App\Models\CarManager;
use App\Models\Delete;

$dbconnect = new DbConnect();
$carRepo = new CarRepository($dbconnect);
$carRep = new CarManager($dbconnect);
$cardelete = new Delete($dbconnect);

// $u = new Car();
// $u->id = 1;
// $u->name = "auris";
// $u->release = "2021-08-12";
// $carRep->update($u);

// $c = new Car();
// $c->id = 4;
// $c->name = "Ferrari";
// $c->release = "2020-05-02";
// $carRepo->insert($c);

$d = new Car();
$d->id = 0;

sleep(1);

 $delete = $cardelete->supprimer($d);
 $resultat = $carRep->selectAll();
 $result = $carRepo->selectAll();
 
 if (isset($_GET["detail"]) && !empty($_GET["detail"]) ) {
    $id = $_GET["detail"];
    (object)$car=$carRepo->select($id);
     echo 'la voiture numero'.$id.' a pour nom:'.$car->name.' et pour date de sortie:'.$car->release;
    }
    else{
        echo '<pre>' . var_export($resultat, true);
        }
 echo $delete;
echo '<br>';

echo '<form method="GET" action="index.php" id="form1">';
echo '<label for="detail">Voir le détail d\'un véhicule:</label>';
echo '<select name="detail" id="detail"> <option value=""  >Choisir véhicule</option>';
foreach ($result as $car) { 
echo '<option value="'.$car->id.'"> voiture numero:'.$car->id.'</option>';
}
echo '</select>';
echo '</form>';


?>
<script>
  document.querySelector("#detail").addEventListener("change",function(){
  document.querySelector("#form1").submit();
  });
</script>

