<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/project.css" />
    <title>Header</title>
</head>

<body>
    <header>
        <div class="high">
            <a href="home.php"> <img class="icon" src="images/bde.png" alt="logo_bde"></a>

            <h1 class="hey">BDE Cesi Bordeaux</h1>
            <?php

            if (!isset($_SESSION)) {
                session_start(); //on vérifie si session star n'a pas deja était , si ce n'est pas le cas on en fait une 
            }
            if (isset($_SESSION['user_name'])) {
                echo '<div> <h5><a href="connexion/profil.php">' . $_SESSION['user_name']  . '</a> |  <a href="connexion/deconnexion.php">Deconnexion</a></h5></div>';
            } else {
                echo '
                <div >
                <div> <a href="connexion/mention.php"> S\'inscrire</a>  |  <a href="connexion/connexion.php?var=">Se connecter</a>
                </div>';
            }
            ?>
        </div>
        </div>
        </div>
    </header>

    <?php
    ?>
</body>

</html>