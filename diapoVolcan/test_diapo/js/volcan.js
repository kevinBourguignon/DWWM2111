function CreerImage(monObjet, maDiv)
{
    let monImg = document.createElement("img");
    monImg.setAttribute("class", "monimg");
    monImg.setAttribute("src", "../photos_volcans/" +monObjet.id + ".jpg" );
    monImg.setAttribute("alt", monObjet.titre);
    maDiv.appendChild(monImg);
}

function creerTitre(monObjet, maDiv1){
    let montitre = document.createElement("h5");
    montitre.innerText = monObjet.titre;
    maDiv1.appendChild(montitre);
}

function gerePhoto(_data){
for(let i = 0; i < _data.length; i++){
    let monObjet =_data[i];

    if(i == 0){
    let maDiv = document.createElement("div");
    maDiv.setAttribute("class", "carousel-item active"); 
    document.querySelector(".carousel-inner").appendChild(maDiv);
    
    CreerImage(monObjet, maDiv);
    

    let maDiv1 = document.createElement("div");
    maDiv1.setAttribute("class", "carousel-caption d-none d-md-block");
    maDiv.appendChild(maDiv1);

    creerTitre(monObjet, maDiv1);

    let maPhrase = document.createElement("p");
    maPhrase.innerText = monObjet.alt;
    maDiv1.appendChild(maPhrase);
    
        }
        else
        {
            let maDiv = document.createElement("div");
            maDiv.setAttribute("class", "carousel-item");
            document.querySelector(".carousel-inner").appendChild(maDiv);
    
            CreerImage(monObjet, maDiv);
           

            let maDiv1 = document.createElement("div");
            maDiv1.setAttribute("class", "carousel-caption d-none d-md-block");
            maDiv.appendChild(maDiv1);

             creerTitre(monObjet, maDiv1);

            let maPhrase = document.createElement("p");
            maPhrase.innerText = monObjet.alt;
            maDiv1.appendChild(maPhrase);
        }

    }


}

function chargerDiapo() {
            let min =document.getElementById("min").value;
            let max =document.getElementById("max").value;
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "js/traitement.php?min=" + min + "&max=" + max, true);
           
            xhr.send();
            xhr.onload = function() {
               
                if (xhr.status != 200) {
                    
                    alert("Erreur " + xhr.status + " : " + xhr.statusText);
                   
                } else {
                    let data = JSON.parse(xhr.responseText);
                 
                    gerePhoto(data);
                }
            };
        }
 document.getElementById("validation").addEventListener("click",chargerDiapo);
    




// fetch("volcan.json")
// .then(response => response.json())
// .then(response =>gerePhoto(response))
// .catch(error => alert("Erreur ; " + error));