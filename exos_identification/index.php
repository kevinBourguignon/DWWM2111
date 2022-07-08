<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto-authentification</title>
</head>
<body>
   
        <fieldset>
    <legend>login agence location voilier</legend>
    <form action='index.php' method='GET' enctype='multipart/form-data'>

<label for='login'>Nom d'utilisateur</label>
<input type='text' name='login' id='login'><br>

<label for='mdp' >Mot de passe</label>
<input type='password' name='mdp' id='mdp'><br>

<input type='submit' id='btn_ok' name='btn_ok' value='OK'>

</form>
</fieldset>
   <?php

        session_start();
        
        $mdp = "Castafiore";
        $chaine = password_hash($mdp, PASSWORD_BCRYPT);

        $tab = [
            "admin"=>password_hash("Cdi1234", PASSWORD_BCRYPT),
            "Bianca"=>$chaine
        ];


        

        if(isset($_GET["btn_ok"])){
            if(!empty($_GET["login"]) && !empty($_GET["mdp"])){
                $trouve = false;

                foreach ($tab as $key => $value) {
                    if($key == $_GET["login"] && password_verify($_GET["mdp"], $value)){
                        $trouve = true;
                        $_SESSION["login"] = $_GET["login"];
                            header("Location: info.php ");
                    }
                     
                }
                if($trouve == false){
                    echo " Error de login ou mdp";
                }
            }else{
                echo " Veuillez remplir tous les champs ! ";
            }
          
        }
  
    ?>
    
    
</body>
</html>