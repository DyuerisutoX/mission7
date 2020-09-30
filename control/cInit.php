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
                include "./models/data.php";

                $retour = "<a href=\"index.php?action=trombi\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";

                $lettre = $_GET['lettr'];
                $initiales = getInitiales();
                $stagiaires = getListeStag();
                $read = 0;

                for ($l = 0; $l < count($initiales); $l++)
                {
                    if ($lettre == $initiales[$l] || $lettre == strtolower($initiales[$l]))
                    {
                        $titre = "Vous avez chosi la lettre $initiales[$l] <br>";
                        break;
                    }
                
                }

                if ($l == count($initiales))
                {
                    $titre = "Initiales inexistante";
                }


                for($st = 0 ; $st < count($stagiaires) ; $st++)
                {
                    if ($lettre !== substr($stagiaires[$st][2],0,1) && $lettre !== strtolower( substr($stagiaires[$st][2],0,1)))
                    {
                        $read += 1;
                    }

                }

                if ($read == count($stagiaires))
                {
                    // $body = "includes/section/aucunStag.php";
                    $body = "includes/initiales/aucunStag.php";
                }
    
                else
                {
                    // $body = "includes/section/affichStag.php";
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