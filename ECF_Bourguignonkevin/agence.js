function genererArticle(_data){
    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];

        if(i == 0){
            let monItem = document.createElement("article");
            monItem.setAttribute("class", "filmImage");
            let monItem1 = document.createElement("h3");
            monItem1.innerText = monObjet.trip_title;
            monItem.appendChild(monItem1);
            let monImg = document.createElement("img");
            monImg.setAttribute("src", "./images/voyages/id" + monObjet.trip_id+ ".jpg");
            monItem.appendChild(monImg);
            let montexte = document.createElement("p");
            montexte.innerText = monObjet.trip_description.substr(0,150);
            monItem.appendChild(montexte);

            let monbutton = document.createElement("input");
            monbutton.setAttribute("type", "button");
            monbutton.setAttribute("class", "btn_duplique");
            monbutton.setAttribute("id", "btn_film");
            monbutton.value = "Lire la suite";
            monItem.appendChild(monbutton);

            document.querySelector("#films").appendChild(monItem);

            
        }
        else{
            let monItem = document.createElement("article");
            monItem.setAttribute("class", "filmImage");
            let monItem1 = document.createElement("h3");
            monItem1.innerText = monObjet.trip_title;
            monItem.appendChild(monItem1);
            let monImg = document.createElement("img");
            monImg.setAttribute("src", "./images/voyages/id" + monObjet.trip_id+ ".jpg");
            monItem.appendChild(monImg);
            let montexte = document.createElement("p");
            montexte.innerText = monObjet.trip_description.substr(0,150);
            monItem.appendChild(montexte);

            let monbutton = document.createElement("input");
            monbutton.setAttribute("type", "button");
            monbutton.setAttribute("class", "btn_duplique");
            monbutton.setAttribute("id", "btn_film");
            monbutton.value = "Lire la suite";
            monItem.appendChild(monbutton);

            document.querySelector("#films").appendChild(monItem);
        }
  }
  
}
 



fetch("voyage.json")
.then(response => response.json())
.then(response => genererArticle(response))
.catch(error => alert("Erreur ; " + error));


