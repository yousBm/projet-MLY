<?php

$clients = ClientManager::getList();
?>

<form action="" method="POST">
        <div class="menu">
            <div class="menuderoulant">
                <select name="choixNiveau" id="choixNiveau" class="menuchoix">
                    <option value="Niveau 1">Niveau 1</option>
                    <option value="Niveau 2">Niveau 2</option>
                    <option value="Niveau 3">Niveau 3</option>
                    <option value="Niveau 4">Niveau 4</option>
                    <option value="Niveau 5">Niveau 5</option>
                </select>
            </div>
            <div class="menuderoulant">
                <select name="choixPerso" id="choixPerso" class="menuchoix">
                    <option value="perso 1">Perso 1</option>
                    <option value="perso 2">Perso 2</option>
                    <option value="perso 3">Perso 3</option>
                    <option value="perso 4">Perso 4</option>
                    <option value="perso 5">Perso 5</option>
                </select>
            </div>
            <div class="affichagePerso">
                <img src="../Images/Test.jpg" alt="remplacer la source par les sources dans la bdd">
                <div class="description">
                    <h2>Description personnage :</h2>
                    <p>Description du personnage à ramener ici de la bdd</p>
                </div>
            </div>
            <div class="btn3">
                <a href="" class="btn">Déconnection</a>
                <a href="" class="btn">Nouvelle partie</a>
                <a href="" class="btn">Voir scores</a>
            </div>
        </div>
    </form>