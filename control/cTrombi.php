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

                    $retour= "";


                    $header = "Trombinoscope";
                    $view = "vues/vTrombi.php";
                }
    
            }
        }
        
?>