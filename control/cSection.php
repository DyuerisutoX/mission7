<?php
    //Test si on a une valeur dans action et qu'elle vaut sec
    if(isset($action) && $action == "sec")
    {
        if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {//Si session n'existe pas direction vers page 403
            header("location:index.php?action=403");
        }

        //Si on a un 2e paramètre codeSect
        if (isset($_GET['codeSect']))
        {
            include "./models/sectionManager.php";
            include "./models/stagiairesManager.php";

            $retour = "<a href=\"index.php?action=trombi\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";

            $nomSect = $_GET['codeSect'];
            $tabSection = getListeSec();
            $tabStagiaires = getListeStag();
            $read = 0;
            $s = 0;


            foreach ($tabSection as $sections)
            {//Affiche en titre la section sélectionner
                $codeSec = $sections['codeSec'];
                $titreSec = $sections['libSec'];

                if ($nomSect == $codeSec || $nomSect == strtolower($codeSec))
                {
                    $titre = "Bienvenue, vous êtes sur la page section ".$titreSec. "<br>";
                    $libSect = $titreSec;
                    break;
                }

                else
                {
                    $s++;
                }
            
            }

            //Si la section ne se trouve pas dans la bdd
            if ($s == count($tabSection))
            {
                $libSect = "";
                $titre = "Section inexistante";
            }

            //Teste si la section chosie correspond à la section du stagiaire
            foreach($tabStagiaires as $stagiaires)
            {
                $secStag = $stagiaires['codeSec'];

                if ($nomSect !== $secStag && $nomSect !== strtolower($secStag))
                {
                    $read += 1;
                }

            }

            //Si aucun stagaire ne correspond
            if ($read == count($tabStagiaires))
            {//Le corps de incluera le fichier aucunStag
                $body = "aucunStag.php";
            }

            else
            {//Sinon incluera le fichier afficheStag
                $body = "affichStag.php";
            }

            //Titres du header et le cheminement du fichier vSection
            $header = "Section";
            $view = "vues/vSection.php";
        }


        else 
        {
            header("location:index.php?action=trombi");
        }
        
    }
        
?>