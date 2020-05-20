
<body id="map1">
    <div class="contenu">
        <div class="terrainMap1">
            <div id="playerMap1">
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
            <div class="obstacle black line01">&nbsp;</div>
            <div class="obstacle black line02">&nbsp;</div>
            <div class="obstacle black line03">&nbsp;</div>
            <div class="obstacle black line04">&nbsp;</div>
            <div class="obstacle black line05">&nbsp;</div>
            <div class="obstacle black line06">&nbsp;</div>
            <div class="obstacle black line07">&nbsp;</div>
            <div class="obstacle black line08">&nbsp;</div>
            <div class="obstacle black line09">&nbsp;</div>
            <div class="obstacle black line10">&nbsp;</div>
            <div class="obstacle black line11">&nbsp;</div>
            <div class="obstacle black line12">&nbsp;</div>
            <div class="obstacle black line13">&nbsp;</div>
            <div class="obstacle black line14">&nbsp;</div>
            <div class="obstacle black line15">&nbsp;</div>
            <div class="obstacle black line16">&nbsp;</div>
            <div class="obstacle black line17">&nbsp;</div>
            <div class="obstacle black line18">&nbsp;</div>
            <div id="porte1Ferme" class="obstacle marron line19"><img src="Images/decor/porte.png" alt=""></div>
        </div>
        <div class="Ennemi">
            <div class="obstacle blue monstre1"><img class="monstre" src="Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre2"><img class="monstre" src="Images/decor/armureFantome.png" alt="">
            </div>
            <div class="obstacle blue monstre3"><img class="monstre" src="Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre4"><img class="monstre" src="Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre5"><img class="monstre" src="Images/decor/orcMarron.png" alt="">
            </div>
            <div class="obstacle blue monstre6"><img class="monstre" src="Images/decor/armureFantome.png" alt="">
            </div>
        </div>
        <div class="pieces">
            <div id="piece1" class="obstacle or piece"><img src="Images/decor/coin.png" alt=""></div>
            <div id="piece2" class="obstacle or piece"><img src="Images/decor/coin.png" alt=""></div>
            <div id="piece3" class="obstacle or piece"><img src="Images/decor/coin.png" alt=""></div>
            <div id="piece4" class="obstacle or piece"><img src="Images/decor/coin.png" alt=""></div>
        </div>
        <div class="deco">
            <div id="mur01" class="mur"><img src="Images/decor/murAbiméMousse.png" alt=""></div>
            <div id="mur02" class="mur"><img src="Images/decor/murAbimé.png" alt=""></div>
            <div id="mur03" class="mur"><img src="Images/decor/murAbimé.png" alt=""></div>
            <div id="mur04" class="mur"><img src="Images/decor/murAbiméMousse.png" alt=""></div>
            <div id="mur05" class="mur"><img src="Images/decor/murQuart.png" alt=""></div>
            <div id="mur06" class="mur"><img src="Images/decor/murTierAbimé.png" alt=""></div>
            <div id="mur07" class="mur"><img src="Images/decor/mur.png" alt=""></div>
            <div id="mur08" class="mur"><img src="Images/decor/murAbiméMousse.png" alt=""></div>
            <div id="mur09" class="mur"><img src="Images/decor/murDemiAbimé.png" alt=""></div>
            <div id="mur10" class="mur"><img src="Images/decor/murDemiAbiméMousse.png" alt=""></div>
            <div id="mur11" class="mur"><img src="Images/decor/murDemiAbimé.png" alt=""></div>
            <div id="mur12" class="mur"><img src="Images/decor/murQuartAbimé.png" alt=""></div>
            <div id="mur13" class="mur"><img src="Images/decor/murQuart.png" alt=""></div>
            <div id="mur14" class="mur"><img src="Images/decor/caisse.png" alt=""></div>
            <div id="mur15" class="mur"><img src="Images/decor/caisse.png" alt=""></div>
            <div id="mur16" class="mur"><img src="Images/decor/caisse.png" alt=""></div>
            <div id="mur17" class="mur"><img src="Images/decor/caisse.png" alt=""></div>
            <div id="mur18" class="mur"><img src="" alt=""></div>
            <div id="mur19" class="mur"><img src="" alt=""></div>
            <div id="mur20" class="mur"><img src="" alt=""></div>
        </div>
        <div id="key1" class="obstacle key"><img src="../../Images/decor/key.png" alt=""></div>
        <div id="" class="obstacle porte1"><img src="" alt="" srcset=""></div>
        <div class="menuJeu">
            <div class="nomPerso"></div>
            <div class="vie">
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="coeur viePerso"><img src="Images/decor/coeur.png" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div>
                <div class="invisibleVie viePerso"><img src="" alt=""></div>
            </div>
            <div class="menuOr">
                <div class="pieceMenu">
                    <div class="piece"><img src="Images/decor/coin.png" alt=""></div>
                </div>
                <div id="nombrePiece" class="nombrePiece">0</div>
            </div>
            <div class="keyMenu" id="keyMenu"></div>
            <div class="time" id="time">00:00</div>
        </div>
    </div>
    <script src="JS/jeu.js"></script>
    </body>
