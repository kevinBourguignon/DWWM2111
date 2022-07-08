<?php
session_start();
if (!empty($_GET["suppr"])) {
    unset($_SESSION["login"]);
}
if(!empty($_SESSION["login"])){


// session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action='info.php' method='GET'>



        <input type='submit' value='Deconnexion' name='btn-deco'>
        <input type="hidden" name="suppr" id="suppr" value="suppression">


    </form>
<?php
    echo " Bonjour ".$_SESSION["login"]." vous êtes bien sur votre compte ";

   
    
    
    ?>

</body>

<?php
}else{
    header("Location: index.php");
}
?>
</html>

