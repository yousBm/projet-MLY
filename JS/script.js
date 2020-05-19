var select = document.getElementById("choixPerso");
select.addEventListener("change", changeImg)

function changeImg(e){
var idSelected = e.target.selectedIndex;
var option = document.getElementById('perso'+idSelected)
document.getElementById("img").innerHTML="<img src='"+option.getAttribute("image")+"' alt=''>";
document.getElementById("description").innerHTML=option.getAttribute("description");
}

/****Connexion *****/
// on verifie 