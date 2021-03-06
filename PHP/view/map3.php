<?php $nomDuPerso = $_POST["choixPerso"];
$perso=PersonnageManager::getList();
$choixNiv = $_POST["choixNiveau"];
?>

<body id="map3">

    <div class="contenu">
        <div class="terrainMap3">
            <div id="playerMap3" class="persoPrinceMoustache">
                <div class="hautPerso">
                    <div class="orbite">
                        <div class="oeil">
                            <div id="gauche" class="pupille"></div>
                        </div>
                    </div>
                    <div class="orbite">
                        <div class="oeil">
                            <div id="droite" class="pupille"></div>
                        </div>
                    </div>
                </div>
                <div class="basPerso"></div>
            </div>
        </div>
        <div class="obstacles">
            <div class="obstacle color line01">&nbsp;</div>
            <div class="obstacle color line02">&nbsp;</div>
            <div class="obstacle color line03">&nbsp;</div>
            <div class="obstacle color line04">&nbsp;</div>
            <div class="obstacle color line38">&nbsp;</div>
            <div class="obstacle color line39">&nbsp;</div>
            <div class="obstacle color line40">&nbsp;</div>
            <div class="obstacle color line41">&nbsp;</div>
            <div class="obstacle color line42">&nbsp;</div>
            <div class="obstacle color line43">&nbsp;</div>
            <div class="obstacle color line44">&nbsp;</div>
            <div class="obstacle color line45">&nbsp;</div>
            <div class="obstacle color line46">&nbsp;</div>
            <div class="obstacle color line47">&nbsp;</div>
            <div class="obstacle color line48">&nbsp;</div>
            <div class="obstacle color line49">&nbsp;</div>
            <div class="obstacle color line50">&nbsp;</div>
            <div class="obstacle color line51">&nbsp;</div>
            <div class="obstacle color line52">&nbsp;</div>
            <div class="obstacle color line53">&nbsp;</div>
            <div class="obstacle color line54">&nbsp;</div>
            <div class="obstacle color line55">&nbsp;</div>
            <div class="obstacle color line56">&nbsp;</div>
            <div class="obstacle color line58">&nbsp;</div>
            <div class="obstacle color line59">&nbsp;</div>
            <div class="obstacle color line60">&nbsp;</div>
            <div class="obstacle color line61">&nbsp;</div>
            <div class="obstacle color line62">&nbsp;</div>
            <div class="obstacle color line63">&nbsp;</div>
            <div class="obstacle color line64">&nbsp;</div>
            <div class="obstacle color line65">&nbsp;</div>
            
            <div id="porte3Ferme" class="obstacle marron line57"><img src="../../Images/decor/porte.png" alt=""></div>
        </div>
        <div class="Ennemi">
            <div class="obstacle blue monstre15"><img class="monstre" src="../../Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre16"><img class="monstre" src="../../Images/decor/cyclope.png" alt="">
            </div>
            <div class="obstacle blue monstre17"><img class="monstre" src="../../Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre18"><img class="monstre" src="../../Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre19"><img class="monstre" src="../../Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre20"><img class="monstre" src="../../Images/decor/armureFantome.png" alt="">
            </div>
            <div class="obstacle blue monstre21"><img class="monstre" src="../../Images/decor/armureFantome.png" alt="">
            </div>
            <div class="obstacle blue monstre22"><img class="monstre" src="../../Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre23"><img class="monstre" src="../../Images/decor/cyclope.png" alt="">
            </div>
            <div class="obstacle blue monstre24"><img class="monstre" src="../../Images/decor/cyclope.png" alt="">
            </div>
            
        </div>
        <div class="pieces">
            <div id="piece9" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece10" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece11" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece12" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece13" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece14" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece15" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="piece16" class="obstacle or piece"><img src="../../Images/decor/coin.png" alt=""></div>
            <div id="tresor" class="obstacle or tresor"><img src="../../Images/decor/tresor.png" alt=""></div>
        </div>
        <div class="deco">
        <div id="mur41" class="mur"><img src="../../Images/decor/murDemiAbiméMousse.png" alt=""></div>
        <div id="mur42" class="mur"><img src="../../Images/decor/murQuartAbimé.png" alt=""></div>
        <div id="mur43" class="mur"><img src="../../Images/decor/murDemiAbimé.png" alt=""></div>
        <div id="mur44" class="mur"><img src="../../Images/decor/murAbiméMousse.png" alt=""></div>
        <div id="mur45" class="mur"><img src="../../Images/decor/mur.png" alt=""></div>
        <div id="mur46" class="mur"><img src="../../Images/decor/murTierAbimé.png" alt=""></div>
        <div id="mur47" class="mur"><img src="../../Images/decor/mur.png" alt=""></div>
        <div id="mur48" class="mur"><img src="../../Images/decor/murDemiAbiméMousse.png" alt=""></div>
        <div id="mur49" class="mur"><img src="../../Images/decor/murDemiAbimé.png" alt=""></div>
        <div id="mur50" class="mur"><img src="../../Images/decor/murDemiAbiméMousse.png" alt=""></div>
        <div id="mur51" class="mur"><img src="../../Images/decor/murDemiAbimé.png" alt=""></div>
        <div id="mur52" class="mur"><img src="../../Images/decor/murQuartAbimé.png" alt=""></div>
        <div id="mur53" class="mur"><img src="../../Images/decor/murQuartAbimé.png" alt=""></div>
        <div id="mur54" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur55" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur56" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur57" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur58" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur59" class="mur"><img src="../../Images/decor/caisse.png" alt=""></div>
        <div id="mur60" class="mur"><img src="../../Images/decor/murDemiAbiméMousse.png" alt=""></div>
        <div id="mur61" class="mur"><img src="../../Images/decor/murDemiAbiméMousse.png" alt=""></div>
        <div id="mur62" class="mur obstacle"><img src="../../Images/decor/blockRouge.png" alt=""></div>
        <div id="mur63" class="mur obstacle"><img src="../../Images/decor/blockRouge.png" alt=""></div>
        <div id="mur64" class="mur"><img src="../../Images/decor/caisseInverse.png" alt=""></div>
    </div>
    <div id="key3" class="obstacle key"><img src="../../Images/decor/key.png" alt=""></div>
    <div id="" class="obstacle porte1"><img src="" alt="" srcset=""></div>
    <div class="menuJeu">
    <div class="nomPerso"><?php
                if($nomDuPerso == "perso1") {
                    echo $perso[0]->getNomPersonnage();
                } else if ($nomDuPerso == "perso2") {
                    echo $perso[1]->getNomPersonnage();
                } else if ($nomDuPerso == "perso3") {
                    echo $perso[2]->getNomPersonnage(); 
                } else {
                    echo $perso[3]->getNomPersonnage(); 
                }
           ?></div>
           <div class="vie"> <?php 
            if ($choixNiv == "Niveau1"){
                ?>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
            <?php } else if ($choixNiv == "Niveau2"){
                ?>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div>
            <?php } else if ($choixNiv == "Niveau3"){
                ?> 
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div>   
                <div class="invisibleVie viePerso"><img src="" alt=""></div> 
            <?php } else {
                ?>  
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div> 
                <div class="invisibleVie viePerso"><img src="" alt=""></div>   
                <div class="invisibleVie viePerso"><img src="" alt=""></div>   
            <?php }  ?>
            </div>
            <div class="menuOr">
                <div class="pieceMenu">
                    <div class="piece"><img src="Images/decor/coin.png" alt=""></div>
                </div>
                <div id="nombrePiece" class="nombrePiece">0</div>
            </div>
            <div class="keyMenu" id="keyMenu"></div>
            <div class="time" id="time">0</div>
        </div>
    </div>
    <script src="JS/jeu.js"></script>
    </body>