const rouge = document.querySelector("#rouge");
const vert = document.querySelector("#vert");
const bleu = document.querySelector("#bleu");


function getColor(){
    let chainecouleur = "#" +rouge.value + vert.value + bleu.value;
    document.body.setAttribute("style", "background-color:"+chainecouleur);

}
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


