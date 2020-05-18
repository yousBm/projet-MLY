<?php
$scores=ScoreManager::get10Meilleur();
echo'
<div class="contenu column">
<div class="titreTab center"><h1 class="ecritureBlanche">TOP 10 DES MEILLEURS SCORES</h1></div>
<div class="tab marge borderBlue borderRadius">
    <div class="entete row fond ecritureBlanche">
        <div class="titreEntete case">Rang</div>
        <div class="titreEntete case">Pseudo</div>
        <div class="titreEntete case">Nombre de piece</div>
        <div class="titreEntete case">Temps ecoulé</div>
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
    <div class="boutonRetour center margeBoutonTop ecritureBlanche">Retour</div>
</div>
</div>';
?>