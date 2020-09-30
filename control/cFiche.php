<?php

    if(isset($action) && $action == "fiche")
    {

        if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {
            //$view = "vues/vPage403.php";
            header("location:index.php?action=403");
        }

        if (isset($_GET['sec']) || isset($_GET['init']))
        {

            if (isset($_GET['sec']))
            {
                $sec = $_GET['sec'];
                $from = "?action=sec&codeSect=$sec";
                $test = "?action=sec&codeSect=$sec";
            }

            else if (isset($_GET['init']))
            {
                $init = $_GET['init'];
                $from = "?action=init&lettr=$init";
                $test = "?action=init&lettr=$init";
            }

            if (isset($_GET['codeStag']))
            {
                include "./models/data.php";
    
                
                
                $retour = "<a href=\"index.php$from\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";
    
                // $nomSect = $_GET['codeSect'];
                // $section = getListeSec();
                $stagiaires = getListeStag();
                // $read = 0;
    
                foreach ($stagiaires as list($codeSect, $codeStag, $nom, $prenom, $dateBirth, $noTel, $ville, $mail, $interne, $photo))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
                {//Créer des cartes pour chaques valeurs dans le tableau
                    if ($_GET['codeStag'] == $codeStag)
                    {
        
                        $profil = "<div class=\"container mt-5 mb-5\">
                            <div class=\"row\">
                                <div id=\"dispo\" class=\"col-md-6 offset-md-3\">
            
                                    <img id=\"identity\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\">
            
                                    <h4>$nom $prenom</h4>
                                    <ul class=\"timeline\">
                                        <li>
                                            Section: $codeSect
                                        </li>
            
                                        <li>
                                            Date de naissance: $dateBirth
                                        </li>
            
                                        <li>
                                            GSM: $noTel
                                        </li>
            
                                        <li>
                                            Ville: $ville
                                        </li>
            
                                        <li>
                                            Mail: $mail
                                        </li>
            
                                        <li>
                                            Interne: $interne
                                        </li>
            
            
            
                                    </ul>
                                </div>
                            </div>
                        </div>";
                    }
            
                }
    
                $header = "Fiche Stagiaire";
                $view = "vues/vFiche.php";
    
            }

            else
            {
                header("location:index.php$test");
            }
    
        }


        else
        {
            header("location:index.php?action=trombi");
        }


        
    }
        
?>