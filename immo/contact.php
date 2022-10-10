<?php
require 'incs/header.php';
//require 'incs/main.php';
require 'incs/footer.php';
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