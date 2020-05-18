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
                <?php
                foreach ($perso as $elt) {
                ?>
                    <option value="Perso 1"><?php echo $elt->getNomPersonnage() ?></option>
            </select>
        </div> 
        <div class="affichagePerso">
            <img src="<?php echo $elt->getAvatar() // bug ?>" alt="remplacer la source par les sources dans la bdd">
            <div class="description">
                <h2>Description personnage :</h2>
                <p>
                    <?php
                    echo $elt->getDescriptionPersonnage() //bug aussi 
                    ?>
                </p>
            <?php } ?>
            </div>
        </div>
        <div class="btn3">
            <a href="" class="btn">Déconnection</a>
            <a href="" class="btn">Nouvelle partie</a>
            <a href="" class="btn">Voir scores</a>
        </div>
    </div>
</form>