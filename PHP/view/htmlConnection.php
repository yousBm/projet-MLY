<div class="content">
    <form class="connect-form" action="index.php?action=connect" method="post">

        <div class="head-connexion">Connexion</div>
        <div class="container">
            <div class="contenu">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input class="input-co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Entrez votre Pseudo" pattern="[a-zA-Z0-9]){3,20}" required autofocus>

            </div>

            <div class="contenu">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input class="input-co" type="password" name="motDePasse" id="motDePasse" maxlength="30" placeholder="Entrez votre mot de passe" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})" required>
                <div id="oeil"><i class="fa fa-eye" aria-hidden="true"></i></div>
            </div>


            <div class="centre">
                <input class="button" type="submit" value="Valider" />
                <a class="lien-a" href="index.php?action=nouveauUser">Pas encore inscrit ?</a>
            </div>
        </div>

    </form>
</div>