<?php
        if(isset($action))
        {

            if ($action == "trombi")
            {

                if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
                {
                    //$view = "vues/vPage403.php";
                    header("location:index.php?action=accueil&error=2");
                }

                else
                {
                    include "./models/data.php";
                    $section = getListeSec();
                    $initiales = getInitiales();
                    $stagiaires = getListeStag();

                    // for ($a = 0; $a < count($stagiaires); $a++)
                    // {
                    //     if ($section[$a][0] == $stagiaires[$a][0])
                    //     {
                           
                    //     }
                    // }
                    $nbeStag = count($section);

                    $retour= "";


                    $header = "Trombinoscope";
                    $view = "vues/vTrombi.php";
                }
    
            }
        }
        
?>