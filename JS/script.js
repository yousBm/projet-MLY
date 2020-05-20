if (document.getElementById("choixPerso")){
var select = document.getElementById("choixPerso");
select.addEventListener("change", changeImg)}

function changeImg(e){
var idSelected = e.target.selectedIndex;
var option = document.getElementById('perso'+idSelected)
document.getElementById("img").innerHTML="<img src='"+option.getAttribute("image")+"' alt=''>";
document.getElementById("description").innerHTML=option.getAttribute("description");
}

/************ Connexion ************/
// on recup l'oeil pour lui mettre un evenement
var oeil=document.getElementsByClassName("fa fa-eye");
for(i=0;i<oeil.length;i++){
oeil[i].addEventListener("click",showPassword);
}

function showPassword(e){
  console.log(e);
    if (document.getElementById(e.id).type=='text'){
        document.getElementById(e.id).type='password';
    }
    else{
        document.getElementById(div).type='text';
    }  
}
