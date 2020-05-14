<?php
$pseudo="";
$nbPiece="";
$temps="";
$score="";
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
    for ($i=0;$i<10;$i++){
        echo 
        '<div class="ligne row">
            <div class="titreEntete case">'.($i+1).'</div>
            <div class="titreEntete case">'.$pseudo[$i].'</div>
            <div class="titreEntete case">'.$nbPiece[$i].'</div>
            <div class="titreEntete case">'.$temps[$i].'</div>
            <div class="titreEntete case">'.$score[$i].'</div>
        </div>';
    }
    echo '
<div class="bouton center">
    <div class="boutonRetour center margeBoutonTop ecritureBlanche">Retour</div>
</div>
</div>';
?>