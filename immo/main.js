//body header
let divNavWrap = document.createElement('div');
divNavWrap.setAttribute('id', 'navbar-wrapper');

let divContainer = document.createElement('div');
divContainer.setAttribute('class', 'container');

let navBarInverse = document.createElement('div');
navBarInverse.setAttribute('class', 'navbar navbar-inverse');

let navHeader = document.createElement('div');
navHeader.setAttribute('class', 'navbar-header');

let btnToggleNavBar = document.createElement('button');
btnToggleNavBar.setAttribute('class', 'navbar-toggle collapsed');
btnToggleNavBar.setAttribute('data-toggle', 'collapse');
btnToggleNavBar.setAttribute('data-target', '#collapse-1');

document.body.appendChild(divNavWrap);
document.body.appendChild(divContainer);
document.body.appendChild(navBarInverse);
document.body.appendChild(navHeader);
document.body.appendChild(btnToggleNavBar);




let divFormulaire = document.createElement("div");
divFormulaire.setAttribute("id", "myForm");
let divForm = document.querySelector("myForm");
let myFormContact = document.createElement("form");

let civil = document.createElement("select");
let civilOpt = document.createElement("option");

let fName = document.createElement("input");
let lName = document.createElement("input");
let adress = document.createElement("input")
let telInput = document.createElement("input");
let emailInput = document.createElement("input");
let objMsg = document.createElement("input");
let txtArea = document.createElement("textarea");
let btnSub = document.createElement("button");

btnSub.setAttribute("value", "Envoi");

document.body.appendChild(divFormulaire);
document.body.appendChild(divForm);
document.body.appendChild(myFormContact);
document.body.appendChild(civil);
document.body.appendChild(civilOpt);
document.body.appendChild(fName);
document.body.appendChild(lName);
document.body.appendChild(adress);
document.body.appendChild(telInput);
document.body.appendChild(emailInput);
document.body.appendChild(objMsg);
document.body.appendChild(txtArea);
document.body.appendChild(btnSub);

const todos = [
    {
        "id":1,
        "titre": "Achat ventes en toute confiance",
        "accroche":"Entreprise ou particulier, confier nous votre bien, nous vous accompagnons dans la vente de votre bien immobilier."
    },
    {
        "id":2,
        "titre": "Une Aventure Humaine",
        "accroche":"Rejoignez le rÃ©seau de nos AdhÃ©rents PropriÃ©taires !"
    },
    {
        "id":3,
        "titre": "Consultez nos Offres de logements neufs et anciens!",
        "accroche":"De nombreuses offres à saisir dans le neuf et l'ancien, villas de charme, maisons individuelles appartements, residences."
    },
    {
        "id" : 4,
        "titre" : "Construire son projet immobilier",
        "accroche" : "Vous n'avez pas d'idée sur votre projet immobilier? Vous hésitez entre plusieurs possibilités ? Vous avez un projet, mais vous n'êtes pas sÃ»r qu'il soit rÃ©alisable ?"
    },
    {
        "id" : 5,
        "titre" : "Préarer sa construction ",
        "accroche" : "Un tremplin, des financements pour réussir son projet immobilier "
    },
    {
        "id" : 6,
        "titre" : "Se former",
        "accroche" : "Se former à nos métiers de l'immobilier "
    },
    {
        "id" : 7,
        "titre" : "Développer votre investissement, votre patrimoine!",
        "accroche" : "Conseil en investissement locatif,courtage..."
    },
    {
        "id" : 8,
        "titre" : "Notre MÃ©tier c'est la gestion immobiliÃ¨re en Alsace",
        "accroche" : "Nos solutions de gestions locative syndic permettent d'assurer la continuité de votre activité locative à court, moyen mais aussi désormais à long terme."
    },
    {
        "id" : 9,
        "titre" : "Ma maison et moi",
        "accroche" : "Pour accélérer votre recherche de logement, achat ou location créer votre compte immoduchateau"
    },
    {
        "id" : 10,
        "titre" : "Révéler vos talents",
        "accroche" : "Solutions de gestion de patrimoine adaptée à votre budget"
    }
]

