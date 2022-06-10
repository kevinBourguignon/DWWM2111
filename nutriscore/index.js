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

    creerCellTitre("NS", lignetitre);
    creerCellTitre("DEL", lignetitre);

    let monBody = montab.createTBody();
    monBody.setAttribute("id", "donnee");

    for (let i = 0; i < _data.length; i++) {
        
        let maligne = monBody.insertRow();
       maligne.setAttribute("class", "test");
        let monObjet = _data[i]; 
        
        for (const key in monObjet) {
           
            let macellule = maligne.insertCell();
            macellule.innerText = monObjet[key];
            maligne.appendChild(macellule);
       
 }
 
        let ns = document.createElement("td");
        ns.classList.add("nutriscore");
        ns.dataset.nutriscore =  nutriscore(monObjet.rating);
        ns.innerText = nutriscore(monObjet.rating);
        maligne.appendChild(ns);

        let suppr = document.createElement("label"); 
        suppr.innerText = "X"; 
        suppr.setAttribute("id", "delete")
        // suppr.setAttribute("style", "color: #ff0000; background-color: #000"); 
        maligne.appendChild(suppr);
    }

//  let del = document.querySelector("#delete" + monObjet.id);
//         del.addEventListener("click", function(){
//         let deleteLigne = document.getElementsByName("test"+ monObjet.id);
//         deleteLigne.remove();
//     })
    
let footer = montab.createTFoot();
    footer.setAttribute("id", "footer");
                let lastLigne = footer.insertRow();
                for (let i = 0; i <= 5; i++) {
                    if (i == 1) {
                    let total = _data.length;
                    let maCell = lastLigne.insertCell();
                    maCell.innerText = total + " éléments";
                    } 
                    else if (i == 2){
                    let somme = 0;    
                    
                    for (let j = 0; j < _data.length; j++) {
                        
                        somme += _data[j].calories;

                    }
                    somme = Math.round((somme*100)/_data.length)/100;

                    let cellMoyenne = lastLigne.insertCell();
                    cellMoyenne.innerHTML = "Moyenne <br/> calories <br/> " + somme ;
                    }
                    else{
                    let cellVide = lastLigne.insertCell();
                    cellVide.innerText = " ";
                    }
                }
}


function nutriscore(_rating) {
    
    let nutri = "";
    if (_rating > 80){
        nutri = "A"
      }  
    else if(_rating > 70 && _rating < 80){
        nutri = "B";
        }
    else if (_rating > 55 && _rating <= 70){
        nutri = "C";
        }
    else if (_rating > 35 && _rating <= 55){
        nutri = "D";
}
    else if (_rating <= 35){
        nutri = "E";
        }
    else{
        nutri = "error"
    }
         return nutri;
    } 
   






fetch("cereals.json")
.then(response => response.json())
.then(response => ligneTable(response))
.catch(error => alert("Erreur ; " + error));

let filtrer = document.querySelector("#place").value;
let objrecherche = monObjet.find(item => item.NS == filtrer);

document.querySelector("#fieldset2").innerText += objrecherche.NS;