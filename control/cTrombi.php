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
                    include "./models/sectionManager.php";
                    include "./models/stagiairesManager.php";
                    include "./models/initialesManager.php";

                    $tabSection = getListeSec();
                    $initiales = getInitiales();
                    $tabStagiaires = getListeStag();
                    

                    // foreach ($tabStagiaires as $stag)         //$a = 0; $a < count($stagiaires); $a++
                    // {
                    //     $secStag = $stag['codeSec'];
                    //     if ($section[$a][0] == $stagiaires[$a][0])
                    //     {
                           
                    //     }
                    // }

                    $nbeStag = count($tabStagiaires);

                    $retour= "";


                    $header = "Trombinoscope";
                    $view = "vues/vTrombi.php";
                }
    
            }
        }
        
?>