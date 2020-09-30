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
                include "./models/data.php";

                $retour = "<a href=\"index.php?action=trombi\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";

                $nomSect = $_GET['codeSect'];
                $section = getListeSec();
                $stagiaires = getListeStag();
                $read = 0;

                for ($s = 0; $s < count($section); $s++)
                {
                    if ($nomSect == $section[$s][0] || $nomSect == strtolower($section[$s][0]))
                    {
                        $titre = "Bienvenue, vous êtes sur la page section ".$section[$s][1]. "<br>";
                        $libSect = $section[$s][1];
                        break;
                    }
                
                }

                if ($s == count($section))
                {
                    // $s;
                    $libSect = "";
                    $titre = "Section inexistante";
                }


                for($st = 0 ; $st < count($stagiaires) ; $st++)
                {
                    if ($nomSect !== $stagiaires[$st][0] && $nomSect !== strtolower($stagiaires[$st][0]))
                    {
                        $read += 1;
                    }

                }

                if ($read == count($stagiaires))
                {
                    // $body = "includes/section/aucunStag.php";
                    $msg = "Aucun stagiaire dans la section" .$libSect;
                    $body = "aucunStag.php";
                }
    
                else
                {
                    // $body = "includes/section/affichStag.php";
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

        else
        {
            header("location:index.php?action=404");
        }
        
?>