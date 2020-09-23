<?php
    //page de menu qui test l'existence des var de session
    //et affiche soit le menu, soit un message d'erreur
    session_start();
    include "../data/login.php";

    $i = 0;
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
        
        <p>Valeur de email.....(<?php echo $_SESSION["valEmail"]; ?>)</p>
        <p>Valeur de mot de passe.....(<?php echo $_SESSION["valPassword"]; ?>)</p>

        <p><a href="index.php">Retour à la page d'accueil</a></p>

        <?php
            }

            if ($_SESSION["valEmail"] == $login[0][0])    //authetification OK ==> menu
            {
        ?>

        <h1>Au menu du jour pour vous, <?php echo $_SESSION["valEmail"]; ?></h1>

        <ul>
            <li><a href="../">Sommaire</a></li>
            <li>Et aussi...</li>
            <li>Et encore...</li>
            <li>Et pour finir...</li>
        </ul>

        <br>

        <form action="testDestroy.php">
            <input type="submit" value="Déconnexion">
        </form>

        <p>Valeur de email.....(<?php echo $_SESSION["valEmail"]; ?>)</p>
        <p>Valeur de mot de passe.....(<?php echo $_SESSION["valPassword"]; ?>)</p>

            <?php     
                foreach ($login as list($a)) {
                    // $a contient le premier élément du tableau interne,
                    // et $b contient le second élément.
                    echo "\$login[$i] A: $a<br>";
                    $i++;
                }
            ?>

        <?php
            }

            else
            {
        ?>

        <p>Connexion KO</p>
        <p><a href="index.php">Réessayer</a></p>

        <?php
            }
        ?>



	</body>

</html>