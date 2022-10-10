<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body> 
<?php echo '<script>
let divNavWrap = document.createElement("div");
divNavWrap.setAttribute("id", "navbar-wrapper");

let divContainer = document.createElement("div");
divContainer.setAttribute("class", "container");

let navBarInverse = document.createElement("div");
navBarInverse.setAttribute("class", "navbar navbar-inverse");

let navHeader = document.createElement("div");
navHeader.setAttribute("class", "navbar-header");

let btnToggleNavBar = document.createElement("button");
btnToggleNavBar.setAttribute("class", "navbar-toggle collapsed");
btnToggleNavBar.setAttribute("data-toggle", "collapse");
btnToggleNavBar.setAttribute("data-target", "#collapse-1");

document.body.appendChild(divNavWrap);
document.body.appendChild(divContainer);
document.body.appendChild(navBarInverse);
document.body.appendChild(navHeader);
document.body.appendChild(btnToggleNavBar);

</script>'?>
    
            </button>
            <a class="navbar-brand" href="#"><div id="logo"></div></a>
            </div>
    <div class="navbar-collapse collapse" id="collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#about">Agence</a></li>
        <li><a href="#contact">Services</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Achats/ventes<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Appartements</a></li>
              <li><a href="#">Maisons</a></li>
              <li><a href="#">locaux professionnels</a></li>
              <li class="divider"></li>
              <li class="nav-header">Spécial investisseur</li>
              <li><a href="#">Garages</a></li>
              <li><a href="#">Terrains</a></li>
            </ul>
              </li>
               <li><a href="#contact">Estimation</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Locations<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Appartements</a></li>
                  <li><a href="#">Maisons</a></li>
                  <li><a href="#">locaux professionnels</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Spécial loueur</li>
                  <li><a href="#">Garages</a></li>
                  <li><a href="#">Terrains</a></li>
                </ul>
                  <li><a href="#contact">Estimation</a></li>
                </ul>
    </div><!--/.nav-collapse -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

</div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->