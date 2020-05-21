<?php

$niveau = NiveauManager::getList();
$perso = PersonnageManager::getList();
?>

<form action="index.php?action=map1" method="POST">
    <div class="menu">
        <div class="menuderoulant">
            <select name="choixNiveau" id="choixNiveau" class="menuchoix">
            <option value="niveauChoisir">Choix du niveau de difficulté</option>
                <?php
                $i=1;
                foreach ($niveau as $elt) {
                    echo "<option value='Niveau$i'>".$elt->getNomNiveau()."</option>";
                $i++;    
                } ?>
            </select>
        </div>
        <div class="menuderoulant">
            <select name="choixPerso" id="choixPerso" class="menuchoix">
                <option value="persoChoisir">Choix du personnage</option>
                <?php
                $i=1;
                foreach ($perso as $elt) {
                    echo "<option value='perso$i' image=".$elt->getAvatar()." description='".$elt->getDescriptionPersonnage()."' id='perso$i'>".$elt->getNomPersonnage()."</option>";
                $i++;
             } ?>    
            </select>
        </div> 
        <div class="affichagePerso">
           <div id="img"></div>
            <div class="description">
                <h2>Description personnage :</h2>
                <p id="description"> </p>
            </div>
        </div>
        <div class="btn3">
            <div class="btn"><a class="btn1" href="index.php?action=connect">Déconnexion</a></div>
            <input type="submit" class="btn2" value="Nouvelle partie">
            <div class="btn"><a class="btn1" href="index.php?action=scoreListe">Voir scores</a></div>
        </div>
    </div>
</form>

</body>