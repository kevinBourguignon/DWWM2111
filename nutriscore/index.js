let container = [];

function creerCellTitre(_contenu, _element){
        let maCell = document.createElement("th");
        let montitre = document.createElement("label");
        montitre.setAttribute("id", "lbl" +  _contenu);
        montitre.innerText = _contenu;
        maCell.appendChild(montitre);
        _element.appendChild(maCell);
    }



function ligneTable(_data){
    let montab = document.querySelector("#nutriment");

    let entete = montab.createTHead();
    entete.setAttribute("id", "titre");
    let lignetitre = entete.insertRow();
    
    for (var key in _data[0]) {
        creerCellTitre(key, lignetitre);
    }

    let monBody = montab.createTBody();
    monBody.setAttribute("id", "donnee");

    for (let i = 0; i < _data.length; i++) {
        
        let maligne = monBody.insertRow();
        maligne.setAttribute("id", "test");
        let monObjet = _data[i];
        for (const key in monObjet) {
           
            let macellule = maligne.insertCell();
            macellule.innerText = monObjet[key];
            maligne.appendChild(macellule);
        }

        
    }
    
}
// let footer = montab.createTFoot();
//     footer.setAttribute("id", "footer");
//                 let lastLigne = footer.insertRow();
//                 for (let i = 0; i <= 5; i++) {
//                     if (i == 0) {
//                     let total = _data.length;
//                     let maCell = lastLigne.insertCell();
//                     maCell.innerText = total;
//                     } else if (i == 3){
//                     let moyenne = 0;
//                     for (let j = 0; j < _data.length; j++) {
//                         moyenne /= _data[j].calories;
//                     }
//                     let cellMoyenne = lastLigne.insertCell();
//                     cellMoyenne.innerText = moyenne ;
//                     }else{
//                     let cellVide = lastLigne.insertCell();
//                     cellVide.innerText = " ";
//                     }
//                 }


function trieCroissant(){
    let sortie = container.sort((a, b) => a.id - b.id);
    console.log(sortie);
    return sortie;
}

// document.querySelector("#lbl").addEventListener("click", function(){
//     let reservoire = trieCroissant();
//     let montab = document.querySelector("#titre")
//     montab.remove();
//     ligneTable(reservoire);
// })




































fetch("cereals.json")
.then(response => response.json())
.then(response => ligneTable(response))
.catch(error => alert("Erreur ; " + error));