<?php
        if(isset($action) && $action == "init")
        {

            if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
            {
                //$view = "vues/vPage403.php";
                header("location:index.php?action=403");
            }

            if (isset($_GET['lettr']))
            {
                include "./models/stagiairesManager.php";
                include "./models/initialesManager.php";

                $retour = "<a href=\"index.php?action=trombi\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";

                $lettre = $_GET['lettr'];
                $initiales = getInitiales();
                $tabStagiaires = getListeStag();
                $read = 0;
                // $st = 0;

                for ($l = 0; $l < count($initiales); $l++)
                {
                    if ($lettre == $initiales[$l] || $lettre == strtolower($initiales[$l]))
                    {
                        $titre = "Vous avez choisi la lettre $initiales[$l] <br>";
                        break;
                    }
                
                }

                if ($l == count($initiales))
                {
                    $titre = "Initiales inexistante";
                }


                for($st = 0 ; $st < count($tabStagiaires) ; $st++)
                {
                    // $nom = $tabStagiaires['nomSta']

                    if ($lettre !== substr($tabStagiaires[$st]['nomSta'],0,1) && $lettre !== strtolower( substr($tabStagiaires[$st]['nomSta'],0,1)))
                    {
                        $read += 1;
                    }

                }

                if ($read == count($tabStagiaires))
                {
                    $body = "includes/initiales/aucunStag.php";
                }
    
                else
                {
                    $body = "includes/initiales/affichStag.php";
                }
    
                $header = "Initiales";
                $view = "vues/vInit.php";
            }

            else
            {
                header("location:index.php?action=trombi");
            }

    
            
        }

        else
        {
            header("location:index.php?action=404");
        }
        
?>