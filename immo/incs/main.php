    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="myForm"></div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <div class="container marketing">
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="img/fond0.jpg">
          <h2>Achat ventes en toute confiance</h2>
          <p>Entreprise ou particulier, confier nous votre bien, nous vous accompagnons dans la vente de votre bien immobilier.</p>
          <p><a class="btn" href="#">View details&raquo;</a></p>
        </div>
        <div class="span4">
          <img class="img-circle" src="img/index.png">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details&raquo;</a></p>
        </div>
        <div class="span4">
          <img class="img-circle" src="img/index.png" >
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details&raquo;</a></p>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="featurette">
        <h2 class="featurette-heading">Achat ventes en toute confiance<span class="muted"></span></h2>
        <p class="lead">Entreprise ou particulier, confier nous votre bien, nous vous accompagnons dans la vente de votre bien immobilier.</p>
      </div>
      <hr class="featurette-divider">
      <div class="featurette">
        <img class="featurette-image pull-left" src="">
        <h2 class="featurette-heading">Une Aventure Humaine</h2>
        <p class="lead">Rejoignez le réeau de nos Adhérents Propriétaires !</p>
      </div>
      <hr class="featurette-divider">
      <div class="featurette">
        <h2 class="featurette-heading">Consultez nos Offres de logements neufs et anciens!<span class="muted"></span></h2>
        <p class="lead">De nombreuses offres Ã  saisir dans le neuf et l'ancien, villas de charme, maisons individuelles appartements, residences.</p>
      </div>
      <hr class="featurette-divider">
    </div>
    <div id="contact">
    <?php
    echo '
    <script> 
    let divFormulaire = document.createElement("div");
    divFormulaire.setAttribute("id", "myForm");
    let divForm = document.querySelector("myForm");
    let myFormContact = document.createElement("form");
    
    let civil = document.createElement("select");
    let civilOpt = document.createElement("option");
    
    let fName = document.createElement("input");
    let lName = document.createElement("input");
    let adress = document.createElement("input")
    let telInput = document.createElement("input");
    let emailInput = document.createElement("input");
    let objMsg = document.createElement("input");
    let txtArea = document.createElement("textarea");
    let btnSub = document.createElement("button");
    
    btnSub.setAttribute("value", "Envoi");
    
    document.appendChild(divFormulaire);
    document.appendChild(divForm);
    document.appendChild(myFormContact);
    document.appendChild(civil);
    document.appendChild(civilOpt);
    document.appendChild(fName);
    document.appendChild(lName);
    document.appendChild(adress);
    document.appendChild(telInput);
    document.appendChild(emailInput);
    document.appendChild(objMsg);
    document.appendChild(txtArea);
    document.appendChild(btnSub);
    </script>';
    ?>
    </div>