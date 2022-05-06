function addCell(_valeur, _ligne){
    var newCell = _ligne.insertCell();
    newCell.innerText = _valeur;

}


function genererCards(_data){

    for (let i = 0; i < _data.length; i++) {
     
      let maligne = document.querySelector("#game").insertRow(); 
      let ligne = _data[i];

      for (var key in ligne) {
        addCell(ligne[key], maligne);
         console.log(ligne[key]);
              
        }
    }
}
   
   let xhr = new XMLHttpRequest();
xhr.open("GET", "cards.json", true);
xhr.responseType = "json";
xhr.send();

xhr.onload = function(){
    if(xhr.status != 200){
        alert("Erreur" + xhr.status + " : " + xhr.statusText);
    }else{
        let data = xhr.response;
        console.log(data)
        genererCards(data)
    }
}

  function puissanceAttack() {
      let powerAttack = document.createElement("input");
      powerAttack.setAttribute("type","button");
      powerAttack.value = "La carte possédant le plus de puissance d'attaque";
      let body = document.querySelector("#body");
      body.appendChild(powerAttack);
        
  }puissanceAttack();

  function powerdefence(){
      let powerArmor = document.createElement("input");
      powerArmor.setAttribute("type", "button");
      powerArmor.value = "La carte possédant le plus d'armure";
      let body = document.querySelector("#body")
      body.appendChild(powerArmor);

  }powerdefence();

  function partieJouer(){
      let gamePlayed = document.createElement("input");
      gamePlayed.setAttribute("type", "button");
      gamePlayed.value ="La carte ayant le plus de parties jouées";
      let body = document.querySelector("#body");
      body.appendChild(gamePlayed);

  }partieJouer();

  function nbrVictoire(){
    let victory = document.createElement("input");
    victory.setAttribute("type", "button");
    victory.value ="La carte ayant le plus de parties jouées";
    let body = document.querySelector("#body");
    body.appendChild(victory);
  }


 





















