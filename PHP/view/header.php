<?php
//Attribution des variables de session
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
?>

<body>
<header class="header-co">
    <div class="logo">
        <img class="logo" src="Images/logo.png" alt="Logo"></div>
    <div id="title">Bienvenue sur Jeumly</div>
    <div class="esp">
    <?php if ($pseudo!=""){ 
                    echo '<div class="esp">'.$pseudo.'</div> ';
    }
    ?> </div>


</header>
   