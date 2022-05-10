function creerCellTitre(_contenu, _element){
    let maCell = document.createElement("th");
    maCell.innerText = _contenu;
    _element.appendChild(maCell);
}


function fillTable(_data){
    let montab = document.querySelector("#jeu");
    let entete = montab.createTHead();
    let lignetitre = entete.insertRow();

    for (var key in _data[0]) {
            // crer cellule et mette la clé dedans et la rattacher à la ligne
            creerCellTitre(key, lignetitre)
    } 

    let monBody = montab.createTBody();

    for (let i = 0; i < _data.length; i++) {

        let maligne = monBody.insertRow();
        let monObjet = _data[i];
        for (const key in monObjet) {
           
            let macellule = maligne.insertCell();
            macellule.innerText = monObjet[key];
            maligne.appendChild(macellule);
         }
        
    }

}

function rechercherMaxAttak(_data){

    let max =_data[0].attack;
    let numCarte = _data[0].id;
    console.log(max);

        for (let i = 0; i < _data.length; i++) {
            let monObj = _data[i];
            if(monObj.attack > max){

                max = monObj.attack;
                numCarte = monObj.id;
            }
         
        }

        return _data[numCarte-1];

}

function rechercherMaxDefense(_data){

    let max =_data[0].armor;
    let numCarte = _data[0].id;
    console.log(max);

        for (let i = 0; i < _data.length; i++) {
            let monObj = _data[i];
            if(monObj.armor > max){

                max = monObj.armor;
                numCarte = monObj.id;
            }
         
        }

        return _data[numCarte-1];

}

function rechercherMaxPartieJouer(_data){

    let max =_data[0].played;
    let numCarte = _data[0].id;
    console.log(max);

        for (let i = 0; i < _data.length; i++) {
            let monObj = _data[i];
            if(monObj.played > max){

                max = monObj.played;
                numCarte = monObj.id;
            }
         
        }

        return _data[numCarte-1];

}

function rechercherMaxVictoire(_data){

    let max =_data[0].victory;
    let numCarte = _data[0].id;
    console.log(max);

        for (let i = 0; i < _data.length; i++) {
            let monObj = _data[i];
            if(monObj.victory > max){

                max = monObj.victory;
                numCarte = monObj.id;
            }
         
        }

        return _data[numCarte-1];

}



const btnattaque = document.querySelector("#btn_attaque");
const btndefense = document.querySelector("#btn_defence");
const btnpartiejouer = document.querySelector("#btn_partie");
const btnvictoire = document.querySelector("#btn_victoire");
const btnreset = document.querySelector("#btn_reset");


   let xhr = new XMLHttpRequest();
xhr.open("GET", "cards.json", true);
xhr.responseType = "json";
xhr.send();

xhr.onload = function(){
    if(xhr.status != 200){
        alert("Erreur" + xhr.status + " : " + xhr.statusText);
    }else{
        let data = xhr.response;
        console.log(data);
        fillTable(data);
        //  console.log(rechercherMaxAttak(data));

        btnattaque.addEventListener('click', function(){
            let monObjet = rechercherMaxAttak(data);
    document.querySelector("#gauche1").innerText = "Attack : "+ monObjet.attack; 
    document.querySelector("#gauche2").innerText = "Defense : " + monObjet.armor;
    document.querySelector("#gauche").innerText = "Power : " +monObjet.power;
    document.querySelector("#titre").innerText = monObjet.name;
    document.querySelector("#bas").innerText = "Played : " +monObjet.played;
    document.querySelector("#droit").innerText = "Victories : " +monObjet.victory;
    
})  

    btndefense.addEventListener('click', function(){
        let monObjet = rechercherMaxDefense(data);
    document.querySelector("#gauche1").innerText = "Attack : "+ monObjet.attack; 
    document.querySelector("#gauche2").innerText = "Defense : " + monObjet.armor;
    document.querySelector("#gauche").innerText = "Power : " +monObjet.power;
    document.querySelector("#titre").innerText = monObjet.name;
    document.querySelector("#bas").innerText = "Played : " +monObjet.played;
    document.querySelector("#droit").innerText = "Victories : " +monObjet.victory;

})  

    btnpartiejouer.addEventListener('click', function(){
        let monObjet = rechercherMaxPartieJouer(data);
    document.querySelector("#gauche1").innerText = "Attack : "+ monObjet.attack; 
    document.querySelector("#gauche2").innerText = "Defense : " + monObjet.armor;
    document.querySelector("#gauche").innerText = "Power : " +monObjet.power;
    document.querySelector("#titre").innerText = monObjet.name;
    document.querySelector("#bas").innerText = "Played : " +monObjet.played;
    document.querySelector("#droit").innerText = "Victories : " +monObjet.victory;

})  

    btnvictoire.addEventListener('click', function(){
        let monObjet = rechercherMaxVictoire(data);
    document.querySelector("#gauche1").innerText = "Attack : "+ monObjet.attack; 
    document.querySelector("#gauche2").innerText = "Defense : " + monObjet.armor;
    document.querySelector("#gauche").innerText = "Power : " +monObjet.power;
    document.querySelector("#titre").innerText = monObjet.name;
    document.querySelector("#bas").innerText = "Played : " +monObjet.played;
    document.querySelector("#droit").innerText = "Victories : " +monObjet.victory;
    
})  

    btnreset.addEventListener('click', function(){

    document.querySelector("#gauche1").innerText = "Attack : 0"; 
    document.querySelector("#gauche2").innerText = "Defense : 0" ;
    document.querySelector("#gauche").innerText = "Power : 0" ;
    document.querySelector("#titre").innerText = "Character ";
    document.querySelector("#bas").innerText = "Played : 0" ;
    document.querySelector("#droit").innerText = "Victories : 0";
    })

   }
}

 

  
  
 
      
       
 
 



















// function addCell(_valeur, _ligne){
//     var newCell = _ligne.insertCell();
//     newCell.innerText = _valeur;

// }


// function genererCards(_data){

//     for (let i = 0; i < _data.length; i++) {
     
//       let maligne = document.querySelector("#game").insertRow(); 
//       let ligne = _data[i];

//       for (var key in ligne) {
//         addCell(ligne[key], maligne);
//          console.log(ligne[key]);
              
//         }
//     }
// }
   



 





















