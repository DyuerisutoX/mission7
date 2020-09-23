<?php
    //page de menu qui test l'existence des var de session
    //et affiche soit le menu, soit un message d'erreur
    session_start();
    include "../data/login.php";
    

?>


<!DOCTYPE html>
<html>

	<head>
        <meta http-equiv="Content-Type" content="text/html" charset = "utf-8/">
		<title>

            <?php //titre page variable
                if(!(isset($_SESSION["valEmail"])))
                {
                    echo "ERREUR login";
                }

                else
                {
                    echo "Au menu...";
                }
            ?>
        </title>

		
	</head>

    <body>

    <?php   //cas d'erreur ==> retour vers login.html
        if(!(isset($_SESSION["valEmail"])))
        {
    ?>

        <h1>ERREUR login: vous n'avez pas droit d'accès à ce site</h1>
        
        <a href="../index.php"><button>Retour à la page d'accueil</button></a>

        <?php
            }

            else    //authetification OK ==> menu
            {
        ?>

    <p>Connexion OK</p>
        <p>Bienvenue <?php echo $_SESSION["valName"] ?></p>

        <form action="testDestroy.php">
            <input type="submit" value="Déconnexion">
        </form>

    <?php
        }
    ?>


    </body>



</html>