<?php
    //Test si on a une valeur dans action et qu'elle vaut init
    if(isset($action) && $action == "init")
    {

        if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {//Si session n'existe pas direction vers page 403
            header("location:index.php?action=403");
        }

        //Si on a un 2e paramètre lettr
        if (isset($_GET['lettr']))
        {
            include "./models/stagiairesManager.php";
            include "./models/initialesManager.php";

            $retour = "<a href=\"index.php?action=trombi\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";

            $lettre = $_GET['lettr'];
            $initiales = getInitiales();
            $tabStagiaires = getListeStag();
            $read = 0;

            for ($l = 0; $l < count($initiales); $l++)
            {//Affiche en titre la lettre sélectionner issu du tableau initiales
                if ($lettre == $initiales[$l] || $lettre == strtolower($initiales[$l]))
                {
                    $titre = "Vous avez choisi la lettre $initiales[$l] <br>";
                    break;
                }
            
            }

            //Si la lettre ne se trouve pas dans le tableau initiales
            if ($l == count($initiales))
            {
                $titre = "Initiales inexistante";
            }

            //Teste si la lettre choisie correspond à la 1ere lettre du nom d'un stagiaire
            for($st = 0 ; $st < count($tabStagiaires) ; $st++)
            {

                if ($lettre !== substr($tabStagiaires[$st]['nomSta'],0,1) && $lettre !== strtolower( substr($tabStagiaires[$st]['nomSta'],0,1)))
                {
                    $read += 1;
                }

            }

            //Si aucun stagaire ne correspond
            if ($read == count($tabStagiaires))
            {//Le corps de incluera le fichier aucunStag
                $body = "includes/initiales/aucunStag.php";
            }

            else
            {//Sinon incluera le fichier afficheStag
                $body = "includes/initiales/affichStag.php";
            }

            //Titres du header et le cheminement du fichier vInit
            $header = "Initiales";
            $view = "vues/vInit.php";
        }

        //Si un seul param action = init
        else
        {//Redirection
            header("location:index.php?action=trombi");
        }


        
    }
        
?>