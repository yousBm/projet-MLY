//=====================================================================mouvement=====>
function move(pX, pY) {
    var move = true;
    body=document.getElementsByTagName("body")[0];
    if(body.id=="map1")
    {
        var player = document.getElementById("playerMap1"); // joueur
    }
    else if (body.id=="map2")
    {
        var player = document.getElementById("playerMap2"); // joueur
    }
    var stylePlayer = window.getComputedStyle(player, null); // css du joueur
    var pT = parseInt(stylePlayer.top); // joueur position X
    var pL = parseInt(stylePlayer.left); // joueur position Y
    var pW = parseInt(stylePlayer.width); // joueur largeur
    var pH = parseInt(stylePlayer.height); // joueur hauteur

    var allObstacles = document.querySelectorAll(".obstacle"); // on liste tous les obstacles
    allObstacles.forEach(function (unObstacle) {
        var styleObstacle = window.getComputedStyle(unObstacle, null); // css de l'obstacle
        var oT = parseInt(styleObstacle.top); // obstacle position X
        var oL = parseInt(styleObstacle.left); // obstacle position Y
        var oW = parseInt(styleObstacle.width); //obstacle largeur
        var oH = parseInt(styleObstacle.height); // obstacle hauteur
        var color = styleObstacle.backgroundColor; // couleur de l'obstacle
        var id=unObstacle.id;

        move = move && collision(oT, oL, oW, oH, pT + pY, pL + pX, pW, pH, color,id);
    });

    if (move) {
            player.style.top = pT + pY + "px";
            player.style.left = pL + pX + "px";  
    }
}
//=====================================================================collision=====>
function collision(oT, oL, oW, oH, pT, pL, pW, pH, color,id) {
    if (pL < oL + oW && pL + pW > oL && pT < oT + oH && pT + pH > oT) {
        switch (color) {
            case "rgb(0, 0, 0)":
                // si on touche un mur
                break;
            case "rgb(0, 0, 255)":
                // si on touche un monstre
                degat();
                coeurs=document.getElementsByClassName("coeur");
                coeurASupprimer=coeurs.length-1;
                coeur = document.getElementsByClassName("coeur")[coeurASupprimer];
                coeur.setAttribute("class","invisibleVie  viePerso");
                invisibleVie=document.getElementsByClassName("invisibleVie")[0];
                img=invisibleVie.getElementsByTagName("img")[0];
                invisibleVie.removeChild(img);
                invisiblesVies=document.getElementsByClassName("invisibleVie");
                if (invisiblesVies.length==6){document.location.href="index.php?action=gameover";} 
                break;
        }
        switch (id) {
            case "piece1":
                piece1=document.getElementById("piece1");
                piece1.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece2":
                piece2=document.getElementById("piece2");
                piece2.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece3":
                piece3=document.getElementById("piece3");
                piece3.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece4":
                piece4=document.getElementById("piece4");
                piece4.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece5":
                piece5=document.getElementById("piece5");
                piece5.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece6":
                piece6=document.getElementById("piece6");
                piece6.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece7":
                piece7=document.getElementById("piece7");
                piece7.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "piece8":
                piece8=document.getElementById("piece8");
                piece8.setAttribute("class","invisible");
                nombrePiece=document.getElementById("nombrePiece").innerHTML;
                nombrePiece=parseInt(nombrePiece)+1;
                document.getElementById("nombrePiece").innerHTML=nombrePiece;
            break;
            case "key1":
                key1=document.getElementById("key1");
                key1.setAttribute("class","invisible");
                keyMenu=document.getElementById("keyMenu");
                keyMenu.innerHTML="<img class='keyDansMenu' src='Images/decor/key.png' alt=''>";
                porte1=document.getElementById("porte1Ferme");
                porte1.setAttribute("id","porte1Ouverte");
            break;
            case "key2":
                key2=document.getElementById("key2");
                key2.setAttribute("class","invisible");
                keyMenu=document.getElementById("keyMenu");
                keyMenu.innerHTML="<img class='keyDansMenu' src='Images/decor/key.png' alt=''>";
                porte2=document.getElementById("porte2Ferme");
                porte2.setAttribute("id","porte2Ouverte");
            break;
            case "porte1Ferme":
                alert("il me faut une clé!");
                // si on touche l'arrivée
            break;    
            case "porte1Ouverte":
                // si on touche l'arrivée
                document.location.href="index.php?action=map2";
            break; 
            case "porte2Ferme":
                alert("il me faut une clé!");
                // si on touche l'arrivée
            break;    
            case "porte2Ouverte":
                // si on touche l'arrivée
                document.location.href="index.php?action=map3";
            break; 
        }
        return false;
    }
    return true;
}
//===================================================================deplacement=====>
document.addEventListener('keydown', function (event) {
    var speed = 5; // vitesse de déplacement
    var event = event || window.event, // pour la compatibilite avec tous les navigateurs
        keyCode = event.keyCode;
    switch (keyCode) {
        case 37: // gauche(100)
            move(-speed, 0);
            document.getElementById("gauche").style.left="-0.4vw";
            document.getElementById("droite").style.left="-0.4vw";
            document.getElementById("gauche").style.top="0.25vw";
            document.getElementById("droite").style.top="0.25vw";
            break;
        case 38: // haut(104)
            move(0, -speed);
            document.getElementById("gauche").style.left="0";
            document.getElementById("droite").style.left="0";
            document.getElementById("gauche").style.top="0";
            document.getElementById("droite").style.top="0";
            break;
        case 39: // droite(102)
            move(speed, 0);
            document.getElementById("gauche").style.left="0.4vw";
            document.getElementById("droite").style.left="0.4vw";
            document.getElementById("gauche").style.top="0.25vw";
            document.getElementById("droite").style.top="0.25vw";
            break;
        case 40: // bas(98)
            move(0, speed)
            document.getElementById("gauche").style.left="0";
            document.getElementById("droite").style.left="0";
            document.getElementById("gauche").style.top="0.4vw";
            document.getElementById("droite").style.top="0.4vw";
            break;       
}
});
//==============================================gestion du deplacement après degats=====>
function degat()
{
    var speed2 = 20; // vitesse de déplacement
    var event = event || window.event, // pour la compatibilite avec tous les navigateurs
    keyCode = event.keyCode;
    switch (keyCode) {
        case 37: // gauche(100)
            move(speed2, 0);
            break;
        case 38: // haut(104)
            move(0, speed2);
            break;
        case 39: // droite(102)
            move(-speed2, 0);
            break;
            case 40: // bas(98)
            move(0, -speed2)
            break;
                    }
}
//==================================================mouve Horizontal=====>
function moveHorizontal()
{
    body=document.getElementsByTagName("body")[0];
    switch(body.id){
        case "map1":
            blue=document.getElementsByClassName("blue");
            blue0=blue[0]
            var styleBlue0 = window.getComputedStyle(blue0, null);
            var pE = parseInt(styleBlue0.left);

            break;
        case "map2":
            blue=document.getElementsByClassName("blue");
            break;
    }
}
//==================================================================fonction time======>

var sec = 0; // on définit le compteur de seconde initial

// ===> Compte le nombre de secondes depuis le début de la partie
function startTimer() {
    document.getElementById('time').innerHTML = "Temps joué : " + sec + " sec";
    sec++;
}
// il faut l'arreter par rapport au point de vie ou la fin de la partie 
timer = setInterval(startTimer, 1000); // au moment du début de la parti 
// clearInterval(timer); // on arrête le timer
//========================================================================>
body=document.getElementsByTagName("body")[0];
if(body.id=="map1")
{
    var player = document.getElementById("playerMap1"); // joueur
}
else if (body.id=="map2")
{
    var player = document.getElementById("playerMap2"); // joueur
}
nomPerso=document.getElementsByClassName("nomPerso")[0].innerHTML;
switch (nomPerso)
{
    case "Joe l'édenté":
        player.setAttribute("class","persoChercheurDor")
        break;
    case "Prince moustache":
        player.setAttribute("class","persoPrinceMoustache")
        break;
    case "Totor le rouquin":
        player.setAttribute("class","persoLeRouquin")
        break;
    case "Jack le zombie":
        player.setAttribute("class","persoZombie")
        break;
}
