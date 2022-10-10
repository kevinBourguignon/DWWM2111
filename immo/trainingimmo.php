<?php

echo '<script>
let bgc = document.createElement("div");
bgc.setAttribute("id", "myDiv");
let list1 = document.createElement("form");
list1.setAttribute("method", "");
list1.setAttribute("action", "");
list1.setAttribute("id", "monFormulaire");
list1.setAttribute("method", "monFormulaire");
let sel1 = document.createElement("select");
let opt1 = document.createElement("option");
sel1.setAttribute("name", "locality-dropdown");
sel1.setAttribute("id", "locality-dropdown");
let example_array = {
    ValueChoice: "---Choix du langage---",
    ValueJS: "JavaScript",
    ValuePHP: "PHP",
    ValueAS: "Action Script"
};
let mySelect = document.getElementById("language");
for (let index in example_array.length) {
    mySelect.options[mySelect.options.length] = new Option(example_array[index], index);
}
// sel1.options[0].value = "---Choix du langage---";
// sel1.options[1].value = "JavaScript";
// sel1.options[2].value = "PHP";
// sel1.options[3].value = "Action Script";
//opt1.text = "---Choix du langage---";
//sel1.options.add(opt1.txt, 0);
// sel1.options[1].text = "JavaScript";
// sel1.options[2].text = "PHP";
// sel1.options[3].text = "Action Script";
document.body.style.display = "grid";
document.body.style.justifyContent = "center";
document.body.style.color = "rgb(0,128,128";
document.body.style.backgroundColor = "rgb(224, 255, 255)";
bgc.style.display = "grid";
bgc.style.justifyContent = "center";
bgc.style.justifySelf = "center";
bgc.style.color = "beige";
bgc.style.width = "calc(65vw - 10%)";
bgc.style.backgroundColor = "rgba(0,128,128,0.8)";
bgc.style.padding = "1.8rem";
bgc.style.borderRadius = "5px";
bgc.boxShadow = "-4px 27px 32px -3px rgba(0,0,0,0.4)";
let myParag = document.createElement("p");
myParag.style.fontSize = "1.3rem";
let tabP = document.createElement("p");
document.body.appendChild(bgc);
bgc.appendChild(myParag);
bgc.appendChild(tabP);
bgc.appendChild(sel1);
bgc.appendChild(opt1);
//xml httpRequest
let dropdown = document.getElementById("locality-dropdown");
dropdown.length = 0;
let defaultOption = document.createElement("option");
defaultOption.text = "Choose State/Province";
dropdown.add(defaultOption);
dropdown.selectedIndex = 0;
const url = "https://api.myjson.com/bins/7xq2x";
const request = new XMLHttpRequest();
request.open("GET", url, true);
request.onload = function () {
    if (request.status === 200) {
        const data = JSON.parse(request.responseText);
        let option;
        for (let i = 0; i < data.length; i++) {
            option = document.createElement("option");
            option.text = data[i].name;
            option.value = data[i].abbreviation;
            dropdown.add(option);
        }
    } else {
        alert("Problème avec le traitement de la requête.");
    }
};
request.onerror = function () {
    console.error(`An error occurred fetching the JSON from ${url}`);
};
request.send(null);
myParag.innerHTML = "<?php for ($i = 0; $i < 2; $i++): ?><p>Do something in HTML with&nbsp;<?php echo $i;?><?phpendfor; ?></p>";
console.log(myParag);
//tabP.innerHTML = "<?php echo "";?>";
</script>
';
?>
