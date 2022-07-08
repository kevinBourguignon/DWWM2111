function validationOk(){
    let nom = document.querySelector("#nom").value;
    nom = nom.trim();
    let prenom = document.querySelector("#prenom").value;
    prenom = prenom.trim();
    let email = document.querySelector("#email").value;
    email = email.trim();
    let mdp = document.querySelector("#mdp").value;
    mdp = mdp.trim();
    let verifmdp = document.querySelector("#verif").value;
    verifmdp = verifmdp.trim();
    let age = document.querySelector("#age").value;
    age = age.trim();
    let veriform = false;

    if(nom!="" && prenom!="" && email!="" && mdp!="" && verifmdp!="" && age!="" > 0){

        veriform = true;
    }
    else{
        let monform = document.querySelector("#form1")
        let maDiv = document.createElement("div");
        maDiv.setAttribute("id", "summary");
        maDiv.innerText = " Veuillez remplir tous les champs ! ";

        monform.appendChild(maDiv);
        veriform = false;
    }
    return veriform;
}

function verifSend(){

    let email = /^[a-z]+[a-z0-9_.-]*[@][a-z0-9_.-]{1,1}[.][a-z]{2,4}$/;

    if(regexmail.test(email)){
        
    }
}

let monbutton = document.getElementById("valider");
monbutton.addEventListener("click", function(){
   validationOk();
})