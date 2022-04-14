let madate = new Date();
let mm = madate.getMonth() +1;
let dd = madate.getDate();
let yyyy = madate.getFullYear()

if ( dd < 10) {
    dd = '0' + dd;
}

if (mm < 10) {
    mm = '0' + mm;
}

let chaineDate =""+ dd + "/" + mm +"/"+ yyyy;
var btnmadate = document.getElementById("btndate");
btnmadate.addEventListener("click", function(){document.getElementById("lbldate").value = chaineDate;})

let monheure = new Date();
let hrs = monheure.getHours();
let min = monheure.getMinutes();
let sec = monheure.getSeconds();

if (hrs < 10) {
    hrs = '0' + hrs;
}

if (min < 10) {
    min = '0' + min;
}

if (sec < 10){
    sec = '0' + sec;
}

let chaineheure = ""+ hrs + ":" + min + ":" + sec;
var btnmonheure = document.getElementById("btnheure");
btnmonheure.addEventListener("click", function(){document.getElementById("lblheure").value = chaineheure;})