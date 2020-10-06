<?php
    //Test si on a une valeur dans action
    if(isset($action))
    {
        //Si action vaut trombi
        if ($action == "trombi")
        {

            if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
            {//Si session n'existe pas direction vers page accueil
                header("location:index.php?action=accueil&error=2");
            }

            else
            {
                //Charge les fichiers managers
                include "./models/sectionManager.php";
                include "./models/stagiairesManager.php";
                include "./models/initialesManager.php";

                $tabSection = getListeSec();
                $initiales = getInitiales();
                $tabStagiaires = getListeStag();
                
                $retour= "";

                //Titres du header et le cheminement du fichier vTrombi
                $header = "Trombinoscope";
                $view = "vues/vTrombi.php";
            }

        }
    }
        
?>