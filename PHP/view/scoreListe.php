<?php
$scores=ScoreManager::get10Meilleur();
echo'
<div class="contenu column">
<div class="titreTab center"><h2 class="ecritureBlanche">TOP 10 DES MEILLEURS SCORES</h2></div>
<div class="tab marge borderBlue borderRadius">
    <div class="entete row fond ecritureBlanche">
        <div class="titreEntete case">Rang</div>
        <div class="titreEntete case">Pseudo</div>
        <div class="titreEntete case">Nombre de pièce</div>
        <div class="titreEntete case">Temps écoulé</div>
        <div class="titreEntete case">Score</div>
    </div>'; 
    $i=1;
    foreach ($scores as $score){
        echo 
        '<div class="ligne row">
            <div class="titreEntete case">'.$i.'</div>
            <div class="titreEntete case">'.$score->getUser()->getPseudo().'</div>
            <div class="titreEntete case">'.$score->getNbDePieceRecolte().'</div>
            <div class="titreEntete case">'.$score->getTime().'</div>
            <div class="titreEntete case">'.$score->getScoreObtenu().'</div>
        </div>';
        $i++;
    }
    echo '
<div class="bouton center">
<a class ="btn-a" href="index.php?action=menuListe"><div class="boutonRetour center margeBoutonTop ecritureBlanche">Retour</div></a>
</div>
</div>';
?>