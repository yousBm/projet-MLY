//=====================================================================mouvement=====>
function move(pX, pY) {
    var move = true;
    body = document.getElementsByTagName("body")[0];
    if (body.id == "map1") {
        var player = document.getElementById("playerMap1"); // joueur
    }
    else if (body.id == "map2") {
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
        var id = unObstacle.id;

        move = move && collision(oT, oL, oW, oH, pT + pY, pL + pX, pW, pH, color, id);
    });

    if (move) {
        player.style.top = pT + pY + "px";
        player.style.left = pL + pX + "px";
    }
}
//=====================================================================collision=====>
function collision(oT, oL, oW, oH, pT, pL, pW, pH, color, id) {
    if (pL < oL + oW && pL + pW > oL && pT < oT + oH && pT + pH > oT) {
        switch (color) {
            case "rgb(0, 0, 0)":
                // si on touche un mur
                break;
            case "rgb(0, 0, 255)":
                // si on touche un monstre
                degat();
                coeurs = document.getElementsByClassName("coeur");
                coeurASupprimer = coeurs.length - 1;
                coeur = document.getElementsByClassName("coeur")[coeurASupprimer];
                coeur.setAttribute("class", "invisibleVie  viePerso");
                invisibleVie = document.getElementsByClassName("invisibleVie")[0];
                img = invisibleVie.getElementsByTagName("img")[0];
                invisibleVie.removeChild(img);
                invisiblesVies = document.getElementsByClassName("invisibleVie");
                if (invisiblesVies.length == 4) { document.location.href = "index.php?action=gameover"; }
                break;
        }
        switch (id) {
            case "piece1":
                piece1 = document.getElementById("piece1");
                piece1.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece2":
                piece2 = document.getElementById("piece2");
                piece2.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece3":
                piece3 = document.getElementById("piece3");
                piece3.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece4":
                piece4 = document.getElementById("piece4");
                piece4.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece5":
                piece5 = document.getElementById("piece5");
                piece5.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece6":
                piece6 = document.getElementById("piece6");
                piece6.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece7":
                piece7 = document.getElementById("piece7");
                piece7.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "piece8":
                piece8 = document.getElementById("piece8");
                piece8.setAttribute("class", "invisible");
                nombrePiece = document.getElementById("nombrePiece").innerHTML;
                nombrePiece = parseInt(nombrePiece) + 1;
                document.getElementById("nombrePiece").innerHTML = nombrePiece;
                break;
            case "key1":
                key1 = document.getElementById("key1");
                key1.setAttribute("class", "invisible");
                keyMenu = document.getElementById("keyMenu");
                keyMenu.innerHTML = "<img class='keyDansMenu' src='Images/decor/key.png' alt=''>";
                porte1 = document.getElementById("porte1Ferme");
                porte1.setAttribute("id", "porte1Ouverte");
                break;
            case "key2":
                key2 = document.getElementById("key2");
                key2.setAttribute("class", "invisible");
                keyMenu = document.getElementById("keyMenu");
                keyMenu.innerHTML = "<img class='keyDansMenu' src='Images/decor/key.png' alt=''>";
                porte2 = document.getElementById("porte2Ferme");
                porte2.setAttribute("id", "porte2Ouverte");
                break;
            case "porte1Ferme":
                alert("il me faut une clé!");
                // si on touche l'arrivée
                break;
            case "porte1Ouverte":
                // si on touche l'arrivée
                document.location.href = "index.php?action=map2";
                break;
            case "porte2Ferme":
                alert("il me faut une clé!");
                // si on touche l'arrivée
                break;
            case "porte2Ouverte":
                // si on touche l'arrivée
                document.location.href = "index.php?action=map3";
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
            document.getElementById("gauche").style.left = "-0.4vw";
            document.getElementById("droite").style.left = "-0.4vw";
            document.getElementById("gauche").style.top = "0.25vw";
            document.getElementById("droite").style.top = "0.25vw";
            break;
        case 38: // haut(104)
            move(0, -speed);
            document.getElementById("gauche").style.left = "0";
            document.getElementById("droite").style.left = "0";
            document.getElementById("gauche").style.top = "0";
            document.getElementById("droite").style.top = "0";
            break;
        case 39: // droite(102)
            move(speed, 0);
            document.getElementById("gauche").style.left = "0.4vw";
            document.getElementById("droite").style.left = "0.4vw";
            document.getElementById("gauche").style.top = "0.25vw";
            document.getElementById("droite").style.top = "0.25vw";
            break;
        case 40: // bas(98)
            move(0, speed)
            document.getElementById("gauche").style.left = "0";
            document.getElementById("droite").style.left = "0";
            document.getElementById("gauche").style.top = "0.4vw";
            document.getElementById("droite").style.top = "0.4vw";
            break;
    }
});
//==============================================gestion du deplacement après degats=====>
function degat() {
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
function moveHorizontal() {
    body = document.getElementsByTagName("body")[0];
    switch (body.id) {
        case "map1":
            //============info=joueur==============================>
            var player = document.getElementById("playerMap1");
            var stylePlayer = window.getComputedStyle(player, null); // css du joueur
            var pT = parseInt(stylePlayer.top); // joueur position X
            var pL = parseInt(stylePlayer.left); // joueur position Y
            var pW = parseInt(stylePlayer.width); // joueur largeur
            var pH = parseInt(stylePlayer.height); // joueur hauteur
            // =============info=monstre=============================>
            blue = document.getElementsByClassName("blue");
            // =============info=monstre1============================>
            blue0 = blue[0]
            var styleBlue0 = window.getComputedStyle(blue0, null);
            var eT0 = parseInt(styleBlue0.top); 
            var eL0 = parseInt(styleBlue0.left);
            var eW0 = parseInt(styleBlue0.width);
            var eH0 = parseInt(styleBlue0.height); 
            // =============info=monstre3============================>
            blue2 = blue[2]
            var styleBlue2 = window.getComputedStyle(blue2, null);
            var eT2 = parseInt(styleBlue2.top); 
            var eL2 = parseInt(styleBlue2.left);
            var eW2 = parseInt(styleBlue2.width);
            var eH2 = parseInt(styleBlue2.height); 
            // =============info=monstre4============================>
            blue3 = blue[3]
            var styleBlue3 = window.getComputedStyle(blue3, null);
            var eT3 = parseInt(styleBlue3.top); 
            var eL3 = parseInt(styleBlue3.left);
            var eW3 = parseInt(styleBlue3.width);
            var eH3 = parseInt(styleBlue3.height); 
            // =============info=monstre6============================>
            blue5 = blue[5]
            var styleBlue5 = window.getComputedStyle(blue5, null);
            var eT5 = parseInt(styleBlue5.top); 
            var eL5 = parseInt(styleBlue5.left);
            var eW5 = parseInt(styleBlue5.width);
            var eH5 = parseInt(styleBlue5.height); 
            //=============info=line01==============================>
            line01 = document.getElementsByClassName("line01")[0];
            var stylemur01 = window.getComputedStyle(line01, null);
            var m01L = parseInt(stylemur01.left);
            var m01W = parseInt(stylemur01.width);             
            //=============info=line03==============================>
            line03 = document.getElementsByClassName("line03")[0];
            var stylemur03 = window.getComputedStyle(line03, null);
            var m03L = parseInt(stylemur03.left);
            var m03W = parseInt(stylemur03.width);   
            //=============info=line06==============================>
            line06 = document.getElementsByClassName("line06")[0];
            var stylemur06 = window.getComputedStyle(line06, null);
            var m06L = parseInt(stylemur06.left);
            var m06W = parseInt(stylemur06.width);
            //=============info=line08==============================>
            line08 = document.getElementsByClassName("line08")[0];
            var stylemur08 = window.getComputedStyle(line08, null);
            var m08L = parseInt(stylemur08.left);
            var m08W = parseInt(stylemur08.width);
            //========================monstre1======================>
            var moveHorizontal = true;
            moveHorizontal = moveHorizontal && collisionEnnemi(eT0, eL0, eW0, eH0, pT, pL, pW, pH);
            if (a != 0) {
                if (moveHorizontal===true && eL0 > parseInt(m06L + m06W)) {
                    blue0.style.left = eL0 - 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue0.style.left = eL0 + 5 + "px";
                    player.style.left = pL - 10 + "px";
                    a = 0;
                }
                else {
                    a = 0;
                }
            }
            else if (a == 0) {
                if (moveHorizontal===true && parseInt(eL0 + eW0) < m03L) {
                    blue0.style.left = eL0 + 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue0.style.left = eL0 - 5 + "px";
                    player.style.left = pL + 10 + "px";
                    a = 1;
                }
                else  {
                    a = 1;
                }
            }
            //==============monstre3====================>
            moveHorizontal = moveHorizontal && collisionEnnemi(eT2, eL2, eW2, eH2, pT, pL, pW, pH);
            if (b != 0) {
                if (moveHorizontal===true && eL2 > parseInt(m08L + m08W)) {
                    blue2.style.left = eL2 - 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue2.style.left = eL2 + 5 + "px";
                    player.style.left = pL - 10 + "px";
                    b = 0;
                }
                else {
                    b = 0
                }
            }
            else if (b == 0) {
                if (moveHorizontal===true && parseInt(eL2 + eW2) < m03L) {
                    blue2.style.left = eL2 + 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue2.style.left = eL2 - 5 + "px";
                    player.style.left = pL + 10 + "px";
                    b = 1;
                }
                else  {
                    b = 1;
                }
            }
            //==============monstre4====================>
            moveHorizontal = moveHorizontal && collisionEnnemi(eT3, eL3, eW3, eH3, pT, pL, pW, pH);
            if (c != 0) {
                if (moveHorizontal===true && eL3 > parseInt(m01L + m01W)) {
                    blue3.style.left = eL3 - 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue3.style.left = eL3 + 5 + "px";
                    player.style.left = pL - 10 + "px";
                    c = 0;
                }
                else {
                    c = 0
                }
            }
            else if (c == 0) {
                if (moveHorizontal===true && parseInt(eL3 + eW3) < m08L) {
                    blue3.style.left = eL3 + 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue3.style.left = eL3 - 5 + "px";
                    player.style.left = pL + 10 + "px";
                    c = 1;
                }
                else  {
                    c = 1;
                }
            }
            //==============monstre6====================>
            moveHorizontal = moveHorizontal && collisionEnnemi(eT5, eL5, eW5, eH5, pT, pL, pW, pH);
            if (d != 0) {
                if (moveHorizontal===true && eL5 > parseInt(m06L + m06W)) {
                    blue5.style.left = eL5 - 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue5.style.left = eL5 + 5 + "px";
                    player.style.left = pL - 10 + "px";
                    d = 0;
                }
                else {
                    d = 0
                }
            }
            else if (d == 0) {
                if (moveHorizontal===true && parseInt(eL5 + eW5) < m08L) {
                    blue5.style.left = eL5 + 5 + "px";
                }
                else if (moveHorizontal===false)
                {
                    blue5.style.left = eL5 - 5 + "px";
                    player.style.left = pL + 10 + "px";
                    d = 1;
                }
                else  {
                    d = 1;
                }
            }
            break;
        case "map2":
            blue = document.getElementsByClassName("blue");
            break;
    }
}

a = 1;
b = 1;
c = 1;
d = 1;
setInterval(moveHorizontal, 30);
//==================================================mouve Horizontal=====>
function moveVertical() {
    body = document.getElementsByTagName("body")[0];
    switch (body.id) {
        case "map1":
            blue = document.getElementsByClassName("blue");
            //============info=joueur==============================>
            var player = document.getElementById("playerMap1");
            var stylePlayer = window.getComputedStyle(player, null); // css du joueur
            var pT = parseInt(stylePlayer.top); // joueur position X
            var pL = parseInt(stylePlayer.left); // joueur position Y
            var pW = parseInt(stylePlayer.width); // joueur largeur
            var pH = parseInt(stylePlayer.height); // joueur hauteur
            // =============info=monstre2============================>
            blue1 = blue[1]
            var styleBlue1 = window.getComputedStyle(blue1, null);
            var eT1 = parseInt(styleBlue1.top);
            var eH1 = parseInt(styleBlue1.height);
            var eL1 = parseInt(styleBlue1.left);
            var eW1 = parseInt(styleBlue1.width);
            // =============info=monstre5============================>
            blue4 = blue[4]
            var styleBlue4 = window.getComputedStyle(blue4, null);
            var eT4 = parseInt(styleBlue4.top);
            var eH4 = parseInt(styleBlue4.height);
            var eL4 = parseInt(styleBlue4.left);
            var eW4 = parseInt(styleBlue4.width);
            //=============info=line04==============================>
            line04 = document.getElementsByClassName("line04")[0];
            var stylemur04 = window.getComputedStyle(line04, null);
            var m04T = parseInt(stylemur04.top);
            var m04H = parseInt(stylemur04.height);             
            //=============info=line07==============================>
            line07 = document.getElementsByClassName("line07")[0];
            var stylemur07 = window.getComputedStyle(line07, null);
            var m07T = parseInt(stylemur07.top);
            var m07H = parseInt(stylemur07.height);   
            //=============info=line14==============================>
            line14 = document.getElementsByClassName("line14")[0];
            var stylemur14 = window.getComputedStyle(line14, null);
            var m14T = parseInt(stylemur14.top);
            var m14H = parseInt(stylemur14.height);
            //=============info=line15==============================>
            line15 = document.getElementsByClassName("line15")[0];
            var stylemur15 = window.getComputedStyle(line15, null);
            var m15T = parseInt(stylemur15.top);
            var m15H = parseInt(stylemur15.height);
            //========================monstre2======================>
            var moveVertical = true;
            moveVertical = moveVertical && collisionEnnemi(eT1, eL1, eW1, eH1, pT, pL, pW, pH);
            if (e != 0) {
                if (moveVertical===true && parseInt(eT1+eH1) < m07T) {
                    blue1.style.top = eT1 + 5 + "px";
                }
                else if (moveVertical===false)
                {
                    blue1.style.top = eT1 - 5 + "px";
                    player.style.top = pT + 10 + "px";
                    e = 0;
                }
                else {
                    e = 0
                }
            }
            else if (e == 0) {
                if (moveVertical===true && eT1 > parseInt(m04T+m04H)) {
                    blue1.style.top = eT1 - 5 + "px";
                }
                else if (moveVertical===false)
                {
                    blue1.style.top = eT1 + 5 + "px";
                    player.style.top = pT - 10 + "px";
                    e = 1;
                }
                else  {
                    e = 1;
                }
            }
             //========================monstre5======================>
             moveVertical = moveVertical && collisionEnnemi(eT4, eL4, eW4, eH4, pT, pL, pW, pH);
            if (f != 0) {
                if (moveVertical===true && parseInt(eT4+eH4) < m15T) {
                    blue4.style.top = eT4 + 5 + "px";
                }
                else if (moveVertical===false)
                {
                    blue4.style.top = eT4 - 5 + "px";
                    player.style.top = pT + 10 + "px";
                    f = 0;
                }
                else {
                    f = 0
                }
            }
            else if (f == 0) {
                if (moveVertical===true && eT4 > parseInt(m14T+m14H)) {
                    blue4.style.top = eT4 - 5 + "px";
                }
                else if (moveVertical===false)
                {
                    blue4.style.top = eT4 + 5 + "px";
                    player.style.top = pT - 10 + "px";
                    f = 1;
                }
                else  {
                    f = 1;
                }
            }
            break;
        case "map2":
            blue = document.getElementsByClassName("blue");
            break;
    }
}

e = 1;
f = 1;
setInterval(moveVertical, 50);
//==================================================mouve Horizontal=====>
function collisionEnnemi(eT, eL, eW, eH, pT, pL, pW, pH) {
    if ( eL< pL + pW && eL + eW > pL && eT < pT + pH && eT + eH > pT)
    {
        coeurs = document.getElementsByClassName("coeur");
        coeurASupprimer = coeurs.length - 1;
        coeur = document.getElementsByClassName("coeur")[coeurASupprimer];
        coeur.setAttribute("class", "invisibleVie  viePerso");
        invisibleVie = document.getElementsByClassName("invisibleVie")[0];
        img = invisibleVie.getElementsByTagName("img")[0];
        invisibleVie.removeChild(img);
        invisiblesVies = document.getElementsByClassName("invisibleVie");
        if (invisiblesVies.length == 4) { document.location.href = "index.php?action=gameover"; }
        return false;
    }
    return true;
}
//==================================================================fonction Time======>

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
body = document.getElementsByTagName("body")[0];
if (body.id == "map1") {
    var player = document.getElementById("playerMap1"); // joueur
}
else if (body.id == "map2") {
    var player = document.getElementById("playerMap2"); // joueur
}
nomPerso = document.getElementsByClassName("nomPerso")[0].innerHTML;
switch (nomPerso) {
    case "joe l'édenté":
        player.setAttribute("class", "persoChercheurDor")
        break;
    case "prince moustache":
        player.setAttribute("class", "persoPrinceMoustache")
        break;
    case "totor le rouquin":
        player.setAttribute("class", "persoLeRouquin")
        break;
    case "jack le zombie":
        player.setAttribute("class", "persoZombie")
        break;
}

//*********************************************************************** Gestion des cookies ********************************************************************/
// Méthode qui permet de créer ou modifier un cookie

function createCookie(name, value, days) {
    // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    }
    else var expires = "";
    //le cookie doit contenir  clé=valeur;expires=temps;path=nomDomaine
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

// Méthode qui permet de lire la valeur d’un cookie 

function readCookie(name) {
    // on récupère tous les cookies du site en une fois, séparé par ; 
    // on range dans un tableau chaque cookie
    var listeCookies = document.cookie.split('; ');
    for (let i = 0; i < listeCookies.length; i++) {
        // pour chaque cookie, on sépare en tableau la clé et la valeur
        var unCookie = listeCookies[i].split("=");
        // si la clé correspond au cookie cherché, on renvoi la valeur
        if (unCookie[0] == name) return unCookie[1];
    }
    return null;
}

// Supprimer un cookie

function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
    createCookie(name, "", -1);
}

/************************************************************************** Enregistrer les points de vie, le temps et le nbres de pièces **************************************************************************/
