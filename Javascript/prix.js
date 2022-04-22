function calcul()
{
    document.querySelector("#prix1").value = Number(document.querySelector("#qte1").value) * Number(document.querySelector("#prixunitaire1").value);
    document.querySelector("#prix").value = Number(document.querySelector("#qte").value) * Number(document.querySelector("#prixunitaire").value);
    document.querySelector("#prixtotal").value = Number(document.querySelector("#prix1").value) * Number(document.querySelector("#prix").value);
}
//  document.querySelectorAll("input[type=number]").forEach(item =>{item.addEventListener("blur", calcul() ) } );
    document.querySelectorAll("input[type=text]").forEach(item =>{item.addEventListener("input", function(event) {calcul(); } ) } );

function control(_champtext){

let moncontrol = true;
let chaine = document.getElementById(_champtext).value;
if(isNaN(chaine) && chaine.length > 0){
    moncontrol = false;
    alert(chaine +" : n'est pas valide")
    document.getElementById(_champtext).value = "";
    document.getElementById(_champtext).focus()

}   

    return moncontrol
}

document.querySelector("#qte1").addEventListener("blur", function() {
    if(control("qte1") == true){
        calcul();
    }
})

//_______________________________________________________________________________________________________________________________________________________________


// let qte1 = 0;
// let prixU1 = 0;
// let prixArticles1 = 0;
// let prixT = 0
// let qte = 0
// let prixU = 0
// let prixArticles = 0


// let Qte = document.getElementById("qte")
// let prixunitaire = document.getElementById("prixunitaire")
// let prix = document.getElementById("prix")
// let Qte1 = document.getElementById("qte1") ;
// let prixunitaire1 = document.getElementById("prixunitaire1");
// let prix1 = document.getElementById("prix1");
// let prixtotal = document.getElementById("prixtotal")


// Qte1.addEventListener("input", function(event) {

//     qte1 = event.target.value;
//     //quantity1.value = qte1
//     event.target.value = qte1;
//     prixArticles1 = qte1 * prixU1;
//     prix1.value = prixArticles1;
//     prixT = prixArticles1 + prixArticles
//     prixtotal.value = prixT

// })

// prixunitaire1.addEventListener("input", function(event) {

//     prixU1 = event.target.value;
//     event.target.value = prixU1;
//     prixArticles1 = qte1 * prixU1;
//     prix1.value = prixArticles1;
//     prixT = prixArticles1 + prixArticles
//     prixtotal.value = prixT


// })


// Qte.addEventListener("input", function(event) {
//     qte = event.target.value;
//     event.target.value = qte;
//     prixArticles = qte * prixU;
//     prix.value = prixArticles;
//     prixT = prixArticles1 + prixArticles
//     prixtotal.value = prixT

// })

// prixunitaire.addEventListener("input", function(event) {

//     prixU = event.target.value;
//     event.target.value = prixU;
//     prixArticles = qte * prixU;
//     prix.value = prixArticles;
//     prixT = prixArticles1 + prixArticles
//     prixtotal.value = prixT

// })









