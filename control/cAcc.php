<?php

    if (isset($action) && $action == "accueil")
    {
        if(isset($action) && isset($erreur))
        {

            if ($action == "accueil" && $erreur == 1)
            {
                $msgErreur = "Identifiants ou mot de passe incorrects";
                $view = "vues/vAccueil.php";
            }

            else if ($action == "accueil" && $erreur == 2)
            {
                $msgErreur = "Session déconnecté ou expiré";
                $view = "vues/vAccueil.php";
            }

            else
            {
                header("location:index.php?action=acc");
            }

        
        }

        else
        {
            $msgErreur = "";
            $view = "vues/vAccueil.php";

        }

    }

    else
    {
        header("location:index.php?action=accueil");
    }
        
?>