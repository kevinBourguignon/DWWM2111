// function creerCellTitre(_contenu, _element){
//     let maCell = document.createElement("th");
//     maCell.innerText = _contenu;
//     _element.appendChild(maCell);
// }
let container = [];

function fillTable(_data){
    container = _data;
    let montab = document.querySelector("#empl");

    let monBody = montab.createTBody();
    monBody.setAttribute("id", "body");

    for (let i = 0; i < _data.length; i++) {

        let maligne = monBody.insertRow();
        
        let monObjet = _data[i];
        maligne.setAttribute("id", "ligne"+ monObjet.employee_id);
     for (let i = 0; i < 6; i++) {
        switch (i) {
            case 0:
               let macellule= maligne.insertCell();
              macellule.innerText =  monObjet.employee_id;
                break;
            case 1:
                let macellule1= maligne.insertCell();
                macellule1.innerText  =  monObjet.employee_firstname+ " " + monObjet.employee_lastname ;
                break;
            case 2:
                let macellule2= maligne.insertCell();
                let maChaine = monObjet.employee_firstname; 
                macellule2.innerText = (maChaine.substring(0, 1)).toLowerCase() + "."+ (monObjet.employee_lastname).toLowerCase()+ "@email.com";
                   break;
            case 3: 
                let macellule3 = maligne.insertCell();
                let monSalaire = Math.round(monObjet.employee_salary)/12  + " € ";
                 macellule3.innerText = monSalaire.substring(0, 7);
                break;
            case 4:
                let macellule4 = maligne.insertCell();
                let machaine = monObjet.employee_hiredate;
                macellule4.innerText = machaine.substring(0, 4);
                break;
            case 5: 
                let macellule5 = maligne.insertCell();
                let monButton = document.createElement("input");
                monButton.setAttribute("type", "button");
                monButton.setAttribute("class", "btn btn-primary");
                monButton.setAttribute("id", "btn_duplique" + monObjet.employee_id);
                monButton.value = "Duplicate";
                macellule5.appendChild(monButton);
                  
           
                
                let monBtn = document.createElement("input");
                monBtn.setAttribute("type", "button");
                monBtn.setAttribute("class", "btn btn-danger");
                monBtn.setAttribute("id", "btn_delete" + monObjet.employee_id);
                monBtn.value = "Delete";
                macellule5.appendChild(monBtn);
                break; 
                
               
                  
            default:
                break;
        }
  
     } 
                let monBtn = document.querySelector("#btn_delete"+ monObjet.employee_id);
                monBtn.addEventListener("click", function(){
                    let deleteLigne = document.querySelector("#ligne"+ monObjet.employee_id);
                    deleteLigne.remove();
               });

               let monButton = document.querySelector("#btn_duplique" + monObjet.employee_id);
               monButton.addEventListener("click", function(){
                   let duplicateLigne = document.querySelector("#ligne"+ monObjet.employee_id);
                   let clone = duplicateLigne.cloneNode(true);
                   monBody.appendChild(clone);
               })
    }
    let footer = montab.createTFoot();
    footer.setAttribute("id", "footer");
                let lastLigne = footer.insertRow();
                for (let i = 0; i <= 5; i++) {
                    if (i == 0) {
                    let total = _data.length;
                    let maCell = lastLigne.insertCell();
                    maCell.innerText = total;
                    } else if (i == 3){
                    let somme = 0;
                    for (let j = 0; j < _data.length; j++) {
                        somme += _data[j].employee_salary;
                    }
                    let cellSomme = lastLigne.insertCell();
                    cellSomme.innerText = somme + " €";
                    }else{
                    let cellVide = lastLigne.insertCell();
                    cellVide.innerText = " ";
                    }
                }
}
 
function trieCroissant() {
    let sortie = container.sort((a, b) => a.employee_salary - b.employee_salary);
    console.log(sortie);
    return sortie;
}
    
function trieDecroissant() {
    let sortie = container.sort((b, a) => b.employee_salary - a.employee_salary );
    console.log(sortie);
    return sortie;
}


document.querySelector("#trie").addEventListener("click", function(){
    let reservoire = trieCroissant();
    let montab = document.querySelector("#body");
    let montab1 = document.querySelector("#footer");
    montab.remove();
    montab1.remove();
    fillTable(reservoire);
})

document.querySelector("#trie").addEventListener("dblclick", function(){
    let reservoire = trieDecroissant();
    let montab = document.querySelector("#body");
    let montab1 = document.querySelector("#footer");
    montab.remove();
    montab1.remove();
    fillTable(reservoire);
})

fetch("employer.json")
.then(response => response.json())
.then(response => fillTable(response))
.catch(error => alert("Erreur ; " + error));

