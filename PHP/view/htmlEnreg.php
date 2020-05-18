<header class="header-co">
    <div class="logo">
        <img src="../Images/logoMLY.png" alt="Logo"></div>
    <div id="title"><?php echo $titre ?></div>
    <div class="esp"></div>

</header>

<div class="content">
    <form class="connect-form" action="" method="post">

        <div class="head-connexion">Inscription</div>
        <div class="container">
            <div class="contenu">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input class="input-co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Entrez votre Pseudo" pattern="[a-zA-Z0-9]){3,20}" required autofocus>
            </div>

            <div class="contenu">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input class="input-co" type="password" name="motDePasse" id="motDePasse" maxlength="30" placeholder="Entrez votre mot de passe" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})" required>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>

            <div class="contenu">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input class="input-co" type="password" name="confirm-mdp" id="confirm-mdp" maxlength="30" placeholder="Confirmer le Mot de Passe" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})" required>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
        </div>


        <div class="centrer">
            <input class="bouton centrer" type="submit" value="Valider" />
        </div>

    </form>
</div>