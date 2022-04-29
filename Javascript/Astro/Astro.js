let tabMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
let tabsign = ["Capricorne","Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire"];



function afficherMois(){
    let opt= document.createElement("option");
    opt.textContent="mois";
    opt.value="";
    document.querySelector("#mois").appendChild(opt);

    for (let i = 0; i < tabMois.length; i++) {
        let opt= document.createElement("option");
        opt.textContent=tabMois[i];
        opt.value= i+1;
        document.querySelector("#mois").appendChild(opt);
    }
    

}afficherMois();

function afficherjour(){
    let opt= document.createElement("option");
    opt.textContent="jour";
    opt.value="";
    document.querySelector("#jour").appendChild(opt);

    for (let i = 1; i <= 31; i++) {
        opt= document.createElement("option");
        opt.value=i;
        (i<10)?opt.textContent="0"+i:opt.textContent=i;
        document.querySelector("#jour").appendChild(opt);
    }
    

}afficherjour();

function afficherannee(){
    let opt= document.createElement("option");
    opt.textContent="annee";
    opt.value="";
    document.querySelector("#annee").appendChild(opt);

    for (let i = 1950; i <= 2050; i++) {
        opt= document.createElement("option");
        opt.value= i;
        opt.textContent=i
        document.querySelector("#annee").appendChild(opt);
        
    }
    

}afficherannee();

function valNum(_machaine){
    _machaine.toUpperCase();
    let sum = 0;
    for (let i = 0; i < _machaine.length ; i++) {
        sum += _machaine.charCodeAt(i)-64;
        
    }
    return sum;
}

function calculerSigne(){
    let numMois=  document.querySelector("#mois").value;
    let signe = tabsign[numMois-1];
    
    
    return signe
}

function formOk(){
    let nom= document.querySelector("#nom").value;
    nom=nom.trim();
    let prenom=document.querySelector("#prenom").value;
    prenom=prenom.trim();
    let mois=document.querySelector("#mois").value;
    let verifForm=false;
    if(nom!="" && prenom!="" && mois.length > 0){

        verifForm=true;
    } 
    return verifForm;
}

function calculerPseudo(){
    if(formOk() == true){
        let chainePseudo=calculerSigne()+(valNum(document.querySelector("#nom").value)+ valNum(document.querySelector("#prenom").value));
        document.querySelector("#pseudo").value= chainePseudo;
        document.querySelector("#validation").disabled= false;

    }
}

document.getElementById("prenom").addEventListener("blur", calculerPseudo);



function cookie(_moncookie, _contenucookie){
    let dateJour = new Date();
    let dateExpire= new Date(dateJour.getFullYear(), dateJour.getMonth(), dateJour.getDate()+1);
    let laDateExpire= dateExpire.toUTCString();

    document.cookie = _moncookie + "=" + _contenucookie + "; expires = " + laDateExpire + "; SameSite = lax";
}

document.querySelector("#validation").addEventListener('click', function(){
    cookie("nom", document.getElementById("nom").value);
    cookie("prenom", document.getElementById("prenom").value);
    let mois = document.querySelector("#mois").value;
    if(mois < 10){
        mois ="0" + document.querySelector("#mois").value;
    }
    let dateNaissance = document.getElementById("jour").value + "/" +mois+ "/" + document.getElementById("annee").value;
    cookie("dateAnniv", dateNaissance);
    cookie("pseudo", document.getElementById("pseudo").value);
    // let calculjour = document.getElementById("days");
    // cookie("calculDate", calculjour);
    document.querySelector("#form1").submit();
})




    
 






















