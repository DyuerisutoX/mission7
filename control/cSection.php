<?php
        if(isset($action) && $action == "sec")
        {
            if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
            {
                //$view = "vues/vPage403.php";
                header("location:index.php?action=403");
            }

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
                {
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

                if ($s == count($tabSection))
                {
                    $libSect = "";
                    $titre = "Section inexistante";
                }


                foreach($tabStagiaires as $stagiaires)
                {
                    $secStag = $stagiaires['codeSec'];

                    if ($nomSect !== $secStag && $nomSect !== strtolower($secStag))
                    {
                        $read += 1;
                    }

                }

                if ($read == count($tabStagiaires))
                {
                    $body = "aucunStag.php";
                }
    
                else
                {
                    $body = "affichStag.php";
                }
    
                $header = "Section";
                $view = "vues/vSection.php";
            }


            else 
            {
                header("location:index.php?action=trombi");
            }
            
        }
        
?>