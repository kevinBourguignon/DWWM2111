function getCookie(_name){

    let reponse = false;

    let tabCookie = document.cookie.split("; ");
    for (let i = 0; i < tabCookie.length; i++) {
        
        let tabParam = tabCookie[i].split("=");
        if(tabParam[0] == _name){
            reponse = tabParam[1];
        }
        
    }
return reponse;

}

if(getCookie("expéditeur") != false){

    let parent = document.querySelector(".parent");
    let enfant = document.querySelector(".enfant");
    enfant.remove();
    let expediteur = getCookie("expéditeur");
    
    let boiteMessage =document.createElement('div');
    boiteMessage.setAttribute("style", "color: grey; font-size:1.4em; font-family: Impact; text-align: center; width: 350%; margin-left: auto; margin-right: auto; ");
    boiteMessage.innerHTML = "Bonjour M (e) <u>" + expediteur + "</u> votre message nous a bien été envoyé(e). Nous vous contacterons dans les meilleurs délais.";
    parent.appendChild(boiteMessage);


}
const monNom = document.getElementById("nom");
const monTel = document.getElementById("phone");
const monMail = document.getElementById("email");

function verifySend(){
   
    let regex = /^[a-z]+(-[a-z]+)?$/i;
    verifBool = false;

    

if(monNom.value != "" && monTel.value != "" && monMail.value != "" && regex.test(monNom.value)){
    
    
    
    alert("formulaire bien rempli");

    let dateJour = new Date();
    let dateExpiration = new Date(dateJour.getFullYear(), dateJour.getMonth(), dateJour.getDate(), (dateJour.getHours()+3), dateJour.getMinutes(), dateJour.getSeconds(), dateJour.getMilliseconds());
    let expiration = dateExpiration.toUTCString();
        document.cookie = "expéditeur=" + monNom.value+ "; expires=" + expiration + "; SameSite = Strict"

    verifBool = true;
}
return verifBool;

}

let monBouton = document.getElementById("envoi");
monBouton.addEventListener("click", function(){
    if(verifySend()){

        document.getElementById("formContact").submit();
    }
    else{
        alert("Saisie non conforme");
    }
})



