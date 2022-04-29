const rouge = document.querySelector("#rouge");
const vert = document.querySelector("#vert");
const bleu = document.querySelector("#bleu");


function getColor(){
    let chainecouleur = "#" +rouge.value + vert.value + bleu.value;
    document.body.setAttribute("style", "background-color:"+chainecouleur);

}


function verichamps(_champs){
    let testbool=false
    let chaine= _champs.value.toUpperCase();
    let regex=/^[0-9A-F]{2}$/;
    if(chaine.match(regex)){
        testbool=true;
    }else{
        _champs.value="";
        _champs.focus();
    }
    return testbool;
}

document.querySelector("#rouge").addEventListener("blur", function(){

  
   if(verichamps(rouge)){
       getColor();

   }
})

document.querySelector("#vert").addEventListener("blur", function(){

  
    if(verichamps(vert)){
        getColor();
 
    }
 })

 document.querySelector("#bleu").addEventListener("blur", function(){

  
    if(verichamps(bleu)){
        getColor();
 
    }
 })

let btnrouge = document.querySelector("#btnrouge");

btnrouge.addEventListener("click", function(){

    rouge.value = "ff";
    vert.value = "00";
    bleu.value = "00";
    getColor();
})

let btnvert = document.querySelector("#btnvert");

btnvert.addEventListener("click", function(){

    rouge.value = "00";
    vert.value = "ff";
    bleu.value = "00";
    getColor();
})

let btnbleu = document.querySelector("#btnbleu");

btnbleu.addEventListener("click", function(){

    rouge.value = "00";
    vert.value = "00";
    bleu.value = "ff";
    getColor();
})

