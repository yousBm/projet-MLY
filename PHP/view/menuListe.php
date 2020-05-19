<?php

$niveau = NiveauManager::getList();
$perso = PersonnageManager::getList();
?>

<form action="" method="POST">
    <div class="menu">
        <div class="menuderoulant">
            <select name="choixNiveau" id="choixNiveau" class="menuchoix">
                <?php
                foreach ($niveau as $elt) {
                ?>
                    <option value="Niveau 1"><?php echo $elt->getNomNiveau() ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="menuderoulant">
            <select name="choixPerso" id="choixPerso" class="menuchoix">
                <option value="">choisissez votre personnage</option>
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
            <a href="index.php?action=connect" class="btn">Déconnexion</a>
            <a href="" class="btn">Nouvelle partie</a>
            <a href="" class="btn">Voir scores</a>
        </div>
    </div>
</form>