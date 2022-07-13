<!doctype html>
<html lang="Fr">
<head>
  <meta charset="utf-8">
  <title>Entrainement Centre de Readaptation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="screen" href="css/colblanc.css">
 
</head>	
<body>

        <div id="page">
         <div id="header">
          <img src="contenu/header.jpg" width="980" height="176" alt="colblanc entete"> 
        </div>

        <div id="menu">
          <ul>
           <li><a href="#">Entreprises</a>
            <ul>
             <li><a href="#" target="_self">Visualiser</a>
             </li>
             <li><a href="filtre.php">Rechercher</a>
             </li>
             <li><a href="#">Ajouter</a>
             </li>
           </ul>
         </li>
         <li><a href="#">Candidats</a>
          <ul>
           <li><a href="#" target="_self">Listing</a>
           </li>
           <li><a href="#">rechercher</a>
           </li>
           <li><a href="#">Ajouter</a>
           </li>
           <li><a href="#">CVthèque</a>
           </li>
         </ul></li>
         <li><a href="#">Projets</a>

         </li>
         <li><a href="#">offres</a>
          <ul>

            <li><a href="#">Par secteur</a>

            </li>

            <li><a href="#">Par entreprises</a>

            </li>
          </ul>
        </li>
      </ul>
    </div>


    <?php
  require "maConnection.php";

  

 $maconnexion = maConnection::getInstance();
 $sql = "SELECT * FROM  departements WHERE dep_actif";


 $stmt = $maconnexion->prepare($sql);
 $stmt->execute();

 
 //$tabRes = $stmt->fetchAll();
  //var_dump($tabRes);





  ?>

    <main>
      <section> 

      <form action="colblanc.php" method="POST" enctype="multipart/form-data">
     
      <h1 style=" text-align:center" id="titre">Résultat de la recherche:</h1>

       
        
          <label for="dept" id="ville">Choisisser votre département:</label>
            <select  id="dept" name="dept">

              <?php while ($ligne = $stmt->fetch()) {
                if ($ligne->id_dep == $_POST["dept"]) {
                  echo "<option value='".$ligne->id_dep."' selected='true'>" .$ligne->Name."</option>";
                }else{
                  echo "<option value='".$ligne->id_dep."' >" .$ligne->Name."</option>";
                }
              }?>

           
            </select><br>

            <label for="etablissement" id="etablissement">Selectionner votre type d'établissement</label><br>

            <input type="checkbox" name="monchoix[]"  value="TPE" id="tpe" <?php

                if(isset($_POST["monchoix"]) AND in_array ("TPE" , $_POST["monchoix"])) {echo "checked = 'checked'";}

                ?>>
            


            <label for="tpe">TPE</label>
            <br>

            <input type="checkbox" name="monchoix[]" value="PME" id="pme"<?php

              if(isset($_POST["monchoix"]) AND in_array ("PME" , $_POST["monchoix"])) {echo "checked = 'checked'";}

                ?>>
            <label for="pme">PME</label>
            <br>

            <input type="checkbox" name="monchoix[]" value="GE" id="grdENt"<?php

              if(isset($_POST["monchoix"]) AND in_array ("GE" , $_POST["monchoix"])) {echo "checked = 'checked'";}

              ?>>
            <label for="grdEnt">GRANDE ENTREPRISE</label>
            <br>

            <input type="checkbox" name="monchoix[]" value="TER" id="ter"<?php

              if(isset($_POST["monchoix"]) AND in_array ("TER" , $_POST["monchoix"])) {echo "checked = 'checked'";}

              ?>>
            <label for="ter">COLLECTIVITE TER</label>
            <br>

            <input type="checkbox" name="monchoix[]" value="ASSO" id="asso"<?php

               if(isset($_POST["monchoix"]) AND in_array ("ASSO" , $_POST["monchoix"])) {echo "checked = 'checked'";}

              ?>>
            <label for="asso">ASSOCIATION</label>
            <br>

            <input type="checkbox" name="monchoix[]" value="AUTRES" id="autre"<?php

              if(isset($_POST["monchoix"]) AND in_array ("AUTRES" , $_POST["monchoix"])) {echo "checked = 'checked'";}

             ?>>
            <label for="autre">AUTRES (secteur public)</label>
            <br>

            <input type="Submit" value="Valider" id="valider" name="valider">
            <br>

            <input type="print" value="imprimer" id="imprime" name="imprime">
<?php

if(isset($_POST["valider"]) && !empty($_POST["dept"])){

    $sql= "SELECT nom_etab, type_etab, adresse, cp, ville, Telephone FROM institutions WHERE depart = :departement ";
    $maconnexion = maConnection::getInstance();
    $stmt = $maconnexion->prepare($sql);
    $stmt->bindParam("departement", $_POST["dept"], PDO::PARAM_INT);
    $stmt->execute();
    // var_dump($stmt->fetchAll());
 }


 
      echo '<table class="table table-striped" ><thead>
          <thead>
          <tr><th>Nom Etab</th><th>Type Etab</th><th>Adresse</th><th>Code Postal</th><th>ville</th><th>Telephone</th>
          </tr>
          </thead><tbody>';
    $nbr=0;
      while ( $obj = $stmt->fetch())
       { $nbr++;
        echo "<tr>";
        foreach ($obj as $key => $value) {
       
          echo '<td>'.$value.'</td>';

        }

        echo "</tr>";
      }


    

      echo '<tbody></table>';
    
    

?>


          
          
        </form>
 
   <aside>

</aside>
 </section>
    </main>



<footer>
  Copyright
</footer> 
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>