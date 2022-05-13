function creerCellTitre(_contenu, _element){
    let maCell = document.createElement("th");
    maCell.innerText = _contenu;
    _element.appendChild(maCell);
}


function fillTable(_data){
    let montab = document.querySelector("#empl");

    let monBody = montab.createTBody();

    for (let i = 0; i < _data.length; i++) {

        let maligne = monBody.insertRow();
        let monObjet = _data[i];
     for (let i = 0; i < 5; i++) {
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
                let macellule4 = maligne.insertCell();
                let monSalaire = Math.round(monObjet.employee_salary)/12  + " € ";
                 macellule4.innerText = monSalaire.substring(0, 7);
                break;
            case 4:
                let macellule5 = maligne.insertCell();
                let machaine = monObjet.employee_hiredate;
                macellule5.innerText = machaine.substring(0, 4);
                break;
            default:
                break;
        }
  
     } 

    }

}   

function gererButton(){

    let macellule = maligne.insertCell();
    

}







fetch("employer.json")
.then(response => response.json())
.then(response => fillTable(response))
.catch(error => alert("Erreur ; " + error));






















